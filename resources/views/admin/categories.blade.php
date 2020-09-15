@extends('admin.main.controlpanel')
@section('title', $page_title)
@section('content')
<div class="row">
        <div class="col-lg-12">
        <div class="form-panel">
          <!-- <div class="col-md-4">
          <router-link to="/AllCategories" class="btn btn-theme nav-link ">All Categories</router-link>
              <router-link to="/Categories" class="btn btn-theme nav-link">New Category</router-link>
          </div> -->
          <div class="col-md-2">.</div>
          <h4  ><i class="fa fa-desktop"></i> Categories</h4>
         
            </div>
        </div>
          
</div>      
<router-view></router-view>



@endsection