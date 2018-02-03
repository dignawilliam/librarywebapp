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
								<li><a class="menu-top-active" href="books.php">Books</a></li>
								<li><a href="authors.php">Authors</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- MENU SECTION END-->
		<div class="content-wrapper">
			<div class="">
				<div class="row">
					<div class="col-md-8">
						<h4 class="page-head-line">Books <span><?php echo countid();?> &nbsp; Books</span></h4>
						<div class="panel">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
									<?php
									$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
									
									$sq="SELECT authors.name as aname,books.id,books.name,books.isbn,books.author,books.description FROM books,authors where authors.id=books.author";
									
									$result=$conn->query($sq);
									
									
									if($result) {
										// output data of each row
										while($row = $result->fetch_array() ) { 
										//$k=$row["authors.name"];
										$idd=$row["id"];
										?>
											
                                        <tr>
                                            <td width="12%"> <a href="http://localhost/library/books_details.php?id=<?php echo $idd?>"><img src="assets/img/book.png" > </a></td> 
                                            <td style="color:#47494f"><div class="name"><strong>
											<?php echo $row["name"]; ?>
											</strong></div><div class="author">by <strong> <?php echo $row["aname"]; ?> </strong></div>
											<div class="desc"><?php echo substr( $row["description"],0,200); ?>....... <a href="books_details.php?id=<?php echo $row['id']; ?>">More</a></div>
											</td>
                                            <td align="right" style="color:#777982;"><?php echo $row["isbn"]; ?></td>
                 
                                        </tr>
									<!--	<tr>
                                            <td width="12%"><img src="assets/img/book.png"></td>
                                            <td style="color:#47494f"><div class="name"><strong>Do Androids Dream of Electric Sheep?</strong></div><div class="author">by <strong>Philip K Dick</strong></div>
											<div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting.... <a>More</a></div>
											</td>
                                            <td align="right" style="color:#777982;">ISBN-9348-8459-546-78</td>
                 
                                        </tr>-->
									<?php }}
									$conn->close();?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					</div>
					<div class="col-md-4">
						<div class="btnclass">
							<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Book</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- CONTENT-WRAPPER SECTION END-->
		<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Add Book</h4>
					</div>
					<div class="modal-body">
						<form method="POST" >
						  <div class="form-group">
							<label for="exampleInputEmail1">Book Name</label>
							<input class="form-control" required name="name" id="exampleInputEmail1" placeholder="Book name" type="text">
						  </div>
						  <div class="form-group" >
							
							<label>Author</label>
							<select class="form-control" required placeholder="Select Author" name="author">
							<option value="">select</option>
							<?php
								
									$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
									$sql="SELECT * FROM authors";
									$result=$conn->query($sql);
									if ($result->num_rows>0) {
										// output data of each row
										while($row = $result->fetch_assoc()) {  
										$w=$row["id"];
										?>
										
										<option value="<?php echo $w; ?>" >
										<?php 
										echo $row["name"];
										?> </option>
										
										<?php
										}
								}
								
							?>
								
								
							</select>
							
						  </div>
						  <div class="form-group">
							<label>ISBN Number</label>
							<input class="form-control"  required name="isbn" id="exampleInputIsbn" placeholder="ISBN Number" type="text">
						  </div>
						  <div class="form-group">
							<label>Description of content</label>
							<textarea class="form-control" required name="description" id="exampleInputDescription" placeholder="Description of content" ></textarea>
						  </div>
						<!--</form>-->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
						<input type="submit" class="btn btn-primary btn-lg" name="addbook" value="Save Book">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

<?php
					function countid(){

									$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
									 $sql = "SELECT COUNT(id) as w FROM books"; 
									 $result = $conn->query($sql);
									$data=$result->fetch_assoc();
									return $data['w'];
									$conn->close();
					}
									 
									 ?>


<?php  
$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
/*$isbn=" ";
	$name=" ";
	$author=" ";
	$description=" "; */
if(isset($_POST['addbook'])){
	
	$isbn=$_POST['isbn'];
	$name=$_POST['name'];
	$author=$_POST['author'];
	$n=intval($author);
	$description=mysqli_real_escape_string($conn,$_POST['description']);
	$sql= "INSERT INTO books (`isbn`,`name`,`author`,`description` )VALUES('$isbn','$name',$n,'$description')";

    
	if ($conn->query($sql) == TRUE) {
		echo "echo hello";
		echo "<meta http-equiv='refresh' content='0'>";
    //echo "New record created successfully";
	//header("location:http://localhost/library/books.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}



$conn->close();
?>
 
