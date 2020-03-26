<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
<div class="row no-gutters">
		<div class="col-md-2">
			<?php require'../partials/nav.php';?>
        </div>
<div class="col-md-10">
        <h2>
            Register Here
        </h2>
        <form action="" method="post">
            <div class="form-group col-md-6">
                <label>Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label>Password</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="password">
            </div>
            <div class="form-group col-md-6">
                <label>Confirm Password</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="password">
            </div>
            <div class="form-group col-md-6">
                <select class="custom-select mb-2" id="inlineFormCustomSelect">
                    <option>Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label><b>I agree with the terms and condition</b></label>
            </div>
            <button type="submit" class="btn btn-dark">Register</button>       
        </form>
    </div>    
</div>

<?php require '../partials/footerscript.php';?>