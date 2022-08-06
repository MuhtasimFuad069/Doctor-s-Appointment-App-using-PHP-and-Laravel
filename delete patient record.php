<?php
$link = mysqli_connect("localhost", "root", "", " Smart Health Prediction"); 
  
if($link === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
  
$sql = "DELETE FROM patient list WHERE patient ID=11111"; 

if(mysqli_query($link, $sql)){ 
    echo " Patient record was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
} 
mysqli_close($link); 
?> 