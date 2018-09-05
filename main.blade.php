<!doctype html>
<html lang="en">
  <head>

   @include('partial._head')

  </head>
  <body>
    <!-- Navbar -->
       @include('partial._nav')
    <!--end of navbar-->

    <!-- Content -->
    <div class="container">

      @yield('content')
      
    </div>
     <!-- End of Content -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      @include('partial._script')


    <!-- Footer-->
      @include('partial._footer')
  </body>
</html>