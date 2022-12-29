@component('mail::message')
#Thank you for your order!

your order id is <b>{{$temp['win_id']}}</b>

@component('mail::table')
| Item          | Price    |
| ------------- | --------:|
| {{$temp['data']['product']['name']}}      | Rs. {{ number_format((float)$temp['product']['price'], 2, '.', '')}}      |

@endcomponent

Thanks,<br>
{{config('app.name')}}
@endcomponent