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
								<li><a href="books.php">Books</a></li>
								<li><a class="menu-top-active" href="authors.php">Authors</a></li>
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
					
									
						<h4 class="page-head-line">Authors <span><?php echo countid();?> &nbsp;Authors</span></h4>
						<div class="panel">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
									<?php
									$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
									
									$sq="SELECT id,name,age,gender,born_in,about FROM authors";
									$result = $conn->query($sq);
									
									if ($result->num_rows>0) {
										// output data of each row
										while($row = $result->fetch_assoc()) { 
										$idd =$row["id"];
										?>

                                        <tr>
                                            <td width="12%"><a href="http://localhost/library/author_details.php?id=<?php echo $idd?>"><img src="assets/img/pen.png"></a></td>
                                            <td style="color:#47494f"><div class="name"><?php  echo  $row["name"]?></div><div class="age"><?php  echo  $row["age"]?>/<?php  echo  $row["gender"]?></div></td>
                                            <td align="right" style="color:#777982;">Born in &nbsp; <?php  echo  $row["born_in"]?></td>
                 
                                        </tr>
									<?php } } 
									$conn->close();
									?>
										<!--<tr>
                                            <td width="12%"><img src="assets/img/pen.png"></td>
                                            <td style="color:#47494f"><div class="name">Robert Rankin</div><div class="age">Age 45/Male</div></td>
                                            <td align="right" style="color:#777982;">Born in India</td>
                 
                                        </tr> -->
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					</div>
					<div class="col-md-4">
						<div class="btnclass">
							<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Author</a>
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
						<h4 class="modal-title" id="myModalLabel">Add Author</h4>
					</div>
					<div class="modal-body">
						<form method="POST">
						  <div class="form-group">
							<label for="exampleInputEmail1">Author Name</label>
							<input class="form-control" required name="name" id="exampleInputEmail1" placeholder="Author name" type="text">
						  </div>
						  <div class="form-group" >
							<div class="col-md-6">
								<label></label>
								<input class="form-control" required name="age" id="exampleInputAge" placeholder="Age" type="text">
							</div>
							<div class="col-md-6">
								<label></label>
								<select class="form-control" required placeholder="Gender"  name="gender">
									<option value="">Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						  </div>
						  <div class="form-group">
							<label></label>
							<input class="form-control" name="born_in" required id="exampleInputBorn1" placeholder="Born in" type="text">
						  </div>
						  <div class="form-group">
							<label></label>
							<textarea class="form-control" name="about_author" required id="exampleInputAuthor1" placeholder="About Author" ></textarea>
						  </div>
						<!--</form> -->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
						<input type="submit" name="addauthor" class="btn btn-primary btn-lg" value="Add Author">
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
									 $sql = "SELECT COUNT(id) as w FROM authors"; 
									 $result = $conn->query($sql);
									$data=$result->fetch_assoc();
										return $data['w'];
										$conn->close();
					}
									 
									 ?>

<?php
$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
$name=" ";
$age=" ";
$gender=" ";
$born=" ";
$about=" ";

if(isset($_POST['addauthor'])){
	$conn = new mysqli("localhost", "root", "", "library") or die("error in dbconnection"); 
$name=$_POST['name'];
$age=intval($_POST['age']);
$gender=$_POST['gender'];
$born=$_POST['born_in'];
$about=mysqli_real_escape_string($conn,$_POST['about_author']);
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO authors (name,age, born_in, about,gender)VALUES ('$name', $age, '$born','$about','$gender')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
	echo "<meta http-equiv='refresh' content='0'>";
}
$conn->close();
?>
