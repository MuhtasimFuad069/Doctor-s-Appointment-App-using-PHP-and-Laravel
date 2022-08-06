<?php  
$link = mysqli_connect("localhost", "root", "", " Smart Health Prediction "); 
  
if ($link == false) { 
    die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 
  
$sql = "SELECT Patient Name,Patient ID,Age FROM Patient";
if ($result = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($result) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Patient Name</th>"; 
        echo "<th>Patient ID</th>"; 
        echo "<th>Age</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($result)) { 
            echo "<tr>"; 
            echo "<td>".$row['Patient Name']."</td>"; 
            echo "<td>".$row['Patient ID']."</td>"; 
            echo "<td>".$row['Age']."</td>"; 
            echo "</tr>"; 
        } 
		echo "Verified Successfully";
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