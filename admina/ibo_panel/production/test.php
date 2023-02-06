
<table>
<tr>
    <td>c_id</td>
    <td>name</td>
    <td>mobile</td>
    <td>password</td>
    <td>email</td>
    <td>addreass</td>
    <td>cityl</td>
    <td>state</td>
    <td>dob</td>
    
  </tr>
<?php 
     include "config.php";
     $rs=1;
     $rr="SELECT * FROM `costumer` WHERE `password`='123' && `check`='1'";
     $r=$con->query($rr);
     while($s=$r->fetch_assoc()){ 
    ?>
           <tr><td> <?php echo $s['c_id'] ?></td>
           <td><?php echo $s['name'] ?> </td>
           <td><?php echo $s['mobile'] ?></td>
           <td><?php echo $s['password'] ?></td>
           <td><?php echo $s['email'] ?></td>
           <td> <?php echo $s['addreass'] ?></td>
           <td><?php echo $s['city'] ?></td>
           <td><?php echo $s['state'] ?></td>
           <td><?php echo $s['dob'] ?> </td></tr>;         
                            
    <?php $rs++;
    
     } ?>
     </table>