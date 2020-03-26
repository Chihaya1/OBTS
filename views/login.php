<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
    <div class="col-md-10">
        <h2>
            Login Here 
        </h2>
        <form action="" method="post">
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label>Password</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="password">
            </div>
            <div class="form-group col-md-6">
                <label>User Category</label>
                    <select class="form-control" id="">
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>
            <div class="form-group col-md-6">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label>Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button class="btn btn-dark"><a href="register.php">Register</a></button>
        </form>
    </div>    

