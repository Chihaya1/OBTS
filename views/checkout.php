<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
			<?php require'../partials/nav.php';?>
        </div>
        <div class= "col-md-9 offset-md-1" >
            <h2>Checkout Information</h2>
            <p>Please fill the details.<p>

            <form action="" method="post">
                <div class="form-group">
                    <label><i class="fa fa-user"></i>First Name:</label>
                    <input type="text" class="form-control" id="first_name">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i>Last Name:</label>
                    <input type="text" class="form-control" id="last_name">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i>Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-address-card-o"></i>Address:</label>
                    <input type="text" class="form-control" name="address" id="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-institution"></i>Province Number:</label>
                        <select class="form-control" id="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select>
                </div>
                <div class="form-group">
                    <label>Phone number:</label>
                    <input type="text" class="form-control" id="phone_number">
                </div>
                <button type="submit" class="btn btn-primary">Next</button>
                <button type="submit" class="btn btn-dark">Back to cart</button>
            </form>
        </div>
    </div>

            