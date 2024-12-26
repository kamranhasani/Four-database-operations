<?php 
include("php/code.php");
include("php/config.php");
$token=md5(uniqid(rand(),true));
$_SESSION['token']=$token;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>فرم   </title>
	<link type="text/css" href="css/bootstrap-rtl.min.css" rel="stylesheet">
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
	

			<div class="card">
				
				<div class="card-header">
			<?php
			if(isset($_SESSION['search1'])){
				echo $_SESSION['search1'];
				unset($_SESSION['search1']);
			}else{
				if(isset($_SESSION['search2'])){
					echo $_SESSION['search2'];
					unset($_SESSION['search2']);
			}}

			?>
					
					<h3 >فرم جستجو</h3>
				
				
				<div class="card-body">
				
					<form  method="post"    action="php/exe.php" >
						<div class="input-group form-group">
							<div class="input-group-prepend">
								
							</div>
							<input type="name" class="form-control"  placeholder="شماره محصول" name="name" id="name">
						</div>

						
					
							<div>
							<input type="hidden"   name="token" id="token" value="<?php echo $token ; ?>"/>
						</div>



						<div class="form-group">
							<input type="submit" value="جستجو محصول" class="btn float-right login_btn" name="sec" id="sec">
						</div>
						<div class="card-body" >
							<a href="index.php">صحفه اصلی</a>
					</div>

					</form>
				</div>
				
			</div>
		</div>
	</div>
	<br/>
	<table>		
	
				<thead>
				<!-- start table's head. for xs view we write the headers in the style.css-->
				<tr class="table100-head">
				<th class="column2">شماره</th>
				<th class="column3">نام محصول</th>
				<th class="column1">تاریخ</th>						
				<th class="column4">قیمت</th>
				<th class="column5">تعداد</th>
					
					<th class="column6">انتخاب</th>
				</tr>
				<!-- end table's head -->
				</thead>

				<?php
            if (isset($_SESSION['name'])) {
                $name= $_SESSION['name'];
                $selects=selectsr($name);           
               if ($selects) {
                    $rows=$selects->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($rows as $row) {                      
                     ?>							
				<tbody>
				<!-- start table's body -->
				
				<tr>
				<td class="column2"><?php echo $row['id']; ?></td>
				<td class="column3"><?php echo $row['name']; ?></td>
				<td class="column1"><?php echo $row['data']; ?></td>			
				<td class="column4"><?php echo $row['prise']; ?></td>
				<td class="column5"><?php echo $row['number']; ?></td>
					
					<td><input type="checkbox" name="list" value="<?php echo $row['id']; ?>"> </td>
				</tr>
				<?php
                }
            }
			unset($_SESSION['name']);
                }
			
	?>
				<!-- end table's body -->
				</tbody>			
			</table>		
			</div> 	
					</div>
					</div>
					</div> </div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

	
				
		
				
			