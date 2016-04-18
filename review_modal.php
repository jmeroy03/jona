<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add</h4>
      </div>
      <div class="modal-body">
       <form action="<?php $customers->login();?>" class="form-group" method="POST">
			<input class='form-control'type="text" name="rating" placeholder="rating">
			<input class='form-control'type="text" name="Title Review" placeholder="review title">
			<input class='form-control'type="text" name="review" placeholder="review">
			
			<input class='form-control btn btn-success' type="submit" value="Add Review" name="reviewModal">
	   </form>
      </div>
      
    </div>
  </div>
</div>