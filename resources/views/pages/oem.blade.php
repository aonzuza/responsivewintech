@extends('layouts.app')


@section('content')

<div class="oem-page-wrapper">

          <!-- <div class="oem-header-wrapper">

          <img style="width:100%;height:auto;" src="https://dummyimage.com/1920x664/" />

          </div> -->
          <div class="product-header-img-wrapper">

              <img style="width:100%;height:auto" src="{{asset('images/products/product_header/oem_made_to_order.jpg').'?'.time()}}" />

          </div>

          <div class="oem-text-wrapper d-flex justify-content-end" >

              <p>
                @lang('oemmadetoorder.text')
              </p>


          </div>


</div>





@endsection
