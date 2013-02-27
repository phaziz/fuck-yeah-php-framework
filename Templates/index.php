<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fuck Yeah PHP Framework - ./Templates/index.php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Index">
    <meta name="author" content="Index">
    <link href="<?php echo _BASE_URL; ?>Templates/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">
    	.right{
    		text-align:right;
    	}
    	.margin-top-55{
    		margin-top: 55px;
    	}
    </style>
  </head>
  <body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./">Fuck Yeah PHP Framework</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="./">Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container margin-top-55">

		<div class="row">
			<div class="span6">
				<h1>Welcome!</h1>
			</div><!-- /span6 -->
			<div class="span6 right">
				<h5>Version 1.0.0 / 2012-02-16</h5>
			</div><!-- /span6 -->
		</div><!-- /row -->
		
		<div class="row">
			<div class="span12">
				<h2>About</h2>
				<p>
					Fuck Yeah PHP Framework is a tiny pre-configured Package that comes with the wonderful Slim PHP-Framewok, Idorm &amp; Paris (ORM, Active Record Implementation), jQuery and Twitter Bootstrap styled PHP-Templates.
				</p>
				<h2>Content</h2>
				<ul>
					<li>ROOT/Helper/... <span>This ist the Home-Dir of Your Application Helper-Files like Idiorm, Paris, ...</span></li>
					<li>ROOT/Models/... <span>This ist the Home-Dir for Your Database-Model-Classes. It contains a example Model-File.</span></li>
					<li>ROOT/Slim/... <span>This ist the Home-Dir for wonderful tiny Slim PHP5-Framework.</span></li>
					<li>ROOT/Templates/bootstrap/... <span>The Includes for Your Templates</span></li>
					<li>ROOT/Templates/404.php <span>Main 404 Not Found-Handling Template</span></li>
					<li>ROOT/Templates/index.php <span>This File - The Main Route.</span></li>
					<li>ROOT/Views/helper.php <span>Helper Functions for Your App - 404-Route for Example.</span></li>
					<li>ROOT/Views/index.php <span>The Root-Route of this App (defined via get ./)</span></li>
					<li>ROOT/.htaccess <span>Clean URLS, etc...</span></li>
					<li>ROOT/humans.txt <span>Cause we are human...</span></li>
					<li>ROOT/index.php <span>The main Index-File for this App.</span></li>
					<li>ROOT/robots.txt <span>Pre-configured.</span></li>
					<li>ROOT/sitemap.xml <span>We all love Google...</span></li>
				</ul>
			</div><!-- /span12 -->
		</div><!-- /row -->

		<div class="row">
			<div class="span12">
				<h2>Get Started</h2>
				<p>
					Define some Routes, Add some Templates, Configure Your Database and start developing!
				</p>
			</div><!-- /span12 -->
		</div><!-- /row -->

		<div class="row">
			<div class="span12">
				<h2>What?</h2>
				<p>
					This view is included in ./root/index.php, defined in ./root/Views/index.php and templated in ./root/Templates/index.php.
				</p>
			</div><!-- /span12 -->
		</div><!-- /row -->

    </div> <!-- /container -->

    <script src="<?php echo _BASE_URL; ?>Templates/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo _BASE_URL; ?>Templates/bootstrap/js/bootstrap.min.js"></script>
    <script>
        
        $(function() {

        });
        
    </script>
  </body>
</html>