@extends('layout_admin')

@section('Content')
<div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Data Tables</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Bulona</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
         </ol>
	   </div>
     
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
       <a href="{{URL::to('/admin/add_screenshot')}}"><button class="custom-btn btn-11 " >ADD<div class="dot"></div></button></a>
        <!-- <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button> -->
        <!-- <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown"> -->
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>


<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Screenshot</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                <tr>
                        <th>id</th>
                        <th>link</th>
                        <th>app_id</th>
                        <th>tools</th>
                        
                </tr>
                </thead>
                <tbody>
            
               @foreach($screenshot as  $cate)
                    <tr>
                        <td>{{$cate->id}}</td> 
                      
                        <td>
                          <img src="{{$cate->link}}" width="50px" height="50px"/>
                        </td> 
                        <td>{{$cate->app_id}}</td>                     
                     
                        <td>
                        <a onclick="return confirm('Are you sure to delete?')" href=" {{URL::to('/admin/delete_screenshot/'.$cate->id)}}" class="active" >
                        <i class="fa fa-trash" style="font-size:28px;color:red;margin-right:20px " ></i>
                        </a>

                        <!-- <a href="#" class="active" >
                        <i class="fa fa-trash" style="font-size:28px;color:red;margin-right:20px " id="confirm-btn-alert"></i>
                        </a> -->

                        <a href="{{URL::to('/admin/show_screenshot/'.$cate->id)}}" class="active" >
                        <i class="fa fa-edit" style="font-size:28px;color:green"></i>
                        </a>

                        </td>
                       
                    </tr>
@endforeach
           
                </tbody>
            
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
@endsection