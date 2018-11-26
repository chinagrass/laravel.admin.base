<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="后台登陆页面">
    <meta name="author" content="WeiGo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('plug/font-awesome/css/font-awesome.css')}}">

    <script src="{{asset('js/jquery/jquery-1.11.1.min.js')}}" type="text/javascript"></script>


    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheets/theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheets/premium.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/login.css')}}">

</head>
<body class=" theme-blue">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

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
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Aircraft</span></a>
    </div>

    <div class="navbar-collapse collapse" style="height: 1px;">

    </div>
</div>
</div>


<div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse">{{$formName}}}</p>

        <div class="panel-body">
            <form method="post" action="{{asset('signIn')}}">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control span12" name="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control span12 form-control" name="password">
                </div>
                <input class="btn btn-primary pull-right" type="submit" value="sign in" />
                <label class="remember-me"><input type="checkbox"> Remember me</label>

                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <p><a href="reset-password.html">Forgot your password?</a></p>
</div>


<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('js/admin/login.js')}}"></script>
</body>
</html>
