<?php
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