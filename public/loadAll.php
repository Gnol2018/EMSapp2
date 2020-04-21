<?php
require_once("../resources/pdoConfig.php");


$stmt = $conn->prepare('SELECT patientId, patientFname, patientLname, patientAddress, patientDOB, patientPhone1
                        FROM patients');
$stmt->execute();

echo "<table id='patientTable' class='table mt-2'>";
echo "<tr>";
echo "<th>Action</th>";
echo "<th>Patient Id</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Address</th>";
echo "<th>Patient DOB:</th>";
echo "<th>Phone #1:</th>";
echo "</tr>";
foreach ($stmt as $row) {
    echo "<tr id='" .$row['patientId']. "'>";
    echo  "<td  data-id='".$row['patientId']."'" .">
    <a data-id='" . $row['patientId']. "' data-role='select' type='button' class='btn btn-primary selectPatient'>Select</a>
    </td>";
    echo "<td data-target='patientId' class='patientId'>" . $row['patientId'] . '</td>';
    echo "<td data-target='firstName'>" . $row['patientFname'] . "</td>";
    echo "<td data-target='lastName'>" . $row['patientLname'] . '</td>';
    echo "<td data-target='address'>" . $row['patientAddress'] . "</td>";
    echo "<td data-target='dob'>" . $row['patientDOB'].'</td>';
    echo "<td data-target='phone1'>" . $row['patientPhone1'] . "</td>";
    echo "</tr>";
}
echo '</table>';

?>