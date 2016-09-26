<?php  include_once("header.php"); 
	   include_once("include/config.php");


?>
<style>
.pagination .custom-active {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #ddd;
    border-image: none;
    border-style: solid;
    border-width: 1px 1px 1px 0;
    float: left;
    line-height: 34px;
    padding: 0 14px;
    text-decoration: none;
}
</style>
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
            
            <div align="center" id="append-pagination">
           

</div>

            <!-- /widget-content --> 
          </div>
          </div>
          </div>

     <?php
	 
	 ?>     
         
      
												
											
													 <!-- Button to trigger modal -->
                                                   
                                                     
                                                   
                                    
                                   
											
          <?php include_once("footer.php");  ?>
		  
    
                                                   