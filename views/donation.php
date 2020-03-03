<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
			<?php require'../partials/nav.php';?>
        </div>
        <div class= "col-md-9 offset-md-1" >
            <h2>Donate Books</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label>Book name:</label>
                    <input type="text" class="form-control" id="book_name">
                </div>
                <div class="form-group">
                    <label>Condition of Book</label>
                        <select class="form-control" id="">
                            <option>First Hand</option>
                            <option>Second Hand</option>
                        </select>
                </div>
                <div class="form-group">
                    <label>Publisher</label>
                    <input type="publisher" class="form-control" id="publisher">
                </div>
                <div class="form-group">
                    <label>Phone number:</label>
                    <input type="text" class="form-control" id="phone_number">
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <input type="text" class="form-control" name="address" id="">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                <button class="btn btn-dark"><a href="user.php">User Detail</a></button>
            </form>
        </div>
</div>

<?php require'../partials/footerscript.php';?>
   
   </body>
   </html>