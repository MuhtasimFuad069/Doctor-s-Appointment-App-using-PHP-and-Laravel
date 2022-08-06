<?php  
$link = mysqli_connect("localhost", "root", "", "library management"); 
  
if ($link == false) { 
    die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 
  
$sql = "SELECT First_name,Last_name,Age FROM student";
if ($result = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($result) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>First_name</th>"; 
        echo "<th>Last_name</th>"; 
        echo "<th>Age</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($result)) { 
            echo "<tr>"; 
            echo "<td>".$row['First_name']."</td>"; 
            echo "<td>".$row['Last_name']."</td>"; 
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