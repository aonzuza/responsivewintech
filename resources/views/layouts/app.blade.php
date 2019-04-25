<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('app.companyname')</title>
    <meta name="csrf-token" content="{{csrf_token()}}">

    <link rel="icon" type="image/png" href="images/common/favicon.png" />

    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <!-- Google Font  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,500,700" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('styles/thstyle.css') }}" >
    <link rel="stylesheet" href="{{ asset('styles/thresponsivestyle.css') }}" >
    <link rel="stylesheet" href="{{ asset('styles/topbarstyle.css') }}" >
    <link rel="stylesheet" href="{{ asset('styles/slidingmenustyle.css') }}" >

    @if(Session::get('locale') == 'en')
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1:300,400,500,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('styles/enstyle.css') }}" >
    <link rel="stylesheet" href="{{ asset('styles/enresponsivestyle.css') }}" >
    @endif

    @include('inc.googleHeadScript')


    @yield('style')
  </head>
  <body>
    @include('inc.topbar')
    @include('inc.mobile.topbar')
    @include('inc.mobile.slidingmenu')

    @yield('content')




    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('script')

    <script type="text/javascript">

            $("body").on("contextmenu", "img", function(e) {
                return false;
            });

              $(document).ready(function(){

                // var height = $('.mobile-topbar').height();
                //padding top + bottom
                // height += 30;
                // $('.sliding-menu').css('top',height);


                  $('.sliding-menu-trigger').click(function(){

                      var width = $('.sliding-menu').width();

                      if(width <= 0){
                        $('.sliding-menu').width('280px');
                        $('.mobile-topbar').css('left','-280px');
                      }
                      else{
                        $('.sliding-menu').width('0px');
                        $('.mobile-topbar').css('left','0');
                      }


                  });

              });

    </script>


  @include('inc.googleBodyScript')

  </body>

  @include('inc.footer')
  @include('inc.mobile.footer')

</html>
