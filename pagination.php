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

                
                
                <?php
				foreach($list as $col)
				{
				  ?>
                  <tr id="row_num_<?php echo $col['student_id'];   ?>">
                    <td> <?php echo $col['first_name'];  ?> </td>
                    <td> <?php echo $col['last_name'];  ?> </td>
                     <td> <?php echo $col['user_name'];  ?> </td>
                      <td> <?php echo $col['email'];  ?> </td>
                    <td class="td-actions"><a class="btn btn-small btn-success" href="editStudent.php?student_id=<?php echo $col['student_id'];   ?>"><i class="icon-large icon-edit"> </i></a><a class="btn btn-danger btn-small" onClick="getStudentId(<?php echo $col['student_id'];   ?>)"   href="javascript:void(0)"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
             
                  
                  <?php } ?>
                   
                
               
             