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
            <table style="width:50%">
                <tr>
                    <th>Product</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Book_name X 1</td>
                    <td>Price</td>
                </tr>
                <tr>
                    <td>Sub Total</td>
                    <td>Price</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Price</td>
                </tr>
                </table> 
                <hr>
                
                    <button type="previous" class="btn btn-primary">Previous</button>       
                    <button type="next" class="btn btn-dark">Next</button>       
                    <button type="back to cart" class="btn btn-success">Back to Cart</button> 
                         
        </div>  
</div>
<?php require'../partials/footerscript.php';?>
   
   </body>
   </html>