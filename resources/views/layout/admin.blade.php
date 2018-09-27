<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">

  <title>Shopnokotha</title>

  <!-- Bootstrap core CSS-->

  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <link rel="shortcut icon" type="image/x-icon" href="http://www.swopnokotha.news/img/logo.png">

  <!-- Custom fonts for this template-->

  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->

  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->

  <link href="{{ asset('css/sb-admin.css')}}" rel="stylesheet">

  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">

  <style type="text/css">

    .overflow-x{

    overflow-x: scroll;

}

  </style>

  @yield('style')

</head>



<body class="fixed-nav sticky-footer bg-dark" id="page-top">



  <div id="app">

  @include('inc.nav')

  @yield('content')

    <a class="scroll-to-top rounded" href="#page-top">

      <i class="fa fa-angle-up"></i>

    </a>

    <!-- Logout Modal-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">

        <div class="modal-content">

          <div class="modal-header">

            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

            <button class="close" type="button" data-dismiss="modal" aria-label="Close">

              <span aria-hidden="true">×</span>

            </button>

          </div>

          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

          <div class="modal-footer">

            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

            <a class="btn btn-primary" href="login.html">Logout</a>

          </div>

        </div>

      </div>

    </div>

  </div>

    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->

    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->

    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>

    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->

    <script src="{{ asset('js/sb-admin.min.js') }}"></script>

    <!-- Custom scripts for this page-->

    <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>



    <script src='{{ asset('js/unisharp.js') }}'></script>



    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>

<script>

     $('#lfm').filemanager('image');

</script>

    <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>

  </div>

  @yield('script')

</body>



</html>

