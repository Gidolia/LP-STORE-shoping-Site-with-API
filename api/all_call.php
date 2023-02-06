<?php 
include "../database_connect.php";
	
// 			$data = file_get_contents($filename);
			
			$message = $_POST['h_desc'];
		
			$array = json_decode($message, true);
			
			print $message;
			
			foreach($array as $row) {
			    
			$query ="INSERT INTO `all_call` (`id`, `name`, `mobile`, `type`, `date`, `second`) 
			VALUES (NULL, '".$row["name"]."', '".$row["mobile"]."', '".$row["type"]."', 
			'".$row["date"]."', '".$row["second"]."');";
				
				
			 $dd=$con->query($query);
			 
			}

			
		 if($dd===TRUE )
        {
            $response['message']="Information Send Successfully... Our Team Contact You Soon... ";
        }
        else{
             $response['message']="Failed ! Please Try Again";
        }
    
    
   echo (json_encode($response));
    

	?>