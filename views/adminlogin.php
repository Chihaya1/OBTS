<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
    <div class="col-md-9 offset-md-1">
        <h2>
            Login Here 
        </h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label>Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    

