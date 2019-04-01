@extends('layouts.app')



@section('content')

<!-- product header  -->
<div class="downloads-page-wrapper">


  <div class="container-fluid">

        <div class="row">

            <div class="col-12 col-lg-11 offset-lg-1">

              <h2 class="downloads-header">
                @lang('downloads.downloadheader')
              </h2>

            </div>

        </div>
  </div>

  <!-- product -->
    <div class="downloads-container-wrapper">

        <div class="container-fluid">

              <div class="row">

                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 offset-lg-1">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row1_1.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.companyprofile')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a target="_blank" href="images/downloads/PDF/Company_Profile_References.pdf" download="Company Profile">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row1_2.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.lockandsecurity')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a target="_blank" href="images/downloads/PDF/Locking_Security.pdf" download="Locking Security">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row6_1.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.veco')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a target="_blank" href="images/downloads/PDF/VECOxKIRIN.pdf" download="VECOxKIRIN">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row1_3.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.digitallock')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a href="images/downloads/PDF/Digital_Doorlock.pdf" download="Digital Door Lock" target="_blank">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row1_4.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.powersaving')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a href="images/downloads/PDF/Power_Saving.pdf" download="Power Saving" target="_blank">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>

                  <!-- row 2 -->
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 offset-lg-1">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row2_1.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.hinge')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a href="images/downloads/PDF/Hinge.pdf" download="Hinge" target="_blank">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row2_2.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.doorcloser')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a href="images/downloads/PDF/door_closer.pdf" download="Door Closer" target="_blank">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row2_3.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.panicdoor')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a href="images/downloads/PDF/Panic_Exit_Device.pdf" download="Panic Exit Device" target="_blank">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row2_4.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.padlock')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a href="images/downloads/PDF/Padlock.pdf" download="Pad Lock" target="_blank">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row2_5.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.wheel_and_rail')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a href="images/downloads/PDF/Wheel_and_Rail.pdf" download="Wheel and Rail" target="_blank">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>

                  <!-- end row 2 -->

                  <!--  row 3 -->
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 offset-lg-1">

                    <div class="downloads-item-wrapper mx-auto">
                      <div class="downloads-image-wrapper">
                        <img src="images/downloads/row1_5.png?{{time()}}" alt=""  />
                      </div>
                      <div class="downloads-text-wrapper">
                        <span>
                            @lang('downloads.keycard')
                        </span>
                      </div>
                      <div class="download-link-wrapper">
                        <a href="images/downloads/PDF/Keycard_Keytag.pdf" download="Keycard Keytag" target="_blank">@lang('downloads.downloadpdf')</a>
                      </div>
                    </div>

                  </div>

                  <!--  end row 3 -->

              </div>



        </div>


    </div>



<!-- products-->
<div class="container-fluid">

      <div class="row">

          <div class="col-12 col-lg-11 offset-lg-1">

            <h2 class="downloads-header downloads-header-2">
              @lang('downloads.productheader')
            </h2>

          </div>

      </div>
</div>
<!-- end product  -->


<!-- doors and windows -->
  <div class="downloads-container-wrapper">

      <div class="container-fluid">

            <div class="row">

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 offset-lg-1">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row3_1.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.bolt')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Bolt.pdf" download="Bolt" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row3_2.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.hook')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Hook.pdf" download="Hook" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row3_3.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.doorguard')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Door Guard.pdf" download="Door Guard" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row3_4.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.latch')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Latch.pdf" download="Latch" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row3_5.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.handle')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Handle.pdf" download="Handle" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>

                <!-- row 2 -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 offset-lg-1">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row4_1.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.knob')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Knob.pdf" download="Knob" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row4_2.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.mirrorscrew')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Mirror Screw.pdf" download="Mirror Screw" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row4_3.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.doorstopper')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Doorstopper.pdf" download="Doorstopper" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row4_4.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.bumper')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Bumper.pdf" download="Bumper" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                  <div class="downloads-item-wrapper mx-auto">
                    <div class="downloads-image-wrapper">
                      <img src="images/downloads/row4_5.png?{{time()}}" alt=""  />
                    </div>
                    <div class="downloads-text-wrapper">
                      <span>
                          @lang('downloads.platenumber')
                      </span>
                    </div>
                    <div class="download-link-wrapper">
                      <a href="images/downloads/PDF/Symbol.pdf" download="Symbol" target="_blank">@lang('downloads.downloadpdf')</a>
                    </div>
                  </div>

                </div>

                <!-- end row 2 -->



            </div>



      </div>


  </div>

<!-- end  doors and windows -->




<!--manual header-->
<div class="container-fluid">

      <div class="row">

          <div class="col-12 col-lg-11 offset-lg-1">

            <h2 class="downloads-header downloads-header-3">
              @lang('downloads.productmanual')
            </h2>

          </div>

      </div>
</div>
<!-- end manual header  -->

<!-- installation manual -->
<div class="downloads-container-wrapper">

    <div class="container-fluid">

          <!--  row 1 -->
          <div class="row">

              <div class="col-6 col-sm-4 col-md-3 col-lg-2 offset-lg-1">

                <div class="downloads-item-wrapper mx-auto">
                  <div class="downloads-image-wrapper">
                    <img src="images/downloads/row5_1.png?{{time()}}" alt=""  />
                  </div>
                  <div class="downloads-text-wrapper">
                    <span>
                        @lang('downloads.deadboltinstall')
                    </span>
                  </div>
                  <div class="download-link-wrapper">
                    <a href="images/downloads/PDF/Dead_Bolt.pdf" download="Dead Bolt" target="_blank">@lang('downloads.downloadpdf')</a>
                  </div>
                </div>

              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                <div class="downloads-item-wrapper mx-auto">
                  <div class="downloads-image-wrapper">
                    <img src="images/downloads/row5_2.png?{{time()}}" alt=""  />
                  </div>
                  <div class="downloads-text-wrapper">
                    <span>
                        @lang('downloads.knobset')
                    </span>
                  </div>
                  <div class="download-link-wrapper">
                    <a href="images/downloads/PDF/Knobsets.pdf" download="Knoblock" target="_blank" >@lang('downloads.downloadpdf')</a>
                  </div>
                </div>

              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                <div class="downloads-item-wrapper mx-auto">
                  <div class="downloads-image-wrapper">
                    <img src="images/downloads/row5_3.png?{{time()}}" alt=""  />
                  </div>
                  <div class="downloads-text-wrapper">
                    <span>
                        @lang('downloads.leverinstall')
                    </span>
                  </div>
                  <div class="download-link-wrapper">
                    <a href="images/downloads/PDF/Lever_Handle.pdf" download="Lever Handle" target="_blank" >@lang('downloads.downloadpdf')</a>
                  </div>
                </div>

              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                <div class="downloads-item-wrapper mx-auto">
                  <div class="downloads-image-wrapper">
                    <img src="images/downloads/row5_4.png?{{time()}}" alt=""  />
                  </div>
                  <div class="downloads-text-wrapper">
                    <span>
                        @lang('downloads.mortiseinstall')
                    </span>
                  </div>
                  <div class="download-link-wrapper">
                    <a href="images/downloads/PDF/Mortise.pdf" download="Mortise" target="_blank">@lang('downloads.downloadpdf')</a>
                  </div>
                </div>

              </div>






          </div>

          <!-- end row 1 -->

    </div>


</div>


<!--end installation manual -->

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
