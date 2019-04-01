
<!-- position fixed -->
<!-- shown when browser is less that 972px. -->
<div class="mobile-topbar">

    <div class="d-flex">

        <div class="mr-auto">
            <a href="{{asset('home')}}">
                <img class="mobile-top-bar-logo" src="{{ asset('images/common/logo_black.png') }}" />
            </a>
        </div>

        <div class="ml-auto">
              <a href="{{asset('/changelang')}}">
                @if(Session::get('locale') =='en')
                  <img src="{{asset('images/common/thai.png')}}?{{time()}}" class="mobile-topbar-items" />
                @else
                 <img src="{{asset('images/common/us.png')}}?{{time()}}" class="mobile-topbar-items" />
                @endif
              </a>
              <a target="_blank" href="http://line.me/ti/p/@uuc0799v">
                  <img src="{{asset('images/common/line_moble.png')}}?{{time()}}" class="mobile-topbar-items" />
              </a>
              <a href=#>
                  <img src="{{asset('images/common/menuline.png')}}?{{time()}}" class="mobile-topbar-items sliding-menu-trigger" />
              </a>
              <a href="tel:+66924693000">
                  <img src="{{asset('images/common/telephone.png')}}?{{time()}}" class="mobile-topbar-items" />
              </a>
        </div>
    </div>

</div>
