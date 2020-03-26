<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
			<?php require'../partials/nav.php';?>
        </div>
        <div class= "col-md-10" >
            <h2>User Details</h2>
            <form action="" method="post">
                <div class="form-group col-md-6">
                    <label>First Name:</label>
                    <input type="text" class="form-control" id="first_name">
                </div>
                <div class="form-group col-md-6">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" id="last_name">
                </div>
                <div class="form-group col-md-6">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group col-md-6">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="address" id="">
                </div>
                <div class="form-group col-md-6">
                    <label>Publisher</label>
                    <input type="publisher" class="form-control" id="publisher">
                </div>
                <div class="form-group col-md-6">
                    <label>Province Number:</label>
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
                <div class="form-group col-md-6">
                    <label>Phone number:</label>
                    <input type="text" class="form-control" id="phone_number">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form><br>
        </div>
</div>

<?php require'../partials/footerscript.php';?>
   
   </body>
   </html>