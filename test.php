
<tr>
    <td>id Name</td>
    <td>c_id Name</td>
  </tr>
<?php 
    include "database_connect.php";
     $rs=1;
     $rr="SELECT * FROM `category` WHERE `id`='1' && `c_id`='1'";
     //echo $rr;
     $r=$con->query($rr);
     
     while($s=$r->fetch_assoc()){ ?>
           echo '<tr><td>' . <?php echo $id ?>. '</td><td>' . <?php echo $c_id ?> . '</td></tr>';         
                            
                        
    <?php $rs++;
     } ?>