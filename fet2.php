<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "qbl");
$columns = array('id', 'name','size','category','semester','downloads','date');

$query = "SELECT * FROM files WHERE";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (id LIKE "%'.$_POST["search"]["value"].'%" 
  OR name LIKE "%'.$_POST["search"]["value"].'%"
  OR category LIKE "%'.$_POST["search"]["value"].'%" 
  OR semester LIKE "%'.$_POST["search"]["value"].'%" )
  
 ';
}


$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["id"];
 $sub_array[] = $row["name"];
 $sub_array[] = $row["size"];
 $sub_array[] = $row["category"];
 $sub_array[] = $row["semester"];
 $sub_array[] = $row["downloads"];
 $sub_array[] = $row["date"];
 $sub_array[] = $row[""];
 
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM files";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
