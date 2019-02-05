<!DOCTYPE html>
<html lang="pt-br" ng-app="Admin7cliques">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 cliques - @yield('title') </title>

    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    

<script src="{!! asset('js/angular.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/sweetalert/sweetalert.min.js') !!}" type="text/javascript"></script>


</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper"  >

        <!-- Navigation -->
        @include('layouts.admin.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">
            
            <!-- Page wrapper -->
            @include('layouts.admin.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.admin.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<!--SCRIPT PADRAO DO SISTEMA-->
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/7cliques.init.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>
<script src="{!! asset('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>
<script src="{!! asset('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>


 <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
 <link rel="stylesheet" href="{!! asset('css/admin_7cliques.css') !!}" />
 

@section('scripts')
@show

</body>
</html>
