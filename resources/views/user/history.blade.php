@extends('layouts.app')
@section ('content')
  <section>
  <div class="col-lg-12 pb-5 ">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Winned Bids</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                <table class="table align-middle mb-1 bg-light">
                                  <thead class="bg-light">
                                    <tr>
                                      <th>Product Name</th>
                                      <th>Product Price</th>
                                      <th>Your Bid</th>
                                      <th>Highest Bid</th>
                                      <th>Bid Time</th>
                                      <th>Status</th>
                                    </tr>
                                  </thead>
                                  @foreach($history as $i)
                                  <tbody>
                                    <tr>
                                      <td class="table-secondary">
                                        <div class="d-flex align-items-center">
                                          <div class="ms-3">
                                              <a href="{{route('product.view', $i->product_id)}}"><p class="fw-bold mb-1">{{$i->product_name}}</p></a>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-secondary">
                                        @if($i->product != null)
                                          <span class="fw-bold mb-1">Rs.{{number_format((float)$i->start_price, 2, '.', '')}}</span>
                                        @else
                                          <span class="fw-bold mb-1">Unknown</span>
                                        @endif
                                      </td>
                                      <td class="table-secondary">
                                        <span class="fw-bold mb-1">Rs.{{number_format((float)$i->amount, 2, '.', '')}}</span>
                                      </td>

                                      <td class="table-secondary">
                                        <span class="fw-bold mb-1">Rs.{{number_format((float)$i->max_bid, 2, '.', '')}}</span>
                                      </td>

                                    <td class="table-secondary">
                                        <p class="fw-normal mb-1">{{$i->created_at}}</p>
                                    </td>

                                    <td class="table-secondary">
                                        <p class="fw-normal mb-1">{{$i->status}}</p>
                                    </td>
                                
                                  </tbody>
                                  @endforeach
                              </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                <table class="table align-middle mb-1 bg-light">
                                  <thead class="bg-light">
                                    <tr>
                                      <th>Product Name</th>
                                      <th>Product Price</th>
                                      <th>Your Bid</th>
                                      <th>Bid Time</th>
                                      <th>Payment</th>
                                    </tr>
                                  </thead>
                                  @foreach($win as $i)
                                  <tbody>
                                    <tr>
                                      <td class="table-secondary">
                                        <div class="d-flex align-items-center">
                                          <div class="ms-3">
                                              <a href="{{route('product.view', $i->product_id)}}"><p class="fw-bold mb-1">{{$i->product->name}}</p></a>
                                          </div>
                                        </div>
                                      </td>
                                      <td class="table-secondary">
                                        @if($i->product != null)
                                          <span class="fw-bold mb-1">Rs.{{number_format((float)$i->product->price, 2, '.', '')}}</span>
                                        @else
                                          <span class="fw-bold mb-1">Unknown</span>
                                        @endif
                                      </td>
                                      <td class="table-secondary">
                                        <span class="fw-bold mb-1">Rs.{{number_format((float)$i->bid->amount, 2, '.', '')}}</span>
                                      </td>

                                    <td class="table-secondary">
                                        <p class="fw-normal mb-1">{{$i->bid->created_at}}</p>
                                    </td>

                                    <td class="table-secondary">
                                        <button type="submit" class="btn btn-primary" onclick='location="{{route('payment.payment', $i->id )}}"'>{{__('View')}}</button>
                                    </td>
                                
                                  </tbody>
                                  @endforeach
                              </table>
                                    
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
  </section>

  <!-- Js Plugins
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('js/jquery.slicknav.js')}}"></script> 
  <script src="{{asset('js/mixitup.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  -->

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection


