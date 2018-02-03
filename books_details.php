<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>LIBRARY</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
$c=$_GET['id'];
$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
//$sq="SELECT * FROM books where id=$id";
//$result = $conn->query($sq);

?>
<body>
	<div class="container bggrey">
		<section class="menu-section">
			<div class="">
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-collapse collapse nopadding">
							<div class="logo navbar-left">
								Library
							</div>
							<ul id="menu-top" class="nav navbar-nav navbar-right">
								<li><a href="books.php">Books</a></li>
								<li><a href="authors.php">Authors</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>
		<div class="arrows"><a href="http://localhost/library/books_details.php?id=<?php $c=--$c; echo $c; ?>">	
		<button type="button" class="btn btn-default btn-lg" aria-label="Left Align" >
		<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
</button>
</a>
<?php
$c=$_GET['id'];
?>
<a href="http://localhost/library/books_details.php?id=<?php $c=++$c; echo $c; ?>">
<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
</button>
</a>
</div>
		<!-- MENU SECTION END-->
		<div class="content-wrapper">
			<div class="">
				<div class="row">
					<div class="col-md-8">
						<h4 class="page-head-line" style="text-transform:none"><span style="color:blue;float:left;">Books &nbsp;</span> / Details</h4>
						<div class="panel">
                        
                        <div class="panel-body">
						
                            <div class="table-responsive">
                                <table class="table table-noborder">
                                    <tbody>
									<?php
							$c=$_GET["id"]; 
							$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
									
							$sql="select books.name as bname,books.id as bid ,authors.name as aname,books.description,books.isbn from books,authors where books.author=authors.id" ;
							$result=$conn->query($sql);
									
									if ($result->num_rows>0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {
											if($row["bid"]==$c)			{	
									?>
                                        <tr>
                                            <td width="12%"><img src="assets/img/book.png"></td>
                                            <td style="color:#47494f"><div class="name"><strong><?php echo $row["bname"];?></strong></div><div class="author">by <strong><?php echo $row["aname"];?></strong></div>
											
											</td>
                                            <td align="right" style="color:#777982;">ISBN-<?php echo $row["isbn"];?></td>
                 
                                        </tr>
										<tr>
											<td width="12%"></td>
											<td colspan="2"><div class="desc"><?php echo $row["description"];?></div></td>
										</tr>
									<?php }}}
									$conn->close();
									?>
                                    </tbody>
                                </table>
                            </div>
						
                        </div>
                    </div>
					</div>
					<div class="col-md-4">
						<div class="btnclass">
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- CONTENT-WRAPPER SECTION END-->
		
	</div>
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
