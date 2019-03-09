
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backEnd/css')}}/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{asset('backEnd/vendors')}}/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('backEnd/vendors')}}/css/vendor.bundle.base.css">
   <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('backEnd/css')}}/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('backEnd/images')}}/favicon.png" />
    </head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   @include('partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('partials.sidebar')
        <!-- partial -->

        <div class="main-panel">
            @yield('content')

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('partials.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('backEnd/vendors')}}/js/vendor.bundle.base.js"></script>
<script src="{{asset('backEnd/vendors')}}/js/vendor.bundle.addons.js"></script>
<script src="{{asset('backEnd/js/moment.js')}}"></script>
<script src="{{asset('backEnd/js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('backEnd/js')}}/off-canvas.js"></script>
<script src="{{asset('backEnd/js')}}/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('backEnd/js')}}/dashboard.js"></script>
<!-- End custom js for this page-->

<script type="text/javascript">
    $(".dateTimePicker").datetimepicker({
        format: "dd MM yyyy - HH:ii P",
        showMeridian: true,
        autoclose: true,
        todayBtn: true
    });
</script>
</body>

</html>





{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}