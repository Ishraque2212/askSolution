<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Signup to askSolution</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="partials/_handleSignUp.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="signupName">Name</label>
            <input type="text" class="form-control" id="signupName" name="signupName" aria-describedby="name"
              placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="signupEmail">Email address</label>
            <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"
              placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="signupPassword">Password</label>
            <input type="password" class="form-control" id="signupPassword" name="signupPassword"
              placeholder="Password">
          </div>
          <div class="form-group">
            <label for="signupcPassword">Confirm Password</label>
            <input type="cpassword" class="form-control" id="signupcPassword" name="signupcPassword"
              placeholder="Confirm Password">
          </div>
          <div class="form-group">
          <input type="file" name="user_image" id="user_image" accept="image/*" required>
            <label for="signupName">Upload your image</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>