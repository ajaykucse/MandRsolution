@extends('layouts.backend.master')
@section('content')
<?php $page= 'menuItem'; ?>
 <div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current"><span class="icon"> <i class="icon-eye-open"></i> </span>Edit Menu Item</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Menu Item</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/update-menu-item/'.$menuItemDetails->id)}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
              {{ csrf_field() }}
          
            <div class="control-group">
              <label class="control-label">Menu Name:</label>
              <div class="controls">
                <select name="menu_id" style="width: 420px;">
                  <option value="0" selected>select-menu-name</option>
                    <option value="{{$menuInfo->id}}" selected="true">{{ $menuInfo->name }}</option>
                </select>
              </div>
            </div>
            <div class="control-group">
                <label class="control-label">Menu Item Name:</label>
                <div class="controls">
                  <input type="text" value="{{$menuItemDetails->menu_item_name}}" name="menu_item_name" id="required" required style="width: 400px;">
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Page Type:</label>
              <div class="controls">
                <select name="page_name" style="width: 420px;">
                  <option value="0" selected>select-page-name</option>
                  <option value="{{$menuItemDetails->page_name}}" selected="true">{{$menuItemDetails->page_name}}</option>
                </select>
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
@endsection