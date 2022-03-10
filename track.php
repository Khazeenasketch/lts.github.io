
<?php


$conn = new mysqli('localhost', 'root', '', 'lts_db') or die(mysqli_error());

 $parcel_id= isset($_GET['submit']) ? $_GET['parcel_id']: '';

 //$sql="SELECT * FROM parcels WHERE parcel_id = '$parcel_id' ";

 $sql="SELECT * FROM parcels WHERE parcel_id = ANY (SELECT parcel_id FROM parcels);";
  
  $result = $conn->query($sql);
  if($result){
    if ($result->num_rows > 0) {
    // output data of each row
    
    $row = $result->fetch_assoc()
?>

<table style="border-collapse: collapse;margin-left:10px;margin-right:10px ;border 1px solid black ">
<tr>
               <th>Parcel ID</th>
               <th >Sender Name</th>
               <th>Sender Address</th>
               <th >Reciever Name</th>
               <th>Reciever Phone</th>
               <th >Reciever Address</th>
               <th>Courier</th> 
               <th>Parcel Weight</th>
               <th> Status</th>
    </tr>

    <tr >
    <td><?php echo $row["parcel_id"]; ?></td>
    <td><?php echo$row["sen_name"];?></td>
    <td><?php echo $row["sen_adress"];?></td>
    <td><?php echo$row["rec_name"];?></td>
    <td><?php echo$row["rec_phone"];?></td>
    <td><?php echo $row["rec_adress"];?></td>
    <td><?php echo$row["dp_name"] ;?></td>
    <td><?php echo$row["weights"];?></td>
    <td><?php echo $row["statuss"];?></td>
    
  
    </tr>
    </table>
    <?php
    }
    echo "</table>";
    }
     else 
      echo " No results";
      echo mysqli_error($conn);
     
    $conn->close();
    ?>
    

