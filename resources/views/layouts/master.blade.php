@include('layouts.header')

  @include('layouts.main-header')
  
  @include('layouts.sidebar')

    @yield('content')

  @include('layouts.main-footer')

@include('layouts.footer')