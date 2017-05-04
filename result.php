<!DOCTYPE html>
<html>
	<head>
		<title>Result page</title>
			<style type="text/css">
	
				.results {margin:5%;}
	
			</style>
	</head>
	 
	<body bgcolor="#F5DEB3">
		
		<form action="result.php" method="get">
			
			<span><b>Search here:</b></span>
			<input type="text" name="user_keyword" size="120" />
			<input type="submit" name="result" value="Search Now">
			
		</form>
		
	<?php
		if(isset($_GET['search'])) {
				 
			$get_value = $_GET['user_query'];
				 
				 
			echo "<div class='results'>
				$get_value;
			</div>";			
				 
		} 
			 
	?>			 		
		
	</body>
</html>