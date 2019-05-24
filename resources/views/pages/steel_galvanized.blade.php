@extends('layouts.app')


@section('content')

<div class="steel-page-wrapper">


        <!-- <div class="steep-page-first-wrapper">

              <img style="width:100%;height:auto;" src="https://dummyimage.com/1920x840/" />

        </div> -->
        <div class="product-header-img-wrapper">

            <img style="width:100%;height:auto" src="{{asset('images/products/product_header/steel_galvanized.jpg').'?'.time()}}" />

        </div>


        <div class="container">
          <div class="row">
                <div class="col-10 offset-1 col-sm-12 offset-sm-0 col-lg-10 offset-lg-1">

                  <div class="steep-page-second-wrapper">

                    <p>
                      
                      @lang('steelpipe.text')
                    </p>

                  </div>

                </div>
          </div>
        </div>




</div>

@endsection
