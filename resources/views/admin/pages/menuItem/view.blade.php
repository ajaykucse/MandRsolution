@extends('layouts.backend.master')
@section('content')
<?php $page= 'menuItem'; ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current"><span class="icon"> <i class="icon-eye-open"></i> </span>View Menu item</a> </div>
  </div>

  <div class="container-fluid" style="padding-top: 10px;">
        @if(Session::has('flash_message_error')) 
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif
        @if(Session::has('flash_message_success')) 
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif 
    <div class="row-fluid">
      <div class="span12">
       <div style="margin-left: 1017px;"><a class="btn btn-danger btn-mini" href="{{ url('admin/menu-item')}}">Add New <i class="fas fa-plus-circle"></i></a></div>
        <div class="widget-box">
        	<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            	<h5 style="color: green;">Search :</h5>
            	<span>Menu Name :</span>
            	<div class="control-group" style="margin-left: 220px; margin-top: -21px;">
              		<div class="controls">
                		<select autocomplete="off" class="menuName" name="menu_id" style="width: 420px;">
                			<option value="0" selected>Select...</option>
                 			@foreach($menus as $menu)
                  			<option value="{{$menu->id}}">{{ $menu->name }}</option>
   				 			@endforeach
                		</select>
              		</div>
            	</div>
          	</div>
          	<div class="widget-content nopadding" >
            <table class="table table-bordered data-table">
              <thead>
                <tr class="left">
                  <th>Sl.</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="menuItem">
              	
              </tbody>
            </table>
          	</div>
        </div>
      </div>
    </div>
  </div>
</div>
<tbody>
	<tr>
		
	</tr>
</tbody>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script type="text/javascript">

$(document).ready(function(){

		$(document).on('change','.menuName',function(){
			
			var menu_id=$(this).val();

			var div=$(this).parent();
			 
			 var op= " ";	 

		 	$.ajax({
		 		type:'get',
		 		url:'{!!URL::to('findMenuItemName')!!}',
		 		data:{'id':menu_id},
		 		 
		 			success:function(data){
					//console.log('success');

					//console.log(data);

					//console.log(data.length);
					 
					for(var i=0;i<data.length;i++){

					op+="<tr class=\"gradeX\"> <td> "+data[i].menu_item_name+" # "+data[i].id+"</td> <td class=\"center\" id=\"dos\">  <a href=\"/admin/publish-menu-item/"+data[i].id+"\" class=\"btn btn-success btn-mini\" title=\"Publish\"> <i class=\"fas fa-thumbs-up\"></i> </a> <a href=\"/admin/is-front/"+data[i].id+"\" class=\"btn btn-primary btn-mini\" title=\"Is Front\"> <i class=\"fab fa-asymmetrik\"></i> </a> <a href=\"/admin/delete-menu-item/"+data[i].id+"\" class=\"btn btn-danger btn-mini\" title=\"Delete\"> <i class=\"fas fa-trash-alt\"></i> </a> <a href=\"/admin/edit-menu-item/"+data[i].id+"\" class=\"btn btn-primary btn-mini\" title=\"Edit\"> <i class=\"fas fa-edit\"></i> </a> <a href=\"#\" class=\"btn btn-success btn-mini\" title=\"Link to Article\"> <i class=\"fas fa-link\"></i> </a></td> </tr>";
					
				   }
				    
				   $('#menuItem').empty();
				   $('#menuItem').append(op);
				    
				},

				error:function(){
				}
		 		 
		 	});
		});
 });
</script>
<style>
	
	tr.gradeX{
		padding:10px;
		padding-top: 10px;
		padding-bottom: 10px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	 

</style>



@endsection