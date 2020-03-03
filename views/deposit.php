<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
			<?php require'../partials/nav.php';?>
        </div>
        <div class= "col-md-9 offset-md-1" >
            <h2>Deposit Books</h2>
            <div class="content">
                <p>Please fill the details of book you want to deposit.</p> 
            </div>
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label>Book name:</label>
                    <input type="text" class="form-control" id="book_name">
                </div>
                <div class="form-group">
                    <label>Author/Publication name:</label>
                    <input type="text" class="form-control" id="author">
                </div>
                <div class="form-group">
                    <label>MRP:</label>
                    <input type="email" class="form-control" id="MRP">
                </div>
                <div class="form-group">
                    <label>Condition of Book</label>
                        <select class="form-control" id="">
                            <option>First Hand</option>
                            <option>Second Hand</option>
                        </select>
                </div>
                <div class="form-group">
                    <p><b>Photos max 2MB</b></p>
                    <label>Book image</label>
                    <input type="file" name="book_image" id="">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
</div>

<?php require'../partials/footerscript.php';?>
   
   </body>
   </html>