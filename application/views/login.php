<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ielt7 ielt8 ielt9"><![endif]--><!--[if IE 7 ]><html lang="en" class="ie7 ielt8 ielt9"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>Login - Assets&Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('/static/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?php echo base_url('/static/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
		<link href="<?php echo base_url('/static/css/site.css')?>" rel="stylesheet">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<div id="login-page" class="container">
         <h1> Assets Login</h1>
			<form id="login-form" class="well" method="post" action="<?php echo site_url('Dashboard/login')?>">
			<input type="text" id="username" name="username" value="<?php echo set_value('username'); ?>" class="span3" placeholder="username" autofocus/><br />
			<p class="text-danger"><?php echo form_error('username'); ?></p>
			<input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" class="span3" placeholder="password" /><br />
			<p class="text-danger"><?php echo form_error('password'); ?></p>
			<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">
            Remember me </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name='subimit' value="subimit">Sign in</button>
		</form>	
		</div>
		<script src="<?php echo base_url('/static/js/jquery.min.js')?>"></script>
		<script src="<?php echo base_url('/static/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('/static/js/site.js')?>"></script>
	</body>
</html>