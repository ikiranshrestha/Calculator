<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1" >
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	
<div>
	<div>
		<div class="col-md-3 ">
			<div class="calcBody">
				<form name="form" >
					<input type="text" name="screen"  class="screen form-control" disabled>
				
							<table class="table">
								<tbody>
									<tr>
										<th><input type="button" class="button" value="Clr" onclick="Clrscn()"></th>
										<th><input type="button" class="button" value="Fire" onclick="back()" disabled></th>
										<th><input type="button" class="button" value="/" onclick="insert('/');" ></th>
										<th><input type="button" class="button" value="*" onclick="insert('*');" ></th>

									</tr>
								
								
									<tr>
										<th><input type="button" class="button"  value="7" onclick="insert(7);"></th>
										<th><input type="button" class="button" value="8" onclick="insert(8);" ></th>
										<th><input type="button" class="button" value="9" onclick="insert(9);" ></th>
										<th><input type="button" class="button" value="-" onclick="insert('-');" ></th>

									</tr>
									<tr>
										<th><input type="button" class="button" value="4" onclick="insert(4);" ></th>
										<th><input type="button" class="button" value="5" onclick="insert(5);" ></th>
										<th><input type="button" class="button" value="6" onclick="insert(6);" ></th>
										<th><input type="button" class="button" value="+" onclick="insert('+');" ></th>

									</tr>
									<tr>
										<th><input type="button" class="button" value="1" onclick="insert(1);" ></th>
										<th><input type="button" class="button" value="2" onclick="insert(2);" ></th>
										<th><input type="button" class="button" value="3" onclick="insert(3);" ></th>
										<th rowspan="2" ><input style="height: 106px; background: orangered" type="button"
                                                                class="button" value="=" onclick="equals();" ></th>
										
									</tr>
									<tr>
										<th colspan="2"><input style="width: 128px;" type="button" class="button" value="0" onclick="insert(0);" ></th>
										
										<th><input type="button" class="button" value="." onclick="insert('.');" ></th>
										
										
									</tr>
								</tbody>
							</table>
				        </form>
			        </div>
		        </div>
	    </div>
</div>



<script src="js/custom.js"></script>
</body>
</html>