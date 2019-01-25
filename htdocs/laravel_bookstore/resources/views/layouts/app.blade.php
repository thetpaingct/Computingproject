<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bookstore</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet"  href="{{ asset('css/jquery.dataTables.css')}}">

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script  src="{{asset('js/jquery.min.js')}}"></script>
    <script  src="{{asset('js/jquery.dataTables.js')}}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
          
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('home') }}">
                       Bookstore
                    </a>
                </div>
               <!--   <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   <ul class="nav navbar-nav navbar-right">
                   <li><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('register') }}">Register</a></li>
                          </ul>
                 </div> -->
              

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                             <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Create <b class="caret"></b></a>
                                 <ul class="dropdown-menu">
                                     <li><a href= {{url('author/create/')}} >Author</a></li>
                                     <li><a href= {{url('genre/create/')}} >Genre</a></li>
                                     <li><a href= {{url('publishinghouse/create/')}} >Publishing house</a></li>
                                     <li><a href= {{url('book/create/')}} >Book</a></li>
          
                    </ul>
                            </li>
                              <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Edit <b class="caret"></b></a>
                                 <ul class="dropdown-menu">
                                     <li><a href= {{url('author')}} >Author</a></li>
                                     <li><a href= {{url('genre')}} >Genre</a></li>
                                     <li><a href= {{url('publishinghouse')}} >Publishing house</a></li>
                                     <li><a href= {{url('book')}} >Book</a></li>
          
                    </ul>
                            </li>
                            <li><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('register') }}">Register</a></li>
                           <!--  <li><a href="{{ url('login') }}">Logout</a></li> -->
                       
                    </ul>
                </div>
               
            </div>
        </nav>

        @yield('content')
    </div>
 
    
</body>
</html>
