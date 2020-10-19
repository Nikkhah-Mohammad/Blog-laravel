<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body dir="rtl">
  <div id="main-site">

   @include('layouts.header')

   <div id="content" class="mt-1 m-1">
   @yield('content')
   </div>
  
   @include('layouts.footer')

  </div>

</body>
@include('layouts.script')
</html>