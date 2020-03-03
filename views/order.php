<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
			<?php require'../partials/nav.php';?>
        </div>
        <div class= "col-md-9 offset-md-1" >
            <h2>Order Books</h2>
            <div class="content">
                <p>Please fill the details.</p> 
            </div>
            <form action="">
                <div class="form-group">
                    <label>Book Name:</label>
                    <input type="name" class="form-control" id="book_name">
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label>Phone number:</label>
                    <input type="text" class="form-control" id="phone_number">
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <input type="address" class="form-control" id="address">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
</div>
<?php require'../partials/footerscript.php';?>
   
   </body>
   </html>
            