<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=calender', 'root', '');

$data = array();

$query = "SELECT * FROM events ORDER BY id desc";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$data = array();
foreach($result as $row)
{

 $date=date_create($row["date_time"]);
 $newcurdate = date_format($date,"Y-m-d H:i:s");
 $stringdate = strtotime($newcurdate);
 $newfiveminute = $stringdate + 300000; 


 $rowdata = array(
  'id'   => $row["id"],
  'title'   => $row["event"],
  'start'   => $row["date_time"],
  'end' => $row["description"],
 
 );
 array_push($data, $rowdata);
}

echo json_encode($data);

?>

