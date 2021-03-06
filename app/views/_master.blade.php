<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<title>@yield('title','DWA15 - McDevitt')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <link href="/css/normalize.css" rel="stylesheet" >
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>

	@yield('head')

</head>

<body>

        <header>
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-100">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="http://p4.iitbotftbd.com">DWA15</a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-100">

                            @if(Session::get('flash_message'))
                                <div class="flash-message"> {{ Session::get('flash_message') }} </div>
                            @else
                                <ul class="nav navbar-nav">
                                    <li><a href="http://p1.iitbotftbd.com">P1-Portfolio</a></li>
                                    <li><a href="http://p2.iitbotftbd.com">P2-xkcdPwD</a></li>
                                    <li><a href="http://p3.iitbotftbd.com">P3-ProgWork</a></li>
                                    <li class=active><a href="http://p4.iitbotftbd.com">P4-S2TMS</a></li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container">
            <div class="row">
                <div class="jumbotron col-md-12">
                    <h1>
                        @yield('jumbotron')
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="hidden-lg hidden-md col-sm-12 col-xs-12">

                    <p class="bottom-sep"></p>
                    
                            <h2><a href='/team'> Teams </a>
                            <a href='/skater'> Skaters </a>
                            <a href='/club'> Clubs </a></h2>

                    <p class="bottom-sep"></p>
	
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

	                @yield('content')

                    @yield('results')

                    <p class="bottom-sep"></p>
                </div>

                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <div class="sidebar">

                        <h3>Manage:</h3>
                        <h3><a href='/team'> Teams </a><br>
                        <a href='/skater'> Skaters </a><br>
                        <a href='/club'> Clubs </a></h3>

                        <p class="bottom-sep"></p>

                        <h3>View System Data:</h3>
                        <h3><a href='/testlevel'> Test Levels </a><br>
                        <a href='/complevel'> Competition Levels </a></h3>

                    </div>
                </div>
            </div>

            <div class="row sitefooter">

                <div class="col-md-4 sitefooter"></div>
                <div class="col-md-8 sitefooter"></div>

            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
</body>
</html>
