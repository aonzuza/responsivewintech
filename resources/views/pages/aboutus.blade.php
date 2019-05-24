@extends('layouts.app')


@section('content')

<div class="aboutus-page-wrapper">

  <div class="aboutus-header d-lg-none">
    <div class="container">
      <div class="row">
            <div class="col-lg-6">
                <h2 class="company-profile-section-sm">@lang('aboutus.companyheader')</h2>
            </div>
            <div class="col-lg-6">

            </div>
      </div>
    </div>
  </div>

<!-- company profile  -->

    <div class="container">

      <div class="row">

          <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0 col-no-padding">

              <div class="d-md-flex align-items-start" style="height:100%;">
                <div class="aboutus-profile-image-wrapper">
                    <img width="100%" height="auto"  src="{{asset('images/aboutus/company.jpg')}}?{{time()}}" />
                </div>
              </div>

          </div>
          <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0">

            <div class="aboutus-profile-text-wrapper">


              <h2 class="d-none d-lg-block company-profile-section-lg">@lang('aboutus.companyquote')</h2>

              @if(Session::get('locale') != 'en' )
                      <h2>@lang('aboutus.companysubheader')</h2>
              @endif

              <p>
                  @lang('aboutus.companydetails1')
              </p>
              <!-- <p class="aboutus-company-quote">
                @lang('aboutus.companyquote')
              </p> -->
              <p>
                  @lang('aboutus.companydetails2')
              </p>

            </div>

            <div class="text-center">
              <a class="btn btn-outline-secondary" href="http://www.miwalock.com" target="_blank">
                @lang('aboutus.miwalock')
              </a>
            </div>


          </div>
      </div>


    </div>


    <div class="aboutus-header">
      <div class="container">
        <div class="row">
              <div class="col-lg-6">
                  <h2 class="certificate-section">@lang('aboutus.certificatesheader')</h2>
              </div>
              <div class="col-lg-6">

              </div>
        </div>
      </div>
    </div>

<!-- certificates -->
<div class="container">

          <div class="row">

            <!-- <div class="col-lg-6 order-lg-2">

              <div class="d-md-flex align-items-center" style="height:100%;">
                  <div class="aboutus-certificate-image-wrapper">
                    <img style="width:100%;height:auto;"  src="images/aboutus/why.png" />
                  </div>
              </div>

            </div> -->

            <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0 col-no-padding order-lg-2">

                <div class="d-md-flex align-items-start" style="height:100%;">
                  <div class="aboutus-certificate-image-wrapper">
                    <img style="width:100%;height:auto;"  src="{{asset('images/aboutus/why.jpg')}}?{{time()}}" />
                  </div>
                </div>

            </div>

            <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-0">
                  <div class="aboutus-certificate-text-wrapper">

                    <h1>@lang('aboutus.certificatessubheader')</h1>
                    <p>
                        @lang('aboutus.certificatesdetails')
                    </p>
                    <div class="container-fluid">

                      <div class="row">
                            <div class="col-lg-6 certificate-link-wrapper-left">
                                <ul style="margin-bottom:0;">
                                      <li><a href="images/aboutus/certificates/iso90012015.pdf"  target="_blank">ISO 9001:2015</a></li>
                                      <li><a href="images/aboutus/certificates/knobtis.pdf"  target="_blank">Knob Lock TIS</a></li>
                                      <li><a href="images/aboutus/certificates/hingetsi.pdf"  target="_blank">Hinge TIS</a></li>
                                      <li><a href="images/aboutus/certificates/compressiontest.pdf"  target="_blank">Compression Test</a></li>
                                      <li><a href="images/aboutus/certificates/cycletest.pdf"  target="_blank">Cycle Test</a></li>
                                      <li><a href="images/aboutus/certificates/saltspray(fog)test.pdf"  target="_blank">Salt Spray Test</a></li>
                                </ul>

                            </div>
                            <div class="col-lg-6 certificate-link-wrapper-right">

                                <ul>
                                      <li><a href="images/aboutus/certificates/waterspray(fog)test.pdf" target="_blank">Water Spray Test</a></li>
                                      <li><a href="images/aboutus/certificates/emissionspectroscopytest.pdf" target="_blank">Emission Spectroscopy Test</a></li>
                                      <li><a href="images/aboutus/certificates/doorcloserfireresistancetest.pdf" target="_blank">Door Closer Fire Resistance Test</a></li>
                                      <li><a href="images/aboutus/certificates/flushboltfireresistancetest.pdf" target="_blank">Flush Bolt Fire Resistance Test</a></li>
                                      <li><a href="images/aboutus/certificates/panicbarfireresistancetest.pdf"  target="_blank">Panic Fire Resistance Test</a></li>
                                </ul>


                            </div>


                      </div>

                    </div>


                  </div>

            </div>




          </div>


