<?php
include('partials/db.php');
global $connect;
$sql = "SELECT * from `registration`";
$result = $connect->query($sql);

$items = array();

//Store table records into an array
while( $row = $result->fetch_assoc() ) {
$items[] = $row;
}
//Check the export button is pressed or not
if(isset($_POST["export"])) {
//Define the filename with current date
$fileName = "itemdata-".date('d-m-Y').".xls";

//Set header information to export data in excel format
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$fileName);

//Set variable to false for heading
$heading = false;

//Add the MySQL table data to excel file
if(!empty($items)) {
foreach($items as $item) {
if(!$heading) {
echo implode("\t", array_keys($item)) . "\n";
$heading = true;
}
echo implode("\t", array_values($item)) . "\n";
}
}
exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Export database file in to Microsoft Excel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet"
 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<center><br/><br/><h2
 style='color:green'>customer Information</h2></center>
<div class="col-sm-12">
<div>
<form action="#" method="post">
<button type="submit" id="export" name="export"
 value="Export to excel" class="btn btn-success">Export To Excel</button>
 <a href="customer_manage_reception" class="btn btn-primary" value="Go Back">Go Back</a>
</form>
</div>
</div>
<br/>
<table id="" class="table table-striped table-bordered">
<tr class="bg-success">
<th>C_ID</th>
<th>First Name</th>
<th>father name</th>
<th>grand father name</th>
<th>mobail number</th>
<th>gender</th>
<th>age</th>
<th>birth place</th>
<th>marital status</th>
<th>occupation </th>
<th>employment type</th>
<th>kebele Id</th>
<th>job seeker id</th>
<th>current address</th>
<th>permanent address</th>
<th>education level</th>
<th>exprience level</th>
<th>experience year</th>

<th>Religion</th>
<th>Language</th>

<th>Mother Name</th>
<th>Father Occupation</th>
<th>Mother Occupation</th>
<th>Family relation</th>
<th>Number of Sister and Brother</th>
<th>Brother Marriage Status</th>
<th>Brother Wife Occupation</th>
<th>Sister Marriage Status</th>
<th>Sister Husband Occupation</th>

<th>registration date</th>

</tr>
<tbody>
<?php foreach($items as $item) { 

    $c_address=explode(',',$item['current_address']);
    // language
    $language = explode(',',$item['language']);
    // familly detail
    $mother_name = explode(',',$item['mother_name']);
    $mother_job = explode(',',$item['mother_occupation']);
    $father_job = explode(',',$item['father_occupation']);
    // sibbling
    $sibbling = explode(',',$item['sibbling_detail']);
    
    ?>
<tr>
<td><?php echo $item ['c_id']; ?></td>
<td><?php echo $item ['f_name']; ?></td>
<td><?php echo $item ['m_name']; ?></td>
<td><?php echo $item ['l_name']; ?></td>
<td><?php echo $item ['c_mobile']; ?></td>
<td><?php echo $item ['gender']; ?></td>
<td><?php echo $item ['age']; ?></td>
<td><?php echo $item ['birth_place']; ?></td>
<td><?php echo $item ['martial_status']; ?></td>
<td><?php echo $item ['occupation']; ?></td>
<td><?php echo $item ['employment_type']; ?></td>
<td><?php echo $item ['c_id']; ?></td>
<td><?php echo $item ['job_seeker_id']; ?></td>
<td><?php echo $item ['current_address']; ?></td>
<td><?php echo $item ['permanent_address']; ?></td>
<td><?php echo $item ['education_level']; ?></td>
<td><?php echo $item ['exprience_level']; ?></td>
<td><?php echo $item ['exprience_year']; ?></td>

<td><?php echo $item ['religion']; ?></td>
<td><?php echo $item ['language']; ?></td>
<td><?php echo $mother_name[0]." ".$mother_name[1]; ?></td>
<td><?php echo $item ['father_occupation']; ?></td>
<td><?php echo $item ['mother_occupation']; ?></td>
<td><?php echo $item ['family_relation']; ?></td>
<td><?php echo $sibbling[1]." Brother and ".$sibbling[2]." Sister"; ?></td>
<td><?php echo $sibbling[3]; ?></td>
<td><?php echo $sibbling[4]; ?></td>
<td><?php echo $sibbling[5]; ?></td>
<td><?php echo $sibbling[6]; ?></td>


<td><?php echo $item ['created']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>


</body>