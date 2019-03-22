
<!-- position fixed -->
<!-- shown when browser is less that 972px. -->
<div class="mobile-topbar">

    <div class="d-flex">

        <div class="mr-auto">
            <a href="home">
                <img class="mobile-top-bar-logo" src="{{ asset('images/common/logo_black.png') }}" />
            </a>
        </div>

        <div class="ml-auto">
              <a href=#>
                <img src="{{asset('images/common/us.png')}}?{{time()}}" class="mobile-topbar-items" />
              </a>
              <a href=#>
                  <img src="{{asset('images/common/line_moble.png')}}?{{time()}}" class="mobile-topbar-items" />
              </a>
              <a href=#>
                  <img src="{{asset('images/common/menuline.png')}}?{{time()}}" class="mobile-topbar-items sliding-menu-trigger" />
              </a>
              <a href=#>
                  <img src="{{asset('images/common/telephone.png')}}?{{time()}}" class="mobile-topbar-items" />
              </a>
        </div>
    </div>

</div>
