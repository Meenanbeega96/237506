<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=calender', 'root', '');

if(isset($_POST["event"]))
{
 $query = "
 INSERT INTO events 
 (event, date_time, description) 
 VALUES (:event, :date_time, :description)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':event'  => $_POST['title'],
   ':date_time' => $_POST['start'],
   ':description' => $_POST['end']
  )
 );
}


?>
