<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
	
	require 'controllers/customers.php';
	require 'classes/product.php';
	require 'classes/logins.php';
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body> -->
<?php
    session_start();
	$products = new Product();
	$customers = new Customers();
	$products_list = $products->getProducts();
?>

<?php
	include 'header.php';
?>

<?php if (isset($_GET['r']) && $_GET['r'] == 'error'){ ?>
	<div class="alert alert-danger"> Invalod User </div>
<?php } ?>

<br/>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Log in</h4>
      </div>
      <div class="modal-body">
       <form action="<?php $customers->login();?>" class="form-group" method="POST">
			<input class='form-control'type="text" name="email" placeholder="email">
			<input class='form-control'type="password" name="password" placeholder="password">
			<input class='form-control btn btn-success' type="submit" value="Log-in" name="logIn">
	   </form>
      </div>
      
    </div>
  </div>
</div>
<!--End of Modal-->
<div class="list-group">
	<?php
		foreach ($products_list as $row) {
		echo '<a href="product_page.php?id='.$row['product_id'].'" class="list-group-item">'.$row['product_name'].'</a>';
		}
	?>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery-ui.min.js"></script> -->
<!-- <script type="text/javascript" src="/js/jquery.timepicker.js"></script> -->
<!-- <script type="text/javascript" src="js/main.js"></script>
 -->
</body>
</html>