@extends('layouts.app')


@section('content')

<div class="oem-page-wrapper">


          <div class="product-header-img-wrapper">

              <img style="width:100%;height:auto" src="{{asset('images/products/product_header/oem_made_to_order.jpg').'?'.time()}}" />

          </div>


          <div class="container">
            <div class="row">
                  <div class="col-12 col-lg-6">
                        <img style="width:100%;height:auto" src="{{asset('images/oem/oem.png').'?'.time()}}" />
                        <!-- <img style="width:100%;height:auto;" src="https://dummyimage.com/800x600/" /> -->
                  </div>
                  <div class="col-12 col-lg-6">
                        <div class="oem-text-wrapper">
                          <p>
                            @lang('oemmadetoorder.text')
                          </p>
                        </div>
                  </div>
            </div>
          </div>


          <!-- <div class="oem-text-wrapper d-flex justify-content-end" >

              <p>
                @lang('oemmadetoorder.text')
              </p>


          </div> -->


</div>





@endsection
