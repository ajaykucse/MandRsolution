@extends('layouts.backend.master')
@section('content')
<?php $page= 'article'; ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current"><span class="icon"> <i class="icon-eye-open"></i> </span>View Article</a> </div>
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
       <div style="margin-left: 1017px;"><a class="btn btn-danger btn-mini" href="{{ url('admin/new-article')}}">Add New <i class="fas fa-plus-circle"></i></a></div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5 style="color: green;">Search :</h5>
              <span>Article Category :</span>
              <div class="control-group" style="margin-left: 220px; margin-top: -21px;">
                  <div class="controls">
                    <select class="articleName" name="title" style="width: 420px;">
                      <option value="0" selected>Select...</option>
                      @foreach($articles as $article)
                        <option value="{{$article->id}}">{{$article->title}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
            </div>
            <div class="widget-content nopadding" >
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Id</th>
                  <th>Order</th>
                  <th>Action</th>
                </tr>
                <tbody id="menuItem">
                  
                </tbody>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script type="text/javascript">

$(document).ready(function(){

    $(document).on('change','.articleName',function(){
      

      var id=$(this).val();

      var div=$(this).parent();
       
       var op= " ";
       

      $.ajax({
        type:'get',
        url:'{!!URL::to('findArticleName')!!}',
        data:{'id':id},
        cache: false,
          success:function(data){
          //console.log('success');

          //console.log(data);

          //console.log(data.length);

           
           
          for(var i=0;i<data.length;i++)
          {
              op+="<tr class=\"gradeX\"><td> "+data[i].title+"</td><td>"+data[i].id+"</td><td id=\"dos\"><input value=\""+data[i].odr+"\" type=\"text\"></td><td class=\"center\">  <a href=\"/admin/publish-article/"+data[i].id+"\" title=\"Publish\" class=\"btn btn-success btn-mini\"> <i class=\"fas fa-thumbs-up\"></i></a> <a href=\"#\" class=\"btn btn-primary btn-mini\" title=\"Related Product\"> <i class=\"fab fa-asymmetrik\"></i> </a> <a href=\"/admin/delete-article/"+data[i].id+"\" class=\"btn btn-danger btn-mini\" title=\"Delete\"> <i class=\"fas fa-trash-alt\"></i></a> <a href=\"/admin/edit-article/"+data[i].id+"\" class=\"btn btn-primary btn-mini\" title=\"Edit\"> <i class=\"fas fa-edit\"></i> </a> <a href=\"#\" class=\"btn btn-success btn-mini\" title=\"Pin To Home\"> <i class=\"fas fa-link\"></i></a> <a class=\"btn btn-danger btn-mini\" href=\"#\"><i class=\"fas fa-plus-circle\"></i> Add Sub</a> </td></tr>";
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
  
  #dos{

  }

</style>



@endsection