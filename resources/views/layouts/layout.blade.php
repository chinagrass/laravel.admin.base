<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @section('style')
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('plug/font-awesome/css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheets/theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheets/premium.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/admin/layout.css')}}">
    @show
    @section('script')
        <script src="{{asset('js/jquery/jquery-1.11.1.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('plug/jQuery-Knob/js/jquery.knob.js')}}" type="text/javascript"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
        <script src="{{asset('js/admin/layout.js')}}"></script>
    @show
</head>
<body class="theme-blue">

<!--[if lt IE 7 ]>
<body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>
<body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]>
<body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]>
<body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->

<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Aircraft</span></a>
    </div>

    <div class="navbar-collapse collapse" style="height: 1px;">
        <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small"
                          style="position:relative;top: 3px;"></span> Jack Smith
                    <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu">
                    <li><a href="./">My Account</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Admin Panel</li>
                    <li><a href="./">Users</a></li>
                    <li><a href="./">Security</a></li>
                    <li><a tabindex="-1" href="./">Payments</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>

@include('layouts.left')
<div class="content">
    @yield('content')
    @include('layouts.footer')
</div>
</body>
</html>