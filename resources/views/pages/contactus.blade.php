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

<div class="container-fluid contactus-mail-sent">

  <div class="alert alert-warning" role="alert">
     @lang('contactus.mailsent')
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
                            <h2>@lang('contactus.companyname')</h2>
                        </td>
                      </tr>
                      <tr>
                          <td>
                              @lang('contactus.address')
                          </td>
                          <td colspan="2">
                            @lang('contactus.addressdetails')
                          </td>

                      </tr>
                      <tr>
                          <td>
                              @lang('contactus.tel')
                          </td>
                          <td>
                              @lang('contactus.teldetails1')
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
                            @lang('contactus.teldetails2')
                          </td>

                      </tr>
                      <tr>
                          <td>
                            @lang('contactus.callcenter')
                          </td>
                          <td>
                            @lang('contactus.callcenterDetails')
                          </td>

                      </tr>
                      <tr>
                          <td>
                            @lang('contactus.fax')
                          </td>
                          <td>
                            @lang('contactus.faxdetails')
                          </td>

                      </tr>
                      <tr>
                          <td>
                            @lang('contactus.line')
                          </td>
                          <td>
                            @lang('contactus.linedetails')
                          </td>

                      </tr>
                      <tr>
                          <td>
                            @lang('contactus.email')
                          </td>
                          <td>
                            @lang('contactus.emaildetails')
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
                           <a style="color:#202b62" href="../images/contactus/WINTECHMFC_MAP.pdf" target="_blank" >@lang('contactus.googlemap')</a>
                         </div>
                         <div class="flex-even text-center" style="border-left:solid #202b62 2px;border-right:solid #202b62 2px;">
                           <a style="color:#202b62" href="../images/contactus/WINTECHMFC_MAP.pdf" download="WINTECHMFCMAP" target="_blank" >@lang('contactus.downloadpdf')</a>
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
                <h4 style="font-size:20px;">@lang('contactus.contactus')</h4>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="firstName" placeholder="@lang('contactus.fname')">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="lastName" placeholder="@lang('contactus.flastname')">
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="@lang('contactus.femail')">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="telephone" placeholder="@lang('contactus.ftelephone')">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="company" placeholder="@lang('contactus.fcompany')">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="province" placeholder="@lang('contactus.fprovince')">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="country" placeholder="@lang('contactus.fcountry')">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="product" placeholder="@lang('contactus.fproduct')">
                </div>

              </div>

              <div class="form-group">
                <textarea class="form-control" name="information" rows="4"></textarea>
              </div>

              <div class="text-right">
                    <button type="submit" class="contactus-send-email">@lang('contactus.fsendmail')</button>
              </div>


              </form>


              </div>
        </div>

    </div>
</div>


</div>


@endsection
