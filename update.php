<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=calender', 'root', '');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE events 
 SET event=event, date_time=:date_time, description=:description
 WHERE id=:id";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':event'  => $_POST['title'],
   ':date_time' => $_POST['start'],
   ':description' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>
