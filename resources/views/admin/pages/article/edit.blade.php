@extends('layouts.backend.master')
@section('content')
<?php $page= 'article'; ?>
 <div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current"><span class="icon"> <i class="icon-eye-open"></i></span>Edit Article</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Article</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/update-article/'.$articleDetails->id)}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
              {{ csrf_field() }}
          
          		<div class="control-group">
            	<label class="control-label">Article Name :</label>
                	<div class="controls">
                  		<input type="text" value="{{$articleDetails->title}}" name="title" id="required" required style="width: 300px;">
                	</div>
            	</div>
          	 
            <div class="control-group">
              <label class="control-label">Type :</label>
              <div class="controls">
                <select name="page_name" style="width: 320px;">
                  <option value="0" selected></option>
                  @foreach($pageInfo as $pages)
                  	<option value="{{$pages->page_id}}">{{$pages->page_name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          	 
            <div class="control-group">
            	<label class="control-label">Product Code :</label>
                <div class="controls">
                  <input type="text" value="{{$articleDetails->ProductCode}}" name="ProductCode" id="required" required style="width: 300px;">
                </div>
            </div>
            <div class="control-group">
            	<label class="control-label">Price :</label>
                <div class="controls">
                  <input type="text" value="{{$articleDetails->Price}}" name="Price" id="required" required style="width: 300px;">
                </div>
            </div>
            <div class="control-group">
            	<label class="control-label">Short Content :</label>
            	<div class="controls">
           			<textarea class="form-control" id="short-content" name="short_content">{{$articleDetails->short_content}}</textarea>
             	</div>
            </div>
             <div class="control-group">
            	<label class="control-label">Read More Content :</label>
            	<div class="controls">
           			<textarea class="form-control" id="article-ckeditor" name="read_more_content">{{$articleDetails->read_more_content}}</textarea>
             	</div>
            </div>
             <div class="control-group">
            	<label class="control-label">Special Desc :</label>
            	<div class="controls">
           			<textarea class="form-control" id="special-desc" name="special_desc">{{$articleDetails->special_desc}}</textarea>
             	</div>
            </div>
            <div class="control-group">
    			<label class="control-label" for="ControlFile">Featured Photo :</label>
    			<div class="controls">
    				<input class="form-control-file" id="exampleFormControlFile1" type="file">
    			</div>
  			</div>
  			 <div class="control-group">
    			<div class="controls">
    				<a href="#">Add Multiple With Caption</a>
    			</div>
    		</div>
    		<div class="control-group">
            	<label class="control-label">URL Link :</label>
                <div class="controls">
                  <input type="text" value="" name="ht" id="required" required style="width: 200px;">
                </div>
            </div>
             <div class="control-group">
    			<div class="controls">
    				<a href="#">Page</a>
    			</div>
    		</div>
    		<div class="control-group">
            	<label class="control-label">SEO Key :</label>
            	<div class="controls">
           			<textarea class="form-control" id="seo-ckeditor" name="search_keyword">{{$articleDetails->search_keyword}}</textarea>
             	</div>
            </div>
            <div class="control-group">
            	<label class="control-label">SEO Description :</label>
            	<div class="controls">
           			<textarea class="form-control" id="seo-desc" name="search_desc">{{$articleDetails->search_desc}}</textarea>
             	</div>
            </div>
            <div class="form-actions">
               <input type="submit" value="Update" class="btn btn-primary">
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    CKEDITOR.replace( 'short-content' );
    CKEDITOR.replace( 'article-ckeditor' );
    CKEDITOR.replace( 'special-desc' );
    CKEDITOR.replace( 'seo-ckeditor' );
    CKEDITOR.replace( 'seo-desc' );
</script>

@endsection