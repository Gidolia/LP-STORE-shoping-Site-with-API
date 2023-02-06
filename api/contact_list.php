<?php include "../database_connect.php";?>
<?php include "college_subjects.json";?>

   <!DOCTYPE html>
<html>

<head>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
	</script>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	</script>

	<style>
		.box {
			width: 750px;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-top: 100px;
		}
	</style>
</head>

<body>
	<div class="container box">
		<h3 align="center">
			Geeks for Geeks Import JSON
			data into database
		</h3><br />
		
		<?php
		
			// Server name => localhost
			// Username => root
			// Password => empty
			// Database name => test
			// Passing these 4 parameters
// 			$connect = mysqli_connect("localhost", "root", "", "test");
			
// 			$query = '';
			$table_data = '';
			
			// json file name
			$filename = "college_subjects.txt";
			$json='[{"srno":1,"name":"Gaspari Aminolast ","quantity":"2","price":"2920.0000","total_bill":5840},{"srno":2,"name":"Gaspari Amino Max ","quantity":"2","price":"2640.0000","total_bill":5280},{"srno":3,"name":"Myofusion 10Lbs","quantity":"2","price":"8400.0000","total_bill":16800}]';

			
			// Read the JSON file in PHP
			$data = file_get_contents($filename);
			
			
			// Convert the JSON String into PHP Array
			$array = json_decode($data, true);
			
			print $data;
			
			// Extracting row by row
			foreach($array as $row) {

				// Database query to insert data
				// into database Make Multiple
				// Insert Query
			$query ="INSERT INTO `test` (`id`, `name`, `gender`, `subject`) VALUES (NULL,'".$row["name"]."', '".$row["gender"]."',
				'".$row["subject"]."'); ";
				
			 $dd=$con->query($query);

				// $query .=
				// "INSERT INTO student VALUES
				// ('".$row["name"]."', '".$row["gender"]."',
				// '".$row["subject"]."'); ";
			
				$table_data .= '
				<tr>
					<td>'.$row["name"].'</td>
					<td>'.$row["gender"].'</td>
					<td>'.$row["subject"].'</td>
				</tr>
				'; // Data for display on Web page
			}
			
			
			
				echo '<h3>Inserted JSON Data</h3><br />';
				echo '
				<table class="table table-bordered">
				<tr>
					<th width="45%">Name</th>
					<th width="10%">Gender</th>
					<th width="45%">Subject</th>
				</tr>
				';
				echo $table_data;
				echo '</table>';
				
					 if($dd===TRUE )
        {
            echo "<script>alert('Your contact information has been submitted successfully.');</script>";
        }
        else{
            echo "<script>alert('Query Failed! Plz try again');</script>";
        }
			

			
		?>
		<br />
	</div>
</body>

</html>
