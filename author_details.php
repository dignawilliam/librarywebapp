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
<body>
<?php
									$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
									$a=$_GET["id"]; ?>
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
		<div class="arrows"><a href="http://localhost/library/author_details.php?id=<?php $a=--$a; echo $a; ?>">		
		<button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
	
  <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
</button></a><?php
$a=$_GET["id"];?>
<a href="http://localhost/library/author_details.php?id=<?php $a=++$a; echo $a; ?>">	
<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
</button></a>
</div>
		<!-- MENU SECTION END-->
		<div class="content-wrapper">
			<div class="">
				<div class="row">
					<div class="col-md-8">
						<h4 class="page-head-line" style="text-transform:none"><span style="color:blue;float:left;">Authors &nbsp;</span> / Details</h4>
						<div class="panel">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-noborder">
                                    <tbody>
									<?php
									$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
									$atid=$_GET["id"];
									
									$sql="SELECT * FROM authors where id=$atid";
									$result = $conn->query($sql);
									$ar=$result->fetch_assoc();
									
									
									if ($result->num_rows>0  ) {?>
										 <tr>
                                            <td width="12%"><img src="assets/img/pen.png"></td>
                                            <td style="color:#47494f"><div class="name"><?php echo $ar["name"]; ?></div><div class="age">Age&nbsp;<?php echo $ar["age"]; ?>/<?php echo $ar["gender"]; ?></div>
											<div><?php echo $ar["about"]; ?></div>
											</td>
                                            <td align="right" style="color:#777982;">Born in&nbsp;<?php echo $ar["born_in"]; ?></td>
                 
                                        </tr>
										<tr>
                                            <td width="12%"></td>
											<?php
											$sqlc="SELECT *  FROM books WHERE author=$atid";
											$res=$conn->query($sqlc);
											$c= $res->num_rows;
											//print_r($res);
											
											?>
											<td colspan="2">BOOKS WRITTEN <?php echo $c ?></td>
                                        </tr>
										 <tr>
                                            <td width="12%"></td>
											<td colspan="2">
												<table class="table table-hover">
													
									<?php }
									//$sq="SELECT authors.name as aname ,book.name as bname,book.author as bid,book.description,book.isbn FROM books left join authors on authors.id=books.author where authors.id=$atid";
									$sq="SELECT books.id as bid,books.name as bname,books.isbn,books.description,books.author,authors.id as aid,authors.name as aname,authors.about,
authors.gender,authors.born_in,authors.age	FROM authors left join books on authors.id=books.author where authors.id=$atid";
									$res=$conn->query($sq);
									if($res->num_rows>0)
									{
										//echo "yesssssssssss";
									while($rows =$res->fetch_assoc() ) { 
									?>
										
										
									<!--	<tr>
                                            <td width="12%"></td>
											<td colspan="2">
												<table class="table table-hover">
													<tbody>-->
													<tbody>
														<tr>
															<td width="12%"><img src="assets/img/book.png"></td>
															<td style="color:#47494f"><div class="name"><strong><?php echo $rows["bname"]; ?></strong></div><div class="author">by <strong><?php echo $rows["aname"]; ?></strong></div>
															<div class="desc"><?php  echo substr( $rows["description"],0,200); ?>.... <a href="books_details.php?id=<?php echo $rows["bid"] ?>">More</a></div>
															</td>
															<td align="right" style="color:#777982;">ISBN- <?php echo $rows["isbn"]; ?></td>
								 
														</tr>
									<?php } } ?>
														<!--<tr>
															<td width="12%"><img src="assets/img/book.png"></td>
															<td style="color:#47494f"><div class="name"><strong>Do Androids Dream of Electric Sheep?</strong></div><div class="author">by <strong>Philip K Dick</strong></div>
															<div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting.... <a>More</a></div>
															</td>
															<td align="right" style="color:#777982;">ISBN-9348-8459-546-78</td>
								 
														</tr>-->
														
													</tbody>
												</table>
											</td>
                                        </tr>
									</tbody><?php  $conn->close(); ?>
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

