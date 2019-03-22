@extends('layouts.app')


@section('content')

<div class="aboutus-page-wrapper">

  <div class="aboutus-header d-lg-none">
    <div class="container">
      <div class="row">
            <div class="col-lg-6">
                <h2 class="company-profile-section-sm">ประวัติบริษัท</h2>
            </div>
            <div class="col-lg-6">

            </div>
      </div>
    </div>
  </div>

<!-- company profile  -->

    <div class="container">

      <div class="row">

          <div class="col-lg-6">

              <div class="d-md-flex align-items-center" style="height:100%;">
                <div class="aboutus-profile-image-wrapper">
                    <img  width="100%" height="auto"  src="{{asset('images/aboutus/company.png')}}?{{time()}}" />
                </div>
              </div>

          </div>
          <div class="col-lg-6">

            <div class="aboutus-profile-text-wrapper">

              <h2 class="d-none d-lg-block company-profile-section-lg">ประวัติบริษัท</h2>
              <h3>เราเป็นผู้เชี่ยวชาญด้านฮาร์ดแวร์</h3>
              <p>
                  บริษัท  วินเทค  แมนูแฟคเจอริ่ง จำกัด เป็นหนึ่งในผู้นำด้านการผลิตสินค้าประเภทอุปกรณ์ประตูและหน้าต่าง ได้แก่ กลอนประตู บานพับ ลูกบิด มือจับ
                  และปุ่มจับของประเทศไทย ภายใต้เครื่องหมายการค้า VECO รวมทั้งรับสั่งผลิตให้แก่ผลิตภัณฑ์ที่มีชื่อเสียงมากมายทั้งของไทยและต่างประเทศ ด้วยประสบการณ์กว่า 10 ปี
                  และคุณภาพในการผลิตสินค้าอันเป็นที่ยอมรับ รวมทั้งระบบการจัดการที่มีมาตรฐาน ซึ่งได้รับการรองรับโดย ISO9001:2008 ทั้งยังคัดสรรแต่วัตถุดิบคุณภาพดี ผ่านกระบวนการผลิตที่ทันสมัย
                  โดยพนักงานที่มีความเชี่ยวชาญ พร้อมทั้งหน่วยงานออกแบบ และพัฒนาผลิตภัณฑ์อย่างต่อเนื่อง เพื่อความสวยงามและคงทนในการใช้งาน
              </p>
              <p>
                ในปี 2561 เราได้ร่วมทุนกับบริษัทมิวา ล็อก ซึ่งเป็นบริษัทล็อกอันดับ 1 ในประเทศญี่ปุ่น
                เพื่อพัฒนาศักยภาพในการผลิตและยกระดับมาตรฐานของผลิตภัณฑ์ วิศวกรของมิวา ล็อกใช้เวลากว่า 2 ปี
                ในการศึกษาการใช้งานและความต้องการของลูกค้าในทุกๆรายละเอียด และคิดค้นผลิตภัณฑ์ล็อกแบบใหม่ที่มี Human Touch Technology ขึ้น
                ซึ่งจะทำให้การใช้งานล็อกของคุณง่ายและนุ่มนวลแบบที่ไม่เคยรู้สึกมาก่อน เชิญมาสัมผัสความใส่ใจของเราได้ด้วยตัวคุณเอง
              </p>

            </div>


          </div>
      </div>


    </div>


    <div class="aboutus-header">
      <div class="container">
        <div class="row">
              <div class="col-lg-6">
                  <h2 class="certificate-section">ใบรับรองคุณภาพ</h2>
              </div>
              <div class="col-lg-6">

              </div>
        </div>
      </div>
    </div>

<!-- certificates -->
<div class="container">

          <div class="row">

            <div class="col-lg-6 order-lg-2">

              <div class="d-md-flex align-items-center" style="height:100%;">
                  <div class="aboutus-certificate-image-wrapper">
                    <img style="width:100%;height:auto;"  src="images/aboutus/why.png" />
                  </div>
              </div>

            </div>

            <div class="col-lg-6 order-lg-1">
                  <div class="aboutus-certificate-text-wrapper">

                    <h1>ทำไมต้อง วินเทค ?</h1>
                    <p>
                        เราเป็นผู้เชี่ยวชาญเกี่ยวกับโลหะอย่างแท้จริง ด้วยบุคลากรที่มีประสบการณ์มากกว่า 10 ปี เราให้คำแนะนำ ออกแบบ และทำงานร่วมกับลูกค้าในการผลิตสินค้าเพื่อตอบสนองความต้องการที่หลากหลาย
                        โรงงานของเราได้รับการรับรองมาตรฐานจากสถาบันชั้นนำ เช่น  มาตรฐาน ISO9001:2008
                        และมาตรฐานผลิตภัณฑ์อุตสาหกรรม(มอก.)
                        ลูกค้าจึงมั่นใจได้ว่าเราใส่ใจในการผลิตและผลิตภัณฑ์ของเราเป็นสินค้าที่มีคุณภาพทุกชิ้น
                    </p>
                    <div class="container-fluid">

                      <div class="row">
                            <div class="col-md-6">
                                <ul style="margin-bottom:0;">
                                      <li><a href="images/aboutus/certificates/iso90012015.pdf"  target="_blank">ISO 9001:2015</a></li>
                                      <li><a href="images/aboutus/certificates/knobtis.pdf"  target="_blank">Knob Lock TIS</a></li>
                                      <li><a href="images/aboutus/certificates/hingetsi.pdf"  target="_blank">Hinge TIS</a></li>
                                      <li><a href="images/aboutus/certificates/compressiontest.pdf"  target="_blank">Compression Test</a></li>
                                      <li><a href="images/aboutus/certificates/cycletest.pdf"  target="_blank">Cycle Test</a></li>
                                      <li><a href="images/aboutus/certificates/saltspray(fog)test.pdf"  target="_blank">Salt Spray Test</a></li>
                                </ul>

                            </div>
                            <div class="col-md-6">

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
              <h2 class="project-section" >ผลงานที่ผ่านมา</h2>
          </div>
          <div class="col-lg-6">

          </div>
    </div>
  </div>
</div>


<!--  start projects -->
<div class="container">

          <div class="row">

            <div class="col-lg-6 order-lg-2">


              <div class="project-frame-wrapper">

                  <img style="width:100%;height:auto;"  src="" />

              </div>
              <div style="clear:both;"></div>

            </div>
            <div class="col-lg-6 order-lg-1">
              <!-- <h2>ผลงานที่ผ่านมา</h2> -->
              <div class="aboutus-img-tiles-wrapper">
                @foreach($projects as $project)
                <div class="aboutus-tile">
                   <img style="width:100%;height:auto;" class="img-bw" src="{{$project}}" />
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


    // set default image
    //  display a project
    var firstImg = $('.aboutus-img-tiles-wrapper img').eq(0);
    $('.project-frame-wrapper img').attr('src',firstImg.attr('src'));
    // $('.project-frame-wrapper img').height($('.project-frame-wrapper img').height());

    $('.aboutus-img-tiles-wrapper img').hover(function(e){
          $(this).removeClass('img-bw');
          // update image source
          $imgSrc = $(this).attr('src');
          $('.project-frame-wrapper img').attr('src',$imgSrc);
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
