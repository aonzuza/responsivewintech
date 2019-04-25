

<header class="topbar">
  <!-- company info -->
  <div id="topbar-company-info" class="d-lg-flex" style="padding-left:25px;padding-top:20px;">
    <div class="mr-auto">
        <a href="{{asset('home')}}">
            <img class="top-bar-logo" src="{{ asset('images/common/logo_black.png') }}" />
        </a>
    </div>
    <div class="pr-4 align-self-end">

            <div>
                <a target="_blank" href="http://line.me/ti/p/@uuc0799v" class="no-decoration">LINE: @VECO</a>
            </div>
            <div>
                CALL CENTER: @lang('topbar.telephone')
            </div>

    </div>
    <div class="pr-4 align-self-end">

            <a href="{{asset('changelang')}}">EN/TH</a>
    </div>

  </div>

  <!-- menu -->
  <!-- <nav id="topbar-link-wrapper" class="navbar navbar-expand-lg navbar-light bg-white" style="padding-left:80px;padding-top:20px;"> -->
   <!-- <a class="navbar-brand" href="#">Navbar</a> -->
   <nav id="topbar-link-wrapper" class="navbar navbar-expand-lg navbar-light bg-white">
   <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="dropdown">
         <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">@lang('topbar.company') <b class="caret"></b></a>
         <!-- <a class="nav-link" href="{{asset('aboutus')}}"> @lang('topbar.company') </a> -->
         <ul class="dropdown-menu multi-column columns-1">
           <div class="row">
             <div class="col-sm-12">
               <ul class="multi-column-dropdown">
                 <!-- <li><a href="{{asset('aboutus?area=company-profile-section-lg')}}">@lang('footer.profile') </a></li> -->
                 <li><a href="{{asset('aboutus')}}">@lang('footer.profile') </a></li>
                 <li><a href="{{asset('aboutus?area=certificate-section')}}">@lang('footer.certificates')</a></li>
                 <li><a href="{{asset('aboutus?area=project-section')}}">@lang('footer.projects')</a></li>
               </ul>
             </div>

           </div>
         </ul>

         <!-- end  -->
       </li>
       <li class="dropdown">
           <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">@lang('topbar.products') <b class="caret"></b></a>
           <ul class="dropdown-menu multi-column columns-2">
             <div class="row">
               <div class="col-sm-6">
                 <ul class="multi-column-dropdown">
                   <li><a href="{{asset('products/2')}}">@lang('topbar.knobset') </a></li>
                   <li><a href="{{asset('products/3,4,5')}}">@lang('topbar.mortiselock')</a></li>
                   <!-- <li><a href="{{asset('residentiallock')}}">@lang('topbar.digitalresidentiallock')</a></li> -->
                   <li><a href="{{asset('products/41')}}">@lang('topbar.digitalresidentiallock')</a></li>
                   <li><a href="{{asset('products/6,7,8,9,10')}}">@lang('topbar.digitalhoteldoorlock')</a></li>
                   <li><a href="{{asset('products/11')}}">@lang('topbar.hinge')</a></li>
                   <li><a href="{{asset('products/13')}}">@lang('topbar.bolt')</a></li>
                   <li><a href="{{asset('products/14,15,16')}}">@lang('topbar.hookdoorguard')</a></li>
                   <li><a href="{{asset('products/17')}}">@lang('topbar.handle')</a></li>
                   <li><a href="{{asset('products/18,19')}}">@lang('topbar.knobmirorscrew')</a></li>


                 </ul>
               </div>
               <div class="col-sm-6">
                 <ul class="multi-column-dropdown">
                   <li><a href="{{asset('products/20,21,22')}}">@lang('topbar.doorstopper')</a></li>
                   <li><a href="{{asset('products/23,24,25,26,28,29')}}">@lang('topbar.doorcloser')</a></li>
                   <li><a href="{{asset('products/30,31')}}">@lang('topbar.pullhandleforglassdoor')</a></li>
                   <!-- <li><a href="{{asset('steeldoor')}}">@lang('topbar.panicdoor')</a></li> -->
                   <li><a href="{{asset('products/32,33,34,35,36')}}">@lang('topbar.panicdoor')</a></li>
                   <li><a href="{{asset('products/39')}}">@lang('topbar.wheelrail')</a></li>
                   <li><a href="{{asset('products/37,38')}}">@lang('topbar.padlock')</a></li>
                   <li><a href="{{asset('products/40')}}">@lang('topbar.vecoxkirin')</a></li>
                   <li><a href="{{asset('homeautomation')}}">@lang('topbar.homeautomation')</a></li>
                   <li><a href="{{asset('oem')}}">@lang('topbar.oem')</a></li>
                   <li><a href="{{asset('steel_galvanized')}}">@lang('topbar.galvanizedsteelpipe')</a></li>

                 </ul>
               </div>
             </div>
           </ul>
       </li>

       <li class="nav-item">
         <a class="nav-link" href="{{asset('downloads')}}">@lang('topbar.downloads')</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{asset('contactus')}}">@lang('topbar.contactus')</a>
       </li>



     </ul>

   </div>
 </nav>
</header>
