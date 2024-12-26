<?php 
include("php/config.php");
include("php/code.php");

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap-rtl.min.css">
	<link rel="stylesheet" href="css/bootstrap-rtl.css">
	<link type="text/css" href="css/style.css" rel="stylesheet" />

</head>
<body>
<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table100">
			<div class="container">
			
				<?php

				
					if(isset($_SESSION['insert2'])){
							echo $_SESSION['insert2'];
						unset($_SESSION['insert2']);
					}
					if(isset($_SESSION['delete1'])){
						echo $_SESSION['delete1'];
					unset($_SESSION['delete1']);
				}
                if (isset($_SESSION['delete2'])) {
                    echo $_SESSION['delete2'];
                    unset($_SESSION['delete2']);
                }
				if (isset($_SESSION['edit1'])) {
                    echo $_SESSION['edit1'];
                    unset($_SESSION['edit1']);
                }
				if (isset($_SESSION['edit2'])) {
                    echo $_SESSION['edit2'];
                    unset($_SESSION['edit2']);
                }

				?>


			<form method="post" action="php/exe.php">
	<table>
	<tr>
                         <th> 
							<a href="insert.php">ثبت محصول</a>
						    </div> </th> 

							<th> 
							<a href="search.php">جستجو محصول</a>
						    </th>
						

							<th> 
							<input type="submit" name="box" value="حذف محصول">
						    </th> 

							<th> 
						<input type="submit" name="boxx" value="ویرایش محصول">
						     </th> 
						
							
							
					
						</tr >
						

                         </table>
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
				
				$selects=select();				
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
		?>
					<!-- end table's body -->
					</tbody>
			
					
				</table>
				</form>
				
				</div> 	
					</div>
					</div>
					</div>
					
					<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
