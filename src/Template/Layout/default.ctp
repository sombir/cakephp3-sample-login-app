<?php 
$session = $this->request->session()->read('Auth'); 
$userSession = $session['User']; 
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to CakePHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<?= $this->Html->css('style.css') ?>
</head>
<body>
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CakePHP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($this->request->here == '/'){echo "class='active'";} ?>><a href="/">Home</a></li>
			<li <?php if($this->request->here == '/about-us'){echo "class='active'"; }?>><a href="/about-us">About Us</a></li>
			<li <?php if($this->request->here == '/services'){echo "class='active'"; }?>><a href="/services">Services</a></li>
			<li <?php if($this->request->here == '/contact-us'){echo "class='active'"; }?>><a href="/contact-us">Contact Us</a></li>			
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if (!isset($userSession['username'])) { ?>
				<li <?php if($this->request->here == '/users/login'){echo "class='active'"; }?>><a href="/users/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<?php } ?>
			<?php if (isset($userSession['username'])) { ?>
			<li <?php if($this->request->here == '/users/dashboard'){echo "class='active'"; }?>><a href="/users/dashboard"><span class="glyphicon glyphicon-user"></span> <?php echo $userSession['username']; ?></a></li>
			<li><a href="/users/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			<?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 
        <?= $this->fetch('content') ?>
 <hr>
	<div class="container">
		<footer>
			<p>&copy; Company 2017</p>
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>