<!DOCTYPE html>
<html lang="en">
<head>
 @include('layouts.partials.head')
 <!-- push target to head -->
 @stack('styles')
 @stack('scripts')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper"> 
    @include('layouts.partials.header')
    @include('layouts.partials.sidebar')
    <section class="content">
      <!-- Default box -->
      @yield('content')
    </section>
    @include('layouts.partials.footer')
  </div>
</body>
</html>