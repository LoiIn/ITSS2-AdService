<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Advertisement Service</title>

    <link rel="stylesheet" href="{{asset('asset/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
  </head>
  <body>
    <div class="container-scroller">
        @yield('content')
        @include('common.footer')
    </div>

    <script src="{{asset('asset/vendors/base/vendor.bundle.base.js')}}"></script>
   <script src="{{asset('asset/js/template.js')}}"></script>
    <script src="{{asset('asset/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
    <script src="{{asset('asset/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('asset/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('asset/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('asset/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{asset('asset/vendors/justgage/raphael-2.1.4.min.js')}}"></script>
    <script src="{{asset('asset/vendors/justgage/justgage.js')}}"></script>
    <script src="{{asset('asset/js/dashboard.js')}}"></script>
    <script src="{{asset('asset/js/typeahead.js')}}"></script>
    <script src="{{asset('asset/js/select2.js')}}"></script>
    <script src="{{asset('asset/js/chart.js')}}"></script>
    <script src="{{asset('asset/js/flash-card.js')}}"></script>
    <script src="{{asset('asset/js/file-upload.js')}}"></script>
  </body>
</html>
