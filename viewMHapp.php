<?php
include 'databaseConnect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_ID = $_SESSION['studentID'];

$result = mysqli_query($conn,"SELECT * FROM APPOINTMENTS AS A WHERE A.Student_ID");
echo "<table border= '1'>
<tr> 
<th> Advisor Id</th>
<th> Appointment ID</th>
<th> Date</th>
<th> Time</th>
<th> Student ID</th>
</tr>";

while($row = mysqli_fetch_array($result)) 
{
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "</tr>";
            
}

echo"</table>";

    
mysqli_close($conn);
    
?>
<a href="appointmentsMainPg.php">Back</a>
<a href="logoutpg.php">Logout</a>