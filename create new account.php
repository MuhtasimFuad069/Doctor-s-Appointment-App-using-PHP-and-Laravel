<?php  
$link = mysqli_connect("localhost", "root", "", " Smart Health Prediction "); 
  
if ($link == false) { 
    die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 
  
$sql = "SELECT Gmail ID FROM Patient";
if ($result = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($result) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Gmail ID</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($result)) { 
            echo "<tr>"; 
            echo "<td>".$row['Gmail ID']."</td>"; 
            echo "</tr>"; 
        } 
		echo "Account Created Successfully";
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link); 
} 
mysqli_close($link); 
?> 
