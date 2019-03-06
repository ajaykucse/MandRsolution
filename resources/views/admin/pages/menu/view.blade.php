@extends('layouts.backend.master')
@section('content')
<?php $page= 'menu'; ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current"><span class="icon"> <i class="icon-eye-open"></i> </span>View Menu</a> </div>
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
       <div style="margin-left: 1017px;"><a class="btn btn-danger btn-mini" href="{{ url('admin/manage-menu')}}">Add New <i class="fas fa-plus-circle"></i></a></div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Menus</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Menu Name</th>
                  <th>Id</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($menus as $index=> $menu)
                <tr class="gradeX">
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $menu->name }}</td>
                  <td>{{ $menu->id }}</td>
                  @if($menu->isActive==1)
                  <td style="color: green;">Active</td>
                  @else
                  <td style="color: red;">Unactive</td>
                  @endif

                  <td class="center">
                  		@if($menu->isActive==1)
                  		<a href="{{ url('/admin/unactive-menu/'.$menu->id)}}" class="btn btn-mini"><i class="fas fa-thumbs-up" style="color:green;"></i></a> 
                  		@else
                  		<a href="{{ url('/admin/active-menu/'.$menu->id)}}" class="btn btn-mini"><i class="fas fa-thumbs-down" style="color: red;"></i></a>
                  		@endif
                  		<a href="{{ url('/admin/edit-menu/'.$menu->id)}}" class="btn btn-primary btn-mini">Edit</a> 
                  		<a href="{{ url('/admin/delete-menu/'.$menu->id)}}" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection