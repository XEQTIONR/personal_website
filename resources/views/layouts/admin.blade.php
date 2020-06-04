<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IshteharHussain.com - Administration</title>

    <!-- Custom fonts for this template-->
    <link href="/sb/font-awesome-all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/sb/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
                <nav id="navbar" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->


                @yield('content')




        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button type="submit" class="btn btn-primary"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                Logout
                </button>
                <form id="logout-form d-none" method="POST" action="{{route('logout')}}">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    const username = '{{Auth::user()->name}}';
</script>

@yield('scripts')


<!-- Bootstrap core JavaScript-->
<script src="/jquery.min.js"></script>
<script src="/bootstrap.bundle.min.js"></script>


<!-- Core plugin JavaScript-->
<script src="/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="/sb/sb-admin-2.min.js"></script>


<script src="/ace-editor-src/ace.js"></script>

<script src="/js/app.js"></script>


</body>

</html>
