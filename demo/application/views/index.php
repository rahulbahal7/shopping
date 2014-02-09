<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>

<link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
</head>
<body>

<div id="wrap">
<?php echo $this->view('cart/browse.php'); ?>
	<div align=right >
	<center>
		
	</center>	
	<b><?php session_start(); echo "Hi ".$_SESSION['user']."!";?></b> &nbsp; | &nbsp; <a href="home/logout">Logout</a>
	</div>
	<br>
	<?php $this->view($content); ?>
	<div class="cart_list">
		<h3>Your shopping cart</h3>
		<div id="cart_content">
			<?php echo $this->view('cart/cart.php'); ?>
			
		</div>
	</div>
	
</div>
<!--div>
<?php //echo $this->view('cart/browse.php'); ?>
</div-->
</body>
</html>