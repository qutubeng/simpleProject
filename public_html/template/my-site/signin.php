<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<!--     <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet"> -->
	<link href="<?php echo $this->config['domain']['url'].'/'; ?>lib/bootstrap3.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $this->config['domain']['url'].'/'; ?>lib/font-awesome/4.0.3/css/font-awesome.css">
	
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo $this->config['domain']['url'].'/'; ?>lib/font-awesome/css/font-awesome-ie7.min.css" />
	<![endif]-->
    <!-- Custom styles for this template -->
<!--     <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo $this->config['domain']['url'].'/'.$this->config['template']['path'].'/'.$this->config['template']['name']; ?>/css/signin.css" type="text/css" media="all" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  	<div align='center' class='flag_div'>
  		<a href='#'><img src='<?php echo $this->config['domain']['url'].'/'.$this->config['template']['path'].'/'.$this->config['template']['name']; ?>/images/sweden_flag.gif' class='img-thumbnail flag' alt='swedish' title='Swedish' ></a><a href=''><img src='<?php echo $this->config['domain']['url'].'/'.$this->config['template']['path'].'/'.$this->config['template']['name']; ?>/images/uk_flag.gif' class='img-thumbnail flag' alt='English' title='English'></a>
  	</div>
	</nav>
    <div class="container">
      <h1 align="center"><a href="<?php echo $this->config['domain']['url']; ?>" title="Powered by <?php echo $this->config['domain']['name']; ?>"><img class='img-responsive img-center' src='<?php echo $this->config['domain']['url'].'/'.$this->config['template']['path'].'/'.$this->config['template']['name']; ?>/images/logo.jpg'  /></a></h1>
	  <div id="login_error" style="display:none"></div> <!-- error message shows here -->
      <form class="form-signin" role="form">
        <div class="form-group">
	    	<label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
	  	</div>
  		<div class="form-group">
	    	<label for="exampleInputEmail1">Password</label>
        	<input type="password" class="form-control" placeholder="Password" required>
        </div>	
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-key"></i> Sign in</button>
        
        <div style='clear: both;' align='center'> -------<strong>OR</strong> Login with -------</div>
		
		<div class="social-login center">
			<a class="btn btn-primary">
				<i class="fa fa-facebook"></i>
			</a>

			<a class="btn btn-info">
				<i class="fa fa-twitter"></i>
			</a>

			<a class="btn btn-danger">
				<i class="fa fa-google-plus"></i>
			</a>
		</div>
		<div class='toolbar'>
			<div class='left_pass'><a href="<?php $this->link('login/forgetPassword'); ?>" title="Password Lost and Found">Lost your password?</a></div>
			<div class='right_register'><a href="<?php $this->link('register/index'); ?>" title="Password Lost and Found">Register</a></div>
		</div>
		
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

</body></html>