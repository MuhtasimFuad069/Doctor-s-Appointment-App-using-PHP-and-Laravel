<?php
$link = mysqli_connect("localhost", "root", "", "Health Prediction Management"); 
  
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "UPDATE appointments list SET Date='250' WHERE patient_ID=11111"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was updated successfully."; 
} else { 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
}  
mysqli_close($link); 
?> 