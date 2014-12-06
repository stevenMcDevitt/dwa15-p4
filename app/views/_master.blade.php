<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<title>@yield('title','DWA15 - McDevitt')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <link href="css/normalize.css" rel="stylesheet" >
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

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
                            <ul class="nav navbar-nav">
                                <li><a href="http://p1.iitbotftbd.com">P1-Portfolio</a></li>
                                <li><a href="http://p2.iitbotftbd.com">P2-xkcdPwD</a></li>
                                <li><a href="http://p3.iitbotftbd.com">P3-ProgWork</a></li>
                                <li class=active><a href="http://p4.iitbotftbd.com">P4-S2TMS</a></li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                </div>
                            </form>
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
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	
	               @yield('content')

	               @yield('results')

                    <br>
                    <p class="bottom-sep"></p>
                    <h1>Links to Project</h1>
                    <p><a href="http://p4.iitbotftbd.com">Link to Project 4 Site</a></p>
                    <p><a href="https://github.com/stevenMcDevitt/dwa15-p4.git">Link to Project 4 Github Repository</a></p>
                    <p class="bottom-sep"></p>
                </div>

            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <div class="sidebar">
                        <h2>It Is The Business Of The Future To Be Dangerous</h2>
                    </div>
                </div>
            </div>

            <div class="row sitefooter">

                <div class="col-md-4 sitefooter"></div>
                <div class="col-md-8 sitefooter"></div>

            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>
