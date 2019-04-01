@extends('layouts.app')

@section('style')
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="images/home/slider/engine1/style.css" />
<script type="text/javascript" src="images/home/slider/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="images/home/mslider/engine2/style.css" />
<script type="text/javascript" src="images/home/mslider/engine2/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


@endsection

@section('content')


<!--  desktop version -->
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1" class="desktop-slider">
<div class="ws_images"><ul>
        <li><img src="images/home/slider/data1/images/slide1.jpg?{{time()}}" alt="slide1" title="slide1" id="wows1_0"/></li>
        <li><img src="images/home/slider/data1/images/slide2.jpg?{{time()}}" alt="Slide2" title="Slide2" id="wows1_1"/></li>
        <li><img src="images/home/slider/data1/images/slide3.jpg?{{time()}}" alt="Slide3" title="Slide3" id="wows1_2"/></li>
        <li><img src="images/home/slider/data1/images/slide4.jpg?{{time()}}" alt="Slide4" title="Slide4" id="wows1_2"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title="slide1"><span><img src="images/home/slider/data1/tooltips/slide1.jpg?{{time()}}" alt="slide5"/>1</span></a>
        <a href="#" title="Slide2"><span><img src="images/home/slider/data1/tooltips/slide2.jpg?{{time()}}" alt="Slide2"/>2</span></a>
        <a href="#" title="Slide3"><span><img src="images/home/slider/data1/tooltips/slide3.jpg?{{time()}}" alt="Slide3"/>3</span></a>
        <a href="#" title="Slide4"><span><img src="images/home/slider/data1/tooltips/slide4.jpg?{{time()}}" alt="Slide4"/>4</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">bootstrap slider</a></div>
<div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="images/home/slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="images/home/slider/engine1/script.js"></script>




<!-- mobile section -->
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container2" class="mobile-slider">
<div class="ws_images"><ul>
		<li><img src="images/home/mslider/data2/images/mslide1.jpg" alt="" title="" id="wows2_0"/></li>
		<li><img src="images/home/mslider/data2/images/mslide2.jpg" alt="" title="" id="wows2_1"/></li>
		<li><img src="images/home/mslider/data2/images/mslide3.jpg" alt="image slider" title="" id="wows2_2"/></li>
		<li><img src="images/home/mslider/data2/images/mslide4.jpg" alt="" title="" id="wows2_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="images/home/mslider/data2/tooltips/mslide1.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="images/home/mslider/data2/tooltips/mslide2.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="images/home/mslider/data2/tooltips/mslide3.jpg" alt=""/>3</span></a>
		<a href="#" title=""><span><img src="images/home/mslider/data2/tooltips/mslide4.jpg" alt=""/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
<div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="images/home/mslider/engine2/wowslider.js"></script>
<script type="text/javascript" src="images/home/mslider/engine2/script.js"></script>
<!-- End WOWSlider.com BODY section -->



<div class="container home-container-wrapper">
  <div class="row">

    <div class="col-md-6">

          <!-- main tain 4:3 -->
          <div class="home-video-wrapper" style="position:relative;padding-top:75%;">

              <iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/fm8ylLLV5dQ" frameborder="0"

              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

              </iframe>

          </div>

    </div>

    <div class="col-md-6">

      <div class="home-second-wrapper">

            <div class="home-image-logo">
                  <img style="width:100%;height:auto;" src="images/common/logo_black.png" />
            </div>

            <p>
              @lang('home.text1')
            </p>
            <p style="font-weight:bold">
                @lang('home.text2')
            </p>

            <div class="d-flex home-product-quote">
                    <div class="ml-auto">
                      SIMPLE
                    </div>
                    <div>
                      SMART
                    </div>
                    <div>
                      STYLISH
                    </div>
                    <div class="mr-auto">
                      SAFETY
                    </div>

            </div>

      </div>



    </div>

  </div>
</div>

@endsection


@section('script')

<script>


      $(window).resize(function() {
            handleSlider();
      });

      $(document).ready(function(){

        // setInterval(function(){
        //   handleSlider();
        // },500);

        handleSlider();

      });

      function handleSlider(){

          var width = $(window).width();
          if(width > 768 ){
                $('.desktop-slider').show();
                $('.mobile-slider').hide();
          }
          else{
              $('.desktop-slider').hide();
              $('.mobile-slider').show();
          }
      }


</script>


@endsection
