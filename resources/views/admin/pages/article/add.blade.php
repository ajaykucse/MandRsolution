@extends('layouts.backend.master')
@section('content')
<?php $page= 'article'; ?>
 <div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current"><span class="icon"> <i class="icon-eye-open"></i> </span>Add Article</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Create New Article</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/store-article')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
            	{{ csrf_field() }}
          
            <div class="control-group">
                <label class="control-label">Article Name:</label>
                <div class="controls">
                  <input type="text" name="title" id="required" required style="width: 400px;">
                </div>
            </div>
            <div class="form-actions">
               <input type="submit" value="Save" class="btn btn-success">
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
