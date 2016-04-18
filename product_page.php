<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

	require 'controllers/customers.php';
	require 'classes/product.php';
	require 'classes/logins.php';
	require 'classes/review.php';
?>

<?php
	$reviews = new Review();
	$reviews_list = $reviews->listReview();
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


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
</ul>

<table>
	<?php
  		foreach($reviews_list as $row){
  			echo '<tr style="background-color:#669999;border:solid 2px;">';
  			echo '<td>'.$row['email'].'<br >'.$row['rating'].'<br >'.$row['review_title'].'<br >' .$row['review'].'</td>';
  			echo '</tr>';
  		}
    ?>

</table>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>