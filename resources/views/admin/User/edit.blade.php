@extends('admin.layouts.master')
@section('content')
   @if(isset(auth()->user()->role->permission['name']['user']
                         ['can-edit']))
 <div class="container mt-5">

         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Register Employee</li>
              </ol>
         
         </nav>
         @if(Session::has('message'))
         <div class="alert alert-success">
             {{Session::get('message')}} 
         </div>
         @endif
        <form action="{{route('user.update',[$user->id])}}" method="post" enctype="multipart/form-data">@csrf
      {{ method_field('PATCH')}}
    <div class="row justify-content-center">
            <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">General Information</div>
                     <div class="card-body">
                           <div class="form-group">
                                <label> Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required="" value="{{$user->name}}" >
                                @error('name')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                            </div>

                        


                            <div class="form-group">
                                <label>Department</label>
                            <select  name="department_id" class="form-control @error('department') is-invalid @enderror" required="" value="{{$user->department}}">
                                @foreach(App\Department::all() as $department)
                            <option value="{{$department->id}}" 
                               @if ($user->department_id==$department->id) selected
                                @endif>
                                {{$department->name}}
                              </option>
                            @endforeach
                            </select>
      
                         </div>
                           
                           <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" required="" value="{{$user->designation}}">
                                @error('designation')
                               <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>

                           <div class="form-group">
                               <label>Salary</label>
                               <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror" required=""  value="{{$user->salary}}">
                               @error('salary')
                               <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                            </div>

                           <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" required="" value="{{$user->mobile_number}}">
                            @error('mobile_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                           <div class="form-group">
                               <label>started Date</label>
                               <input type="date" name="start_from" class="form-control @error('start_from') is-invalid @enderror" required="" value="{{$user->start_from}}">
                               @error('start_from')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                            </div>

                           <div class="form-group">
                                 <label>Image</label>
                                 <input type="file" accept="image/*" name="image" class="form-control" >
                                 @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                            
                            </div>


                     </div>
                 </div>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login Information</div>
                    <div class="card-body">
                          

                          <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" >
                               
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                            <select  name="role_id" class="form-control @error('role') is-invalid @enderror" required="" value="{{$user->role}}">
                                @foreach(App\Role::all() as $role)
                            <option value="{{$role->id}}" 
                               @if ($user->role_id==$role->id) selected
                                @endif>
                                {{$role->name}}
                              </option>
                            @endforeach
                            </select>
      
                         </div>
                    
                            <div class="form-group"> 
                                <button type="submit" class="btn btn-primary">Submit</button>
                        
                        </div>
                    </div>      
                </div>
            </div>              
    </div>

   </form>

  </div> 
 @endif
@endsection