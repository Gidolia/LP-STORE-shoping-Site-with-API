<?php 
include "../database_connect.php";
	
// 			$data = file_get_contents($filename);
			
			$message = $_POST['h_desc'];
			
			
			$array = json_decode($message, true);
			
			print $message;
			
			foreach($array as $row) {
				
			$query ="INSERT INTO `all_message` (`id`, `address`, `message`, `state`, `time`, `sms_id`) VALUES (NULL, '".$row["_address"]."', '".$row["_msg"]."', '".$row["_readState"]."', '".$row["_time"]."', '".$row["_id"]."');";
				
		
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