@extends('layouts.app')


@section('content')


<div class="products-page-wrapper">

      <div class="product-first-wrapper product-header-img-wrapper">

          <!-- <img style="width:100%;height:auto" src="{{asset('images/products/product_head.png')}}" /> -->

          <img style="width:100%;height:auto" src="{{asset('images/products/product_header').'/'.$headerImg.'?'.time()}}" />

      </div>

      @IF($isSteelDoor)


      <div class="steeldoor-second-row-wrapper">
        <div class="container-fluid">

              <div class="row">

                    <div class="col-md-6">

                          <div class="steeldoor-second-img-wrapper">
                                <img style="width:100%;height:auto;" src="https://dummyimage.com/850x980/" />
                          </div>

                    </div>
                    <div class="col-md-6">

                            <div class="steepdoor-second-text-wrapper d-md-flex align-items-center">

                                <p class="lead">
                                  @lang('steeldoor.text')
                                </p>


                            </div>

                    </div>

              </div>

        </div>



      </div>
      @endif

      <div class="product-second-wrapper">

        <div class="container-fluid">

              <div class="row">

                  @foreach( $products as $product)

                  @if( $loop->index%5 == 0)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 offset-lg-1">
                  @else
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                  @endif

                        <div class="product-item-wrapper" style="height:100%;">
                              <div class="product-image-wrapper">
                                  <img style="width:100%;height:auto;" data-desc="{{$product->Image_Big}}" src="{{asset('images/products/items/'.$product->Image)}}" />
                              </div>
                              <div class="product-name-wrapper text-center">

                                  @if(Session::get('locale') == 'en')
                                      {{$product->ProductName_EN }}
                                  @else
                                      {{$product->ProductName_TH }}
                                  @endif

                              </div>
                        </div>

                    </div>

                  @endforeach
              </div>
                <!-- end row -->
          </div>
          <!-- end container -->


</div>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="product-modal-body-wrapper">

            <img style="width:100%;height:auto;" alt="No description available" src="" />

        </div>


      </div>

    </div>
  </div>
</div>

@endsection


@section('script')

<script type="text/javascript">

$(window).resize(function() {
    resizeProductItems();
});


$(document).ready(function(){



      resizeProductItems();

      $('.product-image-wrapper img').click(function(){

          var desc = $(this).data('desc');
          //
          var imgSrc = '{{ asset('images/products/item_Description/')}}' +'/'+desc;

          $('.product-modal-body-wrapper img').attr('src',imgSrc);
          $('#myModal').modal('show');


      });


});

function resizeProductItems(){

  $('.product-image-wrapper img').height('auto');
  var minHeight = $('.product-image-wrapper img').eq(0).height();

  $('.product-image-wrapper img').height(minHeight);

}


</script>

@endsection
