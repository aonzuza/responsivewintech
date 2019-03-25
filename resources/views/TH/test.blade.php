<!-- {{Session::forget('locale') }} -->
{{ 'session is '.Session::get('locale').' xsxx ' }}
{{ 'result is '}}
{{ (Session::get('locale') == 'en') ? 'th' : 'en' }}
