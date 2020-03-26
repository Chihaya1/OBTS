<?php require '../partials/headscript.php';?>
<?php require '../partials/header.php';?>
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
			<?php require'../partials/nav.php';?>
            <div>
                <label><b>Condition of Book</b></label>
                    <select class="form-control" id="">
                                <option>First Hand</option>
                                <option>Second Hand</option>
                    </select>
            </div><br><br>
            <div>
                <label><b>Default Sorting</b></label>
                    <select class="form-control" id="">
                                <option>Sort By Latest</option>
                                <option>Sort By Popularity</option>
                    </select>
            </div>
        </div>
        <!-- Books -->
        <div class="col-md-10">
            <section class="book-img container">
                <div class="row">
                 <!-- <h3 class="head">Books</h3> -->
                    <div class="col-md-3 pt-4 book-1 ">
                        <img src="../public/img/School-Books/1.jpg"  class="img-fluid">
                    </div>
                    <div class="col-md-3 pt-4 book-2">
                        <img src="../public/img/School-Books/2.jpg"  class="img-fluid">
                    </div>
                    <div class="col-md-3 pt-4 book-3 py=5px">
                        <img src="../public/img/School-Books/3.jpg"  class="img-fluid">
                    </div>
                    <div class="col-md-3 pt-4 book-4">
                        <img src="../public/img/School-Books/4.jpg"  class="img-fluid">
                    </div>
                    <div class="col-md-3 pt-4 mb-4 book-5 ">
                        <img src="../public/img/School-Books/5.jpg"  class="img-fluid" >
                    </div>
                    <div class="col-md-3 pt-4 book-6">
                        <img src="../public/img/School-Books/6.jpg"  class="img-fluid">
                    </div>
                    <div class="col-md-3 pt-4 book-7" >
                        <img src="../public/img/School-Books/7.jpg"  class="img-fluid">
                    </div>
                    <div class="col-md-3 pt-4 book-8">
                        <img src="../public/img/School-Books/8.jpg"  class="img-fluid"  width = "100">
                    </div>
                </div>
            </section>
        </div>

</div>
  
<?php require'../partials/footerscript.php';?>
   
   </body>
   </html>