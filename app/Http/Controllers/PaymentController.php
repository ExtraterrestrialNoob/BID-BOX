<?php
  
namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use App\Models\winner;
use Intervention\Image\Gd\Commands\WidenCommand;

class PaymentController extends Controller
{
    public $gateway;
    public $completePaymentUrl;
    // public $da;
 
    public function __construct()
    {
        $this->gateway = Omnipay::create('Stripe\PaymentIntents');
        $this->gateway->setApiKey( env('STRIPE_SECRETE'));
        $this->completePaymentUrl = url('confirm');
        // $this->data =  winner::where('id',$wid)->with('bid','user')->first();
    }
 
    public function index($wid)
    {
        $win_id = $wid;
        $data = winner::where('id',$wid)->with('bid','user')->first();
        // dd($data);
        // echo $data;
        return view('payment.payment',compact('win_id'));
    }
 
    public function process(Request $request, $win_id)
    {
        $data = winner::where('id',$win_id)->with('bid','user')->first();
        if($request->input('stripeToken'))
        {
            $token = $request->input('stripeToken');
            // dd($data);
            $response = $this->gateway->authorize([
                // 'amount' => Bid::where('id',winner::where('id',$wid)->get('amount')),
                'amount'=>$data->bid->amount,
                'currency' => env('STRIPE_CURRENCY'),
                'description' => 'This is a X purchase transaction.',
                'token' => $token,
                'returnUrl' => $this->completePaymentUrl.'/'.$win_id,
                'confirm' => true,
                // 'receipt_email' => $data->user->email,
                
            ])->send();
 
            if($response->isSuccessful())
            {
                // dd();
                $response = $this->gateway->capture([
                    'amount' => $data->bid->amount,
                    'currency' => env('STRIPE_CURRENCY'),
                    'paymentIntentReference' => $response->getPaymentIntentReference(),
                    // 'receipt_url' => $this->da->getData(),
                ])->send();
                    // echo ($response->paymentIntentReference);
                // echo $response->data;
                $arr_payment_data = $response->getData();
                // dd($arr_payment_data);
                $this->store_payment([     
                    'payment_id' => $arr_payment_data['id'],
                    // 'email' => $data->user->email, 
                    'amount' => $arr_payment_data['amount']/100,
                    'currency' => env('STRIPE_CURRENCY'),
                    'status' => $arr_payment_data['status'],
                    // 'receipt_url' => $arr_payment_data['receipt_url'],
                ]);
 
                return redirect("payment/".$win_id)->with("success", "Payment is successful. Your payment id is: ". $arr_payment_data['id']);
            }
            elseif($response->isRedirect())
            {
                // session(['email' => $data->user->email]); 
                $response->redirect();
            }
            else
            {
                return redirect("payment/".$win_id)->with("error", $response->getMessage());
            }
        }

        // dd($request);
    }
 
    public function confirm(Request $request, $win_id)
    {
        // $data = winner::where('id',$win_id)->with('bid','user')->first();

        $response = $this->gateway->confirm([
            'paymentIntentReference' => $request->input('payment_intent'),
            'returnUrl' => $this->completePaymentUrl.'/'.$win_id,
            
        ])->send();
         
        if($response->isSuccessful())
        {
            $response = $this->gateway->capture([
                'amount' =>$request->input('amount'),
                'currency' => env('STRIPE_CURRENCY'),
                'paymentIntentReference' => $request->input('payment_intent'),
                // 'receipt_url' => $response->getreceipt_url(),
            ])->send();
 
            $arr_payment_data = $response->getData();
 
            $this->store_payment([
                'payment_id' => $arr_payment_data['id'],
                // 'email' =>  $data->user->email,
                'amount' => $arr_payment_data['amount']/100,
                'currency' => env('STRIPE_CURRENCY'),
                'status' => $arr_payment_data['status'],
                // 'receipt_url' => $arr_payment_data['receipt_url'],
            ]);
 
            return redirect("payment/".$win_id)->with("success", "Payment is successful. Your payment id is: ". $arr_payment_data['id']);
        }
        else
        {
            return redirect("payment/".$win_id)->with("error", $response->getMessage());
        }
    }
 
    public function store_payment($arr_data = [])
    {
        $isPaymentExist = Payment::where('payment_id', $arr_data['payment_id'])->first();  
  
        if(!$isPaymentExist)
        {
            $payment = new Payment;
            $payment->payment_id = $arr_data['payment_id'];
            // $payment->email = $arr_data['email'];
            $payment->amount = $arr_data['amount'];
            $payment->currency = env('STRIPE_CURRENCY');
            $payment->status = $arr_data['status'];
            // $payment->receipt_url = $arr_data['receipt_url'];
            $payment->save();
        }
    }
}