<?php

$name = $_POST['PassSearch'];
$db = mysqli_connect('localhost', 'root', '', 'autoassit');
$sql = "SELECT * FROM `detail` INNER JOIN user on detail.nic=user.user_id WHERE active=1 AND detail.nic in (SELECT nic FROM section WHERE section.section='Sparepart_center'  AND acceptorreject='1') AND name like '" . $name . "%'";
$result = mysqli_query($db, $sql);


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (!empty($name)) {
    if (!empty($result)) {
        echo "<div align='center' class='w3-light-gray'><h3>Sparepart Center Details Viewer</h3>";
        echo "<table border='1'>
        <tr>
                <th >Name</th>
                <th >Email</th>		
		<th >Address</th>
                <th></th>
        </tr>";

//if($name=$row['customer_name']){
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
             echo "<td><a href='../AutoAssit/calendar/index.php'>Shedule</a></td>";
            echo "</tr>";
        }//reference_no, customer_name, telephone, email, address 
        echo "</table>";
    }else {
    echo '     <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-2 sidenav">

            </div>
            
					<h3>Error !</h3>
					<p>Can not find a similar word!
					</p>
					<br>
					</div>
				</div>
			</div>';
    }
} else {
    echo ' <div class="col-md-12">
				<div align="center">
					
					<h3 class="text-center"></h3>
					<p class="text-center">Please Enter the Value!
					<br>
					 
					</p>
					<br>
					
				</div>
			</div>
';
}
?>
