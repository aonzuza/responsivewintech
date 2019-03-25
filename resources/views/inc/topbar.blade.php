

<header class="topbar">
  <!-- company info -->
  <div id="topbar-company-info" class="d-lg-flex" style="padding-left:80px;padding-top:20px;">
    <div class="mr-auto">
        <a href="home">
            <img class="top-bar-logo" src="{{ asset('images/common/logo_black.png') }}" />
        </a>
    </div>
    <div class="pr-4 align-self-end">

            <div>
                LINE: @VECO
            </div>
            <div>
                CALL CENTER: +6692-469-3000
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
       <li class="nav-item active">
         <a class="nav-link" href="{{asset('aboutus')}}"> @lang('topbar.company') </a>
       </li>
       <li class="dropdown">
           <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">@lang('topbar.products') <b class="caret"></b></a>
           <ul class="dropdown-menu multi-column columns-2">
             <div class="row">
               <div class="col-sm-6">
                 <ul class="multi-column-dropdown">
                   <li><a href="{{asset('products/2')}}">@lang('topbar.knobset') </a></li>
                   <li><a href="{{asset('products/3,4')}}">@lang('topbar.mortiselock')</a></li>
                   <li><a href="{{asset('residentiallock')}}">@lang('topbar.digitalresidentiallock')</a></li>
                   <li><a href="{{asset('products/6,7')}}">@lang('topbar.digitalhoteldoorlock')</a></li>
                   <li><a href="{{asset('products/8,9,10')}}">@lang('topbar.relaycontrol')</a></li>
                   <li><a href="{{asset('products/11')}}">@lang('topbar.hinge')</a></li>
                   <li><a href="{{asset('products/13,14,15,16')}}">@lang('topbar.bolthooklatch')</a></li>
                   <li><a href="{{asset('products/17')}}">@lang('topbar.handle')</a></li>
                   <li><a href="{{asset('products/18,19')}}">@lang('topbar.knobmirorscrew')</a></li>
                   <li><a href="{{asset('products/20')}}">@lang('topbar.doorstopper')</a></li>
                   <li><a href="{{asset('products/21,22')}}">@lang('topbar.doorviewer')</a></li>
                 </ul>
               </div>
               <div class="col-sm-6">
                 <ul class="multi-column-dropdown">
                   <li><a href="{{asset('products/24,25,26,28,29')}}">@lang('topbar.doorcloser')</a></li>
                   <li><a href="{{asset('products/30,31')}}">@lang('topbar.pullhandleforglassdoor')</a></li>
                   <li><a href="{{asset('products/33,34,35,36')}}">@lang('topbar.panicdoor')</a></li>
                   <li><a href="{{asset('products/38')}}">@lang('topbar.padlock')</a></li>
                   <li><a href="{{asset('products/39')}}">@lang('topbar.wheelrail')</a></li>
                   <li><a href="{{asset('products/40')}}">@lang('topbar.vecoxkirin')</a></li>
                   <li><a href="{{asset('homeautomation')}}">@lang('topbar.homeautomation')</a></li>
                   <li><a href="{{asset('oem')}}">@lang('topbar.oem')</a></li>
                   <li><a href="{{asset('steel_galvanized')}}">@lang('topbar.galvanizedsteelpipe')</a></li>
                   <li><a href="{{asset('steeldoor')}}">@lang('topbar.steeldoor')</a></li>
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
