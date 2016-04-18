<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php
  $products = new Product();
  $customers = new Customers();
  $products_list = $products->getProducts();
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Demo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#">Link</a></li> -->
        
      </ul>
      
     <!--  <ul class="nav navbar-nav navbar-right"> -->
     <ul class="nav navbar-nav">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<?php
          		foreach($products_list as $row){
          			echo '<li>';
          			echo '<a href="product_page.php?id='.$row['product_id'].'">'.$row['product_name'].'</a>';
          			echo '</li>';
          		}
          	?>
           <!--  <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li> -->
            <!-- <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      	<?php if (isset($_SESSION['user'])){ ?>
        	<li><a href="<?php $customers->logout();?>">Logout</a></li> 
        <?php }else {?>
        	<li><a href="" data-toggle="modal" data-target="#myModal">Login</a></li> 
        <?php }?>
        <!-- <li><button type="button" class="btn btn-primary">Primary</button></li>
 -->    
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<!-- </body>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script> -->
<!-- </html> -->