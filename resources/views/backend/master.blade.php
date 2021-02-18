<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <link href="{{ asset('backend/dist/css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/ckeditor/ckeditor.js')}}"></script>
</head>
<body class="sb-nav-fixed">
    <!--navination -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        
        <a class="navbar-brand" href="{!! URL('admin/dashboard')!!}">Start Bootstrap</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
        
    </nav>
    
    <!--navination -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{!! URL('admin/dashboard')!!}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                            Manage Products
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{!! URL::route('admin.product.list') !!}">Product</a>
                                <a class="nav-link" href="#">Product Types</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Product Groups</a>
                                <a class="nav-link" href="{!! URL::route('admin.unit.list') !!}">Unit</a>
                                <a class="nav-link" href="#">Supplier</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Shipment</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--Page content-->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    @yield('title')
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/dist/js/scripts.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/dist/js/datatables-demo.js') }}"></script>

    

    {{-- <script src="{{ asset('backend/ckeditor/plugins/autoembed/plugin.js')}}"></script>
    <script src="{{ asset('backend/ckeditor/plugins/cloudservices/plugin.js')}}"></script> --}}
    <script type="text/javascript">
        $(document).ready(function(){ 
            CKEDITOR.replace('txtUnit')
        });
    </script>

    @include('sweetalert::alert')
</body>

</html>