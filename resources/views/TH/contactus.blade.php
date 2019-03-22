@extends('layouts.app')


@section('content')

<div class="contactus-wrapper">

<div class="contactus-header">

      <!--  image -->
      <img style="width:100%;height:auto;" src="https://dummyimage.com/1920x1080/000000/ffffff" alt="">

</div>



@if ($errors->any())
<div class="container-fluid">

      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>

</div>
@endif


@if(isset($mailSent))

<div class="container-fluid">

  <div class="alert alert-warning" role="alert">
     เราได้รับคำถามของคุณแล้ว !!!
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
  </div>

</div>

@endif


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 offset-lg-1">
              <!-- company details-  google map  -->
              <div class="contactus-compny-details">
                    <table class="contactus-tb-company">
                      <col width="90">
                      <col>
                      <tr>
                        <td colspan="3">
                            <h2>บริษัท วินเทค แมนูแฟคเจอริ่ง จำกัด</h2>
                        </td>
                      </tr>
                      <tr>
                          <td>
                              ที่อยู่:
                          </td>
                          <td colspan="2">
                            35/199 หมู่ 2 ตำบล บางน้ำจืด อำเภอ เมือง จังหวัด สมุทรสาคร 74000 ประเทศไทย
                          </td>

                      </tr>
                      <tr>
                          <td>
                              โทร:
                          </td>
                          <td>
                              034-495-251 ถึง 6
                          </td>
                          <td rowspan="6" style="vertical-align:bottom;text-align:right;">
                            <div class="contactus-QR">
                              <img style="width:100%;height:auto;" src="images/common/QRCode.png" />
                            </div>
                          </td>
                      </tr>
                      <tr>
                          <td>

                          </td>
                          <td>
                            034-824-828 ถึง 9
                          </td>

                      </tr>
                      <tr>
                          <td>
                            Call Center:
                          </td>
                          <td>
                            092-469-3000
                          </td>

                      </tr>
                      <tr>
                          <td>
                            แฟกซ์:
                          </td>
                          <td>
                            034-824-831
                          </td>

                      </tr>
                      <tr>
                          <td>
                            ไลน์ไอดี:
                          </td>
                          <td>
                            @veco
                          </td>

                      </tr>
                      <tr>
                          <td>
                            อีเมล:
                          </td>
                          <td>
                            sale@wintechmfc.com
                          </td>

                      </tr>
                    </table>

                    <!--  google map  -->
                    <div class="google-map-wrapper">

                      <iframe

                       src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.7956590095455!2d100.35420865003871!3d13.60928879039289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bc06b8c5b401%3A0xea0d394c7ddea08e!2sWintech+Manufacturing+Co.%2CLTD.!5e0!3m2!1sen!2sth!4v1454753363044"  frameborder="0" style="border:0" allowfullscreen></iframe>


                    </div>
                    <div class="d-flex google-map-link-wrapper">
                         <div class="flex-even text-center" style="border-left:solid #202b62 2px;">
                           <a style="color:#202b62" href="../images/contactus/WINTECHMFC_MAP.pdf" target="_blank" >ดูแผนที่</a>
                         </div>
                         <div class="flex-even text-center" style="border-left:solid #202b62 2px;border-right:solid #202b62 2px;">
                           <a style="color:#202b62" href="../images/contactus/WINTECHMFC_MAP.pdf" download="WINTECHMFCMAP" target="_blank" >ดาวน์โหลด PDF</a>
                         </div>
                    </div>

              </div>



        </div>
        <div class="col-lg-5">
              <!--  contact form  -->
              <div class="contact-form-wrapper">

              <form method="POST" action="contactus" id="customerInquiry">
              @csrf
              <div class="form-group">
                <h4 style="font-size:20px;">ติดต่อเรา</h4>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="firstName" placeholder="ชื่อ">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="lastName" placeholder="นามสกุล">
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="อีเมล">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="telephone" placeholder="เบอร์โทรศัพท์ (0849876547)">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="company" placeholder="บริษัท">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="province" placeholder="จังหวัด">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="country" placeholder="ประเทศ">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="product" placeholder="สินค้าที่สนใจ">
                </div>

              </div>

              <div class="form-group">
                <textarea class="form-control" name="information" rows="4"></textarea>
              </div>

              <div class="text-right">
                    <button type="submit" class="contactus-send-email">ส่งอีเมล</button>
              </div>


              </form>


              </div>
        </div>

    </div>
</div>


</div>


@endsection
