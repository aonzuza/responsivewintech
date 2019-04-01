@extends('layouts.app')



@section('content')

<!-- product header  -->
<div class="downloads-page-wrapper">

    <div class="container-fluid">

    @foreach($groups as $group)
        <!--  header group section -->
            <div class="container-fluid">

                  <div class="row">

                      <div class="col-12 col-lg-11 offset-lg-1">

                        <h2 class="downloads-header">

                            @if(Session::get('locale') == 'en')
                                    {{ $group->name_EN}}
                            @else
                                    {{ $group->name_TH}}
                            @endif


                        </h2>

                      </div>

                  </div>
            </div>

            @php
              $itemCounter = 0
            @endphp
            <div class="downloads-container-wrapper">
              <!--start row  -->
                <div class="row">
                  @foreach($items as $item)

                      @if( $item->groupID == $group->groupID)

                        <!-- start col -->
                        @if($itemCounter%5 == 0)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 offset-lg-1">
                        @else
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        @endif

                              <!-- content  -->
                              <div class="downloads-item-wrapper mx-auto">
                                <div class="downloads-image-wrapper">
                                  <img src="images/downloads/{{$item->image}}?{{time()}}" alt=""  />
                                </div>
                                <div class="downloads-text-wrapper">
                                  <span>
                                        @if(Session::get('locale') == 'en')
                                                {{ $item->name_EN}}
                                        @else
                                                {{ $item->name_TH}}
                                        @endif
                                  </span>
                                </div>
                                <div class="download-link-wrapper">
                                  <a href="images/downloads/PDF/{{ $item->pdf}}" download="{{$item->pdf}}" target="_blank">@lang('downloads.downloadpdf')</a>
                                </div>
                              </div>

                              <!-- end content -->

                        <!-- end col -->
                        </div>



                        @php $itemCounter +=1 @endphp
                      @endif
                  @endforeach
                  <!-- end row -->
                </div>
            </div>


    @endforeach

    </div>

</div>
@endsection

@section('script')

<script type="text/javascript">


$(window).resize(function() {
    adjustImageDownloads();
});





$(document).ready(function(){

  setInterval(function(){
      // console.log('2');
    adjustImageDownloads();
  },1000);

  adjustImageDownloads();

});

function adjustImageDownloads(){


  // console.log('called');
  var count = $('.downloads-image-wrapper img').length;
  var maxHeight = 0;
  for(var i=0; i < count; i++){

     var height =  $('.downloads-image-wrapper img').eq(i).height();
     if( height > maxHeight){
       maxHeight = height;
     }
  }
  $('.downloads-image-wrapper').height(maxHeight);

  //
  // console.log('min height' + minHeight);
  //
   var totalTextWrapper = $('.downloads-text-wrapper').length;
   var maxHeight = 0;
   for(var i=0; i < totalTextWrapper; i++){

      var height =  $('.downloads-text-wrapper').eq(i).height();
      if( maxHeight < height){
        maxHeight = height;
      }
   }
   console.log('text-wrapper max height: ' + maxHeight);
   $('.downloads-text-wrapper').height(maxHeight);

}

</script>


@endsection
