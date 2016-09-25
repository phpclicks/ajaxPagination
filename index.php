<?php  include_once("header.php"); 
	   include_once("include/config.php");
	   $statement = $db_con->prepare("select * from student where student_id > :student_id");
       $statement->execute(array(':student_id' => 0));
	    //$statement::rowCount();
	   
	   $list = $statement->fetchAll(PDO::FETCH_ASSOC);
	   
	   //include('db.php'); 
$limit = 2;
//$sql = "SELECT COUNT(id) FROM posts";  
//$rs_result = mysql_query($sql);  
//$row = mysql_fetch_row($rs_result);  
$total_records = count($list);  
$total_pages = ceil($total_records / $limit); 

	   //echo "<pre>";
	  // print_r( $list);
	  /// echo "</pre>";
	   //exit;
?>
<div class="container" style="margin-top:50px">
<div class="row">
   <div class="alert" id="error-msg">

 </div>
 
  <div class="alert alert-success" id="success-msg">

  </div>
  <br>
  <br>
 <a class="btn btn-primary" href="addStudent.php" style="float:right">Add Student</a>

<div class="widget widget-table action-table">


            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>A Table Example</h3>
             
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> First Name </th>
                    <th> Last Name</th>
                    <th> Username</th>
                    <th> Email</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody id="target-content">
                
                
                </tbody>
                 </table>
                 
                 

            </div>
            
            <div align="center">
<ul class='pagination text-center' id="pagination">
<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            if($i == 1):?>
            <li class='active'  id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
            <?php else:?>
            <li id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
        <?php endif;?>          
<?php endfor;endif;?>  
</ul>
</div>

            <!-- /widget-content --> 
          </div>
          </div>
          </div>

          
         
      
												
											
													 <!-- Button to trigger modal -->
                                                   
                                                     
                                                    <!-- Modal -->
                                                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 id="myModalLabel">Alert</h3>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p>Are you sure you want to delete record</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                                        <button class="btn btn-primary" onClick="deleteStudent()">Delete</button>
                                                      </div>
                                                    </div>
									
                                    
                                   
											
          <?php include_once("footer.php");  ?>
		  
           <script>
jQuery(document).ready(function() {
	
    });
</script>		<!-- Modal -->
                                                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 id="myModalLabel">Alert</h3>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p>Are you sure you want to delete record</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                                        <button class="btn btn-primary" onClick="deleteStudent()">Delete</button>
                                                      </div>
                                                    </div>