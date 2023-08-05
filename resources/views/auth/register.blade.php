<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pos</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->


    <!--Bootstrap Stylesheet [ REQUIRED ] {{asset('../resources/vendor/fontawesome-free/css/all.min.css')}}-->
    <link href="{{asset('../resources/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Morris.js [ OPTIONAL ]-->
    <link href="{{asset('../resources/css/themes/type-d/theme-navy.min.css')}}" rel="stylesheet">


    <!--Morris.js [ OPTIONAL ]-->

    <link href="{{asset('../resources/plugins/morris-js/morris.min.css')}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('../resources/css/nifty.min.css')}}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('../resources/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">


    <!--====================Mapas=============================-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />


    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{asset('../resources/plugins/pace/pace.min.css')}}" rel="stylesheet">



    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('../resources/css/demo/nifty-demo.min.css')}}" rel="stylesheet">
    <link href="{{asset('../resources/plugins/datatables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('../resources/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css')}}"
        rel="stylesheet">



</head>

<body>
    @guest
    @if (Route::has('login'))
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">

                </div>

                <div class="navbar-content">

                    </ul>

                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->


        <div id="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div id="container" class="cls-container">

                            <!-- BACKGROUND IMAGE -->
                            <!--===================================================-->
                            <div id="bg-overlay" class="bg-img"></div>
                            <div id="bg-overlay"></div>
                            <img class="demo-chg-bg active" alt="Background Image">

                            <!-- LOGIN FORM -->
                            <!--===================================================-->
                            <div class="cls-content">
                                <div class="panel cls-content-sm ">
                                    <div class="panel-body">
                                        <div class="mar-ver pad-btm">
                                            <br></br>
                                            <h1 class="h3">Registrarse</h1>
                                            <p>Con su cuenta</p>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <!-- Datos de registro -->
                                                    <div class="form-group">
                                                        <label for="name">Nombre</label>
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Correo Electrónico</label>
                                                        <input id="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Contraseña</label>
                                                        <input id="password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password-confirm">Confirmar Contraseña</label>
                                                        <input id="password-confirm" type="password"
                                                            class="form-control" name="password_confirmation"
                                                            required autocomplete="new-password">
                                                    </div>

                                                    <button class="btn btn-primary btn-lg btn-block"
                                                        type="submit">Registrarse</button>
                                                </form>
                                </div>
                            </div>
                            <!--===================================================-->
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">

        </div>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <p class="pad-lft">&#0169;2022 JETXCEL S.A.S. & @INPUTSYSTEM</p>
    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->
    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->

    <!--===================================================-->
    </div>

    <script src="{{asset('../resources/js/jquery.min.js')}}"></script>
    <script src="{{asset('../resources/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('../resources/js/nifty.min.js')}}"></script>

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{{asset('../resources/js/demo/nifty-demo.min.js')}}"></script>


    <!--DataTables Sample [ SAMPLE ]-->

    <script src="{{asset('../resources/plugins/fooTable/dist/footable.all.min.js')}}"></script>
    <script src="{{asset('../resources/plugins/morris-js/morris.min.js')}}"></script>
    <script src="{{asset('../resources/plugins/morris-js/raphael-js/raphael.min.js')}}"></script>



    <!--FooTable Example [ SAMPLE ]-->
    <script src="{{asset('../resources/js/demo/tables-footable.js')}}"></script>

    <script src="{{asset('../resources/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>

    <script src="{{asset('../resources/plugins/flot-charts/jquery.flot.min.js')}}"></script>
    <script src="{{asset('../resources/plugins/flot-charts/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('../resources/plugins/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
    <!--Sparkline [ OPTIONAL ]-->
    <script src="{{asset('../resources/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="{{asset('../resources/plugins/pace/pace.min.js')}}"></script>
    @endif
    @else
    {{(route('home'))
    }}
    @endguest

</body>

</html>