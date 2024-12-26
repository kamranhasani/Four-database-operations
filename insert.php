<?php
include("php/config.php");
include("php/code.php");
$token=md5(uniqid(rand(),true));
$_SESSION['token']=$token;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>فرم ثبت  </title>
	<link type="text/css" href="css/bootstrap-rtl.min.css" rel="stylesheet">
	<link type="text/css" href="css/bootstrap-rtl.css" rel="stylesheet">
	<link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="css/style.css" rel="stylesheet" />
</head>
<body dir="rtl">
<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table100">
			<div class="container">
<br/>
<br/>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
			<?php 
			if(isset($_SESSION['insert1'])){
				echo $_SESSION['insert1'];
				unset($_SESSION['insert1']);
			}
					?>
					<h3 >فرم ثبت</h3>
				
				
				<div class="card-body">
				
					<form  method="post"  action="php/exe.php" >
					

						<div class="input-group form-group">
							<div class="input-group-prepend">
								
							</div>
						
								
							</div>
							<input type="name" class="form-control"  placeholder="نام محصول" name="name"  id="name">
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								
							</div>
							<input type="data" class="form-control"  placeholder="تاریخ" name="data"  id="data">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								
							</div>
							<input type="prise" class="form-control"  placeholder="قیمت" name="prise"  id="prise">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
							
							</div>
							<input type="number" class="form-control"  placeholder="تعداد" name="number"  id="number">
						</div>
						
						
					
							<div>
							<input type="hidden"   name="token" id="token" value="<?php echo $token ; ?>"/>
						</div>



						<div class="form-group">
							<input type="submit" value="ثبت محصول" class="btn float-right login_btn" name="sub" id="sub">
						</div>
						<div class="card-body" >
							<a href="index.php">صحفه اصلی</a>
					</div>

					</form>
				</div>
				
			</div>
		</div>
	</div>

</div> 	
					</div>
					</div>
					</div>
				</div>


	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
