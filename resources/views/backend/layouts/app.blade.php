<!DOCTYPE html>
<html lang="en">
<head>
 @include('backend.layouts.partials.head')
 <!-- push target to head -->
 @stack('styles')
 @stack('scripts')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper"> 
     @if(Auth::check())
    @include('backend.layouts.partials.header')
   
    @include('backend.layouts.partials.sidebar')
    @endif
    <section class="content">
      <!-- Default box -->
      @yield('content')
    </section>
    @include('backend.layouts.partials.footer')
  </div>
</body>
</html>