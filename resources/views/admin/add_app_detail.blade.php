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
				   <div class="card-title">Add App Detail</div>
				   <hr>
			<form role="form" action="{{URL::to('admin/save_app_detail')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

					

                    <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">packageName</label>
                  <div class="col-sm-10">
                    <input name="packageName" type="text" class="form-control"   >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">appName</label>
                  <div class="col-sm-10">
                    <input name="appName" type="text" class="form-control"   required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">type</label>
                  <div class="col-sm-10">
                    <input name="type" type="text" class="form-control"   required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">icon</label>
                  <div class="col-sm-10">
                    <input name="icon" type="text" class="form-control"   required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-9" class="col-sm-2 col-form-label">shortDesc</label>
                  <div class="col-sm-10">
                    <textarea name="shortDesc" class="form-control" rows="4"  required></textarea>
                  </div>
                </div>

                  <div class="form-group row">
                  <label for="input-9" class="col-sm-2 col-form-label">desc</label>
                  <div class="col-sm-10">
                    <textarea name="desc" class="form-control" rows="4"  required></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">screenshots</label>
                  <div class="col-sm-10">
                    <input name="screenshots" type="text" class="form-control"   required>
                  </div>
                </div>
                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">banner</label>
                  <div class="col-sm-10">
                    <input name="banner" type="text" class="form-control"   required>
                  </div>
                </div>
                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">rating</label>
                  <div class="col-sm-10">
                    <input name="rating" type="text" class="form-control"   required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">developer</label>
                  <div class="col-sm-10">
                    <input name="developer" type="text" class="form-control"   required>
                  </div>
                </div>

                   <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">version</label>
                  <div class="col-sm-10">
                    <input name="version" type="text" class="form-control"   required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">tags</label>
                  <div class="col-sm-10">
                    <input name="tags" type="text" class="form-control typeahead" id="tags"  data-role="tagsinput" required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">size</label>
                  <div class="col-sm-10">
                    <input name="size" type="text" class="form-control"   required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">fileApk</label>
                  <div class="col-sm-10">
                    <input name="fileApk" type="text" class="form-control"   required>
                  </div>
                </div>

                <div class="form-group row">
					<label for="input-7" class="col-sm-2 col-form-label">Category name</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="input-7" name="categoryId" required>
                            @foreach($category as $cate)

                             <option value="{{$cate->id}}">{{$cate->name}}</option>
                             
                            @endforeach
                    </select>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">status</label>
                  <div class="col-sm-10">
                    <input name="status" type="text"  class="form-control "   required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">error</label>
                  <div class="col-sm-10">
                    <input name="error" type="text" class="form-control" value="null"   required>
                  </div>
                </div>

                 <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">packageNameIOS</label>
                  <div class="col-sm-10">
                    <input name="packageNameIOS" type="text" class="form-control" value="null"   required>
                  </div>
                </div>

                  <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">os</label>
                  <div class="col-sm-10">
                    <input name="os" type="text" class="form-control" value="null"   required>
                  </div>
                </div>









			        <div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-primary px-5"> save </button>

					  </div>
					</div>

					</form>

				 </div>
			 </div>
              </div>
			 </div>




@endsection