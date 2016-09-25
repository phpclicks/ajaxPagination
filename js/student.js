$(function()
{
	$('#addStudent').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=addStudent',$('#add-student-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "index.php";
				 },4000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});
	
	
	
	$('#editStudent').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=editStudent',$('#edit-student-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "index.php";
				 },4000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});
	
	
	
	
	
			$.post("pagination.php?page=1", function(data) {
			var htm = "";
			var resp = jQuery.parseJSON(data);
			if(resp.length>0)
			{
				for(var i = 0 ; i<resp.length ; i++) {
					var sid =  resp[i]['student_id'];
			 htm  +='<tr id="row_num_'+sid+'">';
			 htm  +='<td>'+resp[i]['first_name']+'</td>';
			 htm  +='<td>'+resp[i]['last_name']+'</td>';
			 htm  +='<td>'+resp[i]['user_name']+'</td>';
			 htm  +='<td>'+resp[i]['email']+'</td>';
			 htm  +='<td class="td-actions"><a class="btn btn-small btn-success" href="editStudent.php?student_id='+sid+'"><i class="icon-large icon-edit"> </i></a><a class="btn btn-danger btn-small" onClick="getStudentId('+sid+')"   href="javascript:void(0)"><i class="btn-icon-only icon-remove"> </i></a></td>';
				}
				
			}
			else
			{
			 htm  +='<td></td>';
			 htm  +='<td colspan="3"> No record Found</td>';
			 htm  +='<td></td>';
			
			}
			jQuery("#target-content").html(htm);

});

    jQuery("#pagination li").live('click',function(e){
    e.preventDefault();
        jQuery("#target-content").html('loading...');
        jQuery("#pagination li").removeClass('active');
        jQuery(this).addClass('active');
        var pageNum = this.id;
		
		$.post("pagination.php?page=" + pageNum, function(data) {
			var htm = "";
			var resp = jQuery.parseJSON(data);
			if(resp.length>0)
			{
				for(var i = 0 ; i<resp.length ; i++) {
					var sid =  resp[i]['student_id'];
			 htm  +=' <tr id="row_num_'+sid+'">';
			 htm  +='<td>'+resp[i]['first_name']+'</td>';
			 htm  +='<td>'+resp[i]['last_name']+'</td>';
			 htm  +='<td>'+resp[i]['user_name']+'</td>';
			 htm  +='<td>'+resp[i]['email']+'</td>';
			 htm  +='<td class="td-actions"><a class="btn btn-small btn-success" href="editStudent.php?student_id='+sid+'"><i class="icon-large icon-edit"> </i></a><a class="btn btn-danger btn-small" onClick="getStudentId('+sid+')"   href="javascript:void(0)"><i class="btn-icon-only icon-remove"> </i></a></td>';
				}
				
			}
			else
			{
			 htm  +='<td></td>';
			 htm  +='<td colspan="3"> No record Found</td>';
			 htm  +='<td></td>';
			
			}
			jQuery("#target-content").html(htm);
			
});

       
    });
});


function getStudentId(student_id)
{
	var result = confirm("Want to delete record?");
	var student_id = "student_id="+student_id;
    if (result) {
		
		$.post('include/process.php?action=deleteStudent',student_id,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+student_id).html('');
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
			}
			else
			{
				$("#error-msg").html(htm);
				$("#error-msg").show();	
			}
		},'json');
    }	
}

