<?php require '../partials/headscript.php';?>
<!-- sell ko lagi nav ma haleko chaina -->
<?php require '../partials/header.php';?>
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
			<?php require'../partials/nav.php';?>
        </div>
        <div class= "col-md-10" >
            <h2>Sell Books</h2>
            <p>Fill the form to sell your books.</p>
            <form action="" method="post">
                <div class="form-group col-md-6">
                    <label>Book name:</label>
                    <input type="text" class="form-control" id="book_name">
                </div>
                <div class="form-group col-md-6">
                    <label>Category</label>
                        <select class="form-control" id="">
                            <option>School</option>
                            <option>+2</option>
                            <option>A Level</option>
                            <option>Bachelors</option>
                            <option>Comics</option>
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Publisher</label>
                    <input type="publisher" class="form-control" id="publisher">
                </div>
                <div class="form-group col-md-6">
                    <label>Price:</label>
                    <input type="text" class="form-control" id="phone_number">
                </div>
                <div class="form-group col-md-6">
                    <label>Condition of Book</label>
                        <select class="form-control" id="">
                            <option>First Hand</option>
                            <option>Second Hand</option>
                        </select>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form><br>
        </div>
</div>

<?php require'../partials/footerscript.php';?>
   
   </body>
   </html>