<?php
include_once("include/config.php");

$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
 
  $statement = $db_con->prepare("select * from student   ORDER BY student_id ASC LIMIT $start_from, $limit");
   $statement->execute();
   $list = $statement->fetchAll(PDO::FETCH_ASSOC);
 // print_r($list);  
  echo json_encode($list);
  exit;
?>

                
                
               