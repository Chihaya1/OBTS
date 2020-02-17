<?php require '../partials/header.php';?>
<?php require '../partials/navigation.php';?>
    <div class="container">
        
        <div class="col-md-6 offset-md-3">
        <h2>
        Contact Us 
        </h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Firstname:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname" name="firstname">
            </div>
            <div class="form-group">
                <label>Lastname:</label>
                <input type="text" class="form-control" id="laststname" placeholder="Enter Lastname" name="lastname">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <input type="text" class="form-control"  placeholder="Enter Phone number" name="phone_number">
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control"  placeholder="Enter Address" name="address">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>

        </div>
    </div>

<?php require '../partials/footer.php';?>