</div>

<!-- end certificates  -->

<div class="aboutus-header">
  <div class="container">
    <div class="row">
          <div class="col-lg-6">
              <h2 class="project-section" >@lang('aboutus.projectheader')</h2>
          </div>
          <div class="col-lg-6">

          </div>
    </div>
  </div>
</div>



<!--  start projects -->
<div class="container">

          <div class="row">

            <div class="col-lg-6 order-lg-2 col-no-padding">


              <div class="project-frame-wrapper" style="position:relative">

                  @if(Session::get('locale') == 'th')
                    <img style="width:100%;height:auto;" data-desc="{{$projects[0]->Name_TH}}"  src="{{ asset('images/aboutus/projects').'/'.$projects[0]->IMG_Color }}" />
                  @else
                    <img style="width:100%;height:auto;" data-desc="{{$projects[0]->Name_EN}}"  src="{{ asset('images/aboutus/projects').'/'.$projects[0]->IMG_Color }}" />
                  @endif

                <div class="project-desc">
                  @if(Session::get('locale') == 'th')
                     {{$projects[0]->Name_TH }}
                  @else
                    {{$projects[0]->Name_EN }}
                  @endif
                </div>
              </div>
              <div style="clear:both;"></div>

            </div>
            <div class="col-lg-6 order-lg-1">
              <!-- <h2>ผลงานที่ผ่านมา</h2> -->
              <div class="aboutus-img-tiles-wrapper">
                @foreach($projects as $project)
                <div class="aboutus-tile">
                  @if(Session::get('locale') == 'th')
                    <img style="width:100%;height:auto;" class="img-bw" data-desc="{{$project->Name_TH}}" src="{{asset('images/aboutus/projects').'/'.$project->IMG_Color}}" />
                  @else
                    <img style="width:100%;height:auto;" class="img-bw" data-desc="{{$project->Name_EN}}" src="{{asset('images/aboutus/projects').'/'.$project->IMG_Color}}" />
                  @endif
                </div>
                 @endforeach
              </div>
              <div style="clear:left;"></div>


            </div>
          </div>


</div>

</div>



@endsection


@section('script')
<script type="text/javascript">

$(window).resize(function() {
    resizeTiles();
});


$(document).ready(function() {


      //set default image
     //display a project


    $('.aboutus-img-tiles-wrapper img').hover(function(e){
          $(this).removeClass('img-bw');
          // update image source
          var imgSrc = $(this).attr('src');
          var desc   = $(this).data('desc');

          $('.project-frame-wrapper img').attr('src',imgSrc);
          $('.project-desc').html(desc);

    }).mouseleave(function(e){
          $(this).addClass('img-bw');
    });

    resizeTiles();

    var area = getUrlVars()["area"];
    if(area != null){
      $('html, body').animate({
            scrollTop: $('.'+area).offset().top - 70
          }, 500, 'linear');
    }

});

function setFirstImage(){
  var firstImg = $('.aboutus-img-tiles-wrapper img').eq(0);
  $('.project-frame-wrapper img').attr('src',firstImg.attr('src'));
  $('.project-frame-wrapper img').width('100%');
  $('.project-frame-wrapper img').height('auto');
}

function resizeTiles(){

    $('.project-frame-wrapper img').height('auto');
    $('.project-frame-wrapper img').height($('.project-frame-wrapper img').height());

    $('.aboutus-tile').height('auto');

    var totalTiles = $('.aboutus-tile').length;
    var maxHeight = 0;
    for(var i=0; i < totalTiles; i++){

        var height = $('.aboutus-tile').eq(i).height();
        if(height > maxHeight){
          maxHeight = height;
        }

    }
    $('.aboutus-tile').height(maxHeight);

}

// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

</script>




@endsection
