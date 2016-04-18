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

<?php
	include 'login_modal.php';
?>



<!--End of  Log in Modal-->


<!-- Review in Modal -->
<?php
  include 'review_modal.php';
?>

<!--End of  Review Modal-->





<div class= "container">

<ul class="nav nav-tabs">

	<ul class="nav navbar-nav navbar-right">
        <li><button type="button" class="btn btn-primary" aria-hidden="true"data-toggle="modal" data-target="#reviewModal">Write Review</button></li>
    </ul>

	<li role="presentation" class="active" ><a href="#">Review</a></li>
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

</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>