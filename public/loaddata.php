<?php
require_once("../resources/pdoConfig.php");

$patientFname = ($_POST['patientFname']);


$stmt = $conn->prepare('SELECT patientId, patientFname, patientLname, patientAddress, patientPhone1, patientPhone2
                        FROM patients 
                        WHERE patientFname = ?');
$stmt->execute([$patientFname]);

echo "<table class='table mt-2'>";
echo "<tr>";
echo "<th>Patient Id</th>";
echo "<th>Patient First Name</th>";
echo "<th>Patient Last Name</th>";
echo "<th>Patient Address</th>";
echo "<th>Phone #1:</th>";
echo "<th>Phone #2:</th>";
echo "</tr>";
foreach ($stmt as $row) {
    echo "<tr class='selectRow'>";
    echo "<td" . $row['patientId'] . "</td>";
    echo '<td>' . $row['patientFname'] . "</td>";
    echo '<td>' . $row['patientLname'] . "</td>";
    echo '<td>' . $row['patientAddress'] . "</td>";
    echo '<td>' . $row['patientPhone1'].'</td>';
    echo '<td>' . $row['patientPhone2'] . "</td>";
    echo "</tr>";
}
echo '</table>';

?>