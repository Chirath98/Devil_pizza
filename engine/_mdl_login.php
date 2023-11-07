<div class="modal fade" id="mdl_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <form method="POST" action="engine/_loguserin.php">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login to Devil Pizza</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <div class="input-group mb-3">
          <span class="input-group-text" id="login_email">Email</span>
          <input type="email" class="form-control" placeholder="Email" aria-label="email" name="Your Email   " aria-describedby="login_email">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="login_pw">Password</span>
          <input type="password" class="form-control" placeholder="Password" aria-label="password" name="password" aria-describedby="login_pw">
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary">Log in</button>
        </div>
      </form>
    </div>
  </div>
</div>
