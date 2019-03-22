@extends('layouts.app')


@section('content')

<div class="homeautomation-wrapper">

  <div class="homeautomation-header">
        <img style="width:100%;height:auto;" src="https://dummyimage.com/800x400/" />
  </div>
</div>

<div class="video-section-wrapper">


      <div class="container">
            <div class="row">

              <div class="col-lg-6">

                  <div id="video-wrapper" style="position:relative;padding-top:56.25%;">
                          <iframe id="main-video" src="https://www.youtube.com/embed/K35uFXoa5c0" frameborder="0" allowfullscreen
                            style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                    </div>

                  <div class="homeautomation-video-list d-flex flex-wrap" >

                    <div id="motion" class="homeautomation-img-wrapper">
                        <img src="images/homeautomation/motion.png" alt="" />
                    </div>
                    <div id="flood" class="homeautomation-img-wrapper">
                        <img src="images/homeautomation/flood.png" alt="" />
                    </div>
                    <div id="smoke" class="homeautomation-img-wrapper">
                        <img src="images/homeautomation/smoke.png" alt="" />
                    </div>
                    <div id="wall_plug" class="homeautomation-img-wrapper">
                        <img src="images/homeautomation/wall_plug.png" alt="" />
                    </div>
                    <div id="swipe" class="homeautomation-img-wrapper">
                        <img src="images/homeautomation/swipe.png" alt="" />
                    </div>

                  </div>

              </div>
              <div class="col-lg-6">

                    <div class="homeautomation-video-text-wrapper">
                        <h2>Fibaro Home Automation คืออะไร ?</h2>
                        <p class="lead">อุปกรณ์ที่ทำให้คุณสามารถควบคุม(control) และ ดูแล (monitor) บ้าน
                          ได้จากทุกมุมโลกง่ายๆโดยผ่านมือถือ ทั้งยังสามารถเปิดปิดประตู หน้าต่าง ดักจับควัน น้ำท่วม น้ำรั่ว
                          เพื่อป้องกันการบุกรุกและอุบัติเหตุต่างๆแบบ Realtime และยังสามารถดูการทำงานย้อนหลังของทุก
                          อุปกรณ์ในระบบบ้านอัจฉริยะเพื่อให้คุณติดตามได้ทุกเหตุการณ์ในบ้านคุณ
                        </p>


                    </div>
              </div>

            </div>
      </div>
</div>

@endsection

@section('script')

<script type="text/javascript">

$(document).ready(function(){

$('.homeautomation-img-wrapper').click(function(){

var iframe;
// console.log(this.id);
//get id
switch(this.id) {
  case 'motion':
      iframe = '<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/R_I2p1Tq2QU?autoplay=1" frameborder="0" allowfullscreen></iframe>';
    break;
  case 'flood':
      iframe = '<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/8JRxUoHbEN8?autoplay=1" frameborder="0" allowfullscreen></iframe>';
    break;
  case 'smoke':
      iframe = '<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/50QGfkdUtns?autoplay=1" frameborder="0" allowfullscreen></iframe>';
    break;
  case 'wall_plug':
      iframe = '<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/hl1O6_fKuik?autoplay=1" frameborder="0" allowfullscreen></iframe>';
    break;
  case 'swipe':
      iframe = '<iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://www.youtube.com/embed/ORFas8glWDw?autoplay=1" frameborder="0" allowfullscreen></iframe>';
    break;
  default:
      iframe = '<iframe width="560" height="315" src="https://www.youtube.com/embed/K35uFXoa5c0?autoplay=1" frameborder="0" allowfullscreen></iframe>';

}
console.log(iframe);
$("#video-wrapper").html(iframe);

});


});

</script>


@endsection
