<!-- Log in Modal -->
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
<!--End of  Log in Modal-->