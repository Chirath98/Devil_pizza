<div class="modal fade" id="mdl_register" tabindex="-1" aria-labelledby="ModalLabelu" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="engine/_createuser.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelu">Register to Devil pizza</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> 
                    <div class="row">
                        <form action="_loguser.php" method="POST">
                        <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInputfname" placeholder="First Name" name="fname" required>
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInputlname" placeholder="Last Name" name="lname" required>
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInputemail" placeholder="name@example.com" name="email" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInputPassword" placeholder="Password" name="password" >
                        <label for="floatingInput">Password</label>
                    </div>             
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingInputPassworda" placeholder="PasswordV" name="passwordV" >
                        <label for="floatingInput">Type Password Again</label>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    </div>
                </div>
            </form>
            <div class="quoteContainer">
            <div id="passwordt"></div>
            <button class="btn btn-primary" id="buttonGetPassword">Password generetor</button>
            </div>
                
        </div>
    </div>
</div>

                   
                
