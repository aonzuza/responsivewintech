@extends('layouts.app')

@section('style')
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="images/home/slider/engine1/style.css" />
<script type="text/javascript" src="images/home/slider/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
@endsection

@section('content')



<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
        <li><a href="products.html#40" target="_self"><img src="images/home/slider/data1/images/slide5.jpg" alt="slide5" title="slide5" id="wows1_0"/></a></li>
        <li><img src="images/home/slider/data1/images/slide2.jpg" alt="Slide2" title="Slide2" id="wows1_1"/></li>
        <li><img src="images/home/slider/data1/images/slide3.jpg" alt="Slide3" title="Slide3" id="wows1_2"/></li>
        <li><a href="http://wowslider.com"><img src="images/home/slider/data1/images/slide4.jpg" alt="slider" title="Slide4" id="wows1_3"/></a></li>
        <li><img src="images/home/slider/data1/images/slide1.jpg" alt="Slide1" title="Slide1" id="wows1_4"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title="slide5"><span><img src="images/home/slider/data1/tooltips/slide5.jpg" alt="slide5"/>1</span></a>
        <a href="#" title="Slide2"><span><img src="images/home/slider/data1/tooltips/slide2.jpg" alt="Slide2"/>2</span></a>
        <a href="#" title="Slide3"><span><img src="images/home/slider/data1/tooltips/slide3.jpg" alt="Slide3"/>3</span></a>
        <a href="#" title="Slide4"><span><img src="images/home/slider/data1/tooltips/slide4.jpg" alt="Slide4"/>4</span></a>
        <a href="#" title="Slide1"><span><img src="images/home/slider/data1/tooltips/slide1.jpg" alt="Slide1"/>5</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">bootstrap slider</a></div>
<div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="images/home/slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="images/home/slider/engine1/script.js"></script>
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
              Let's dress up your door with our crafted items. We choose the best materials, then meticulously design and produce the products to meet your expectation in both functionality and style.
            </p>
            <p style="font-weight:bold">
                Enjoy mixing and matching with a variety of sample, smart and stylish products. Have fun!!
            </p>

      </div>

    </div>

  </div>
</div>

@endsection
