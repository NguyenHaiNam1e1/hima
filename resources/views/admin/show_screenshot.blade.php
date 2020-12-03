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

<div class="row " style="margin-bottom:340px">
	<div class="col-lg-12">
           
		<div class="card">
			<div class="card-body">
				<div class="card-title">Update Screenshot
                </div>
				   <hr>
                
                    <form role="form" action="{{URL::to('admin/update_screenshot/'.$screenshot->id)}}" method="post" enctype="multipart/form-data">
                       
                {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">link</label>
                                <div class="col-sm-10">
                                    <input name="link" value="{{$screenshot->link}}" type="text" class="form-control" id="input-21" placeholder="Enter Name">
                                </div>
                            </div>

                           <div class="form-group row">
                                          <label for="input-8" class="col-sm-2 col-form-label">Category name</label>
                                            <div class="col-sm-10">
                                              <select class="form-control" id="input-7" name="app_id" required>
                                                    

                                                      @foreach($App_detail as  $cate)
                                                      @if($cate->id == $screenshot->app_id)
                                                      {
                                                      <option selected value="{{$cate->id}}">{{$cate->appName}}</option>
                                                      }
                                                      @else{
                                                          <option value="{{$cate->id}}">{{$cate->appName}}</option>
                                                      }
                                                      @endif
                                                      @endforeach

                                              </select>
                                            </div>
                                          </div> 


                      

		
                        <div class="form-group row">
                         <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary px-5"> Update  </button>

                        </div>
                
					</form>
                    
			 
		 </div>
        
     </div>
</div>

@endsection