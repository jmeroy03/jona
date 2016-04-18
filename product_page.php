<?php
	require 'controllers/customers.php';
	require 'classes/product.php';
	require 'classes/logins.php';
	require 'classes/review.php';
?>

<?php
	$reviews = new Review();
	$reviews_list = $reviews->listReview($rating,$titleReview,$titleBody);
?>	

<?php
	include 'header.php';
?>

	<ul class="nav nav-tabs">
	  <li role="presentation" class="active"><a href="#">Home</a></li>
	</ul>

		<table>
			<tr style="background-color: yellow;border:solid 2px;"><td>hkfghskg</td></tr>
			<?php
	      		foreach($reviews_list as $row){
	      			echo '<tr style="background-color:#669999; solid 2px;">';
	      			echo $row['rating'].'<br >'.$row['review_title'].'<br >' .$row['review'];
	      			echo '</li>';
	      		}
		    ?>

		</table>