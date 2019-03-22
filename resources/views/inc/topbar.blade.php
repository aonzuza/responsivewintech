

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

            <a href="#">EN/TH</a>
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
         <a class="nav-link" href="{{asset('aboutus')}}">องค์กรของเรา</a>
       </li>
       <li class="dropdown">
           <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">ผลิตภัณฑ์ <b class="caret"></b></a>
           <ul class="dropdown-menu multi-column columns-2">
             <div class="row">
               <div class="col-sm-6">
                 <ul class="multi-column-dropdown">
                   <li><a href="{{asset('products/2')}}">ลูกบิดและก้านโยก</a></li>
                   <li><a href="{{asset('products/3,4')}}">มอร์ติสล็อค / ไส้กุญแจและระบบมาสเตอร์คีย์</a></li>
                   <li><a href="{{asset('residentiallock')}}">ดิจิตอลล็อคสำหรับบ้านพักทั่วไป</a></li>
                   <li><a href="{{asset('products/6,7')}}">ดิจิตอลล็อคสำหรับโรงแรม / พาวเวอร์เซฟวิ่ง</a></li>
                   <li><a href="{{asset('products/8,9,10')}}">รีเลย์/ ช่องเสียบการ์ด/ คีย์การ์ด</a></li>
                   <li><a href="{{asset('products/11')}}">บานพับ</a></li>
                   <li><a href="{{asset('products/13,14,15,16')}}">กลอน/ ขอสับ/ ขอค้ำ/ ตัวล็อค</a></li>
                   <li><a href="{{asset('products/17')}}">มือจับ</a></li>
                   <li><a href="{{asset('products/18,19')}}">ปุ่มจับ/ ปุ่มกระจก</a></li>
                   <li><a href="{{asset('products/20')}}">กันชน/ แป้นกันฝุ่น/ ตาแมว</a></li>
                   <li><a href="{{asset('products/21,22')}}">ปุ่มยางกันกระแทก/ ป้ายสัญลักษณ์</a></li>
                 </ul>
               </div>
               <div class="col-sm-6">
                 <ul class="multi-column-dropdown">
                   <li><a href="{{asset('products/24,25,26,28,29')}}">โช้คประตู</a></li>
                   <li><a href="{{asset('products/30,31')}}">อุปกรณ์กระจก/ มือจับบานกระจก</a></li>
                   <li><a href="{{asset('products/33,34,35,36')}}">อุปกรณ์ประตูหนีไฟ</a></li>
                   <li><a href="{{asset('products/38')}}">แม่กุญแจ</a></li>
                   <li><a href="{{asset('products/39')}}">ล้อและรางเลื่อน</a></li>
                   <li><a href="{{asset('products/40')}}">VecoxKirin Collections</a></li>
                   <li><a href="{{asset('homeautomation')}}">ระบบบ้านอัจฉริยะ</a></li>
                   <li><a href="{{asset('oem')}}">OEM/ ผลิตตามสั่ง</a></li>
                   <li><a href="{{asset('steel_galvanized')}}">ท่อเหล็กและแป๊ปน้ำ</a></li>
                   <li><a href="{{asset('steeldoor')}}">ประตูเหล็ก</a></li>
                 </ul>
               </div>
             </div>
           </ul>
       </li>

       <li class="nav-item">
         <a class="nav-link" href="{{asset('downloads')}}">ดาวน์โหลด</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{asset('contactus')}}">ติดต่อเรา</a>
       </li>



     </ul>

   </div>
 </nav>
</header>
