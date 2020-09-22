@extends('admin.layouts.master')
@section('content')
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
        <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">@csrf

    <div class="row justify-content-center">
            <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">General Information</div>
                     <div class="card-body">
                           <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" required="" >
                                @error('firstname')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                            </div>

                           <div class="form-group">
                                 <label>last Name</label>
                                 <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" required="">
                                 @error('lastname')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                                </div>

                           <div class="form-group">
                                 <label>Address</label>
                                 <input type="text" name="Address" class="form-control @error('address') is-invalid @enderror" required="">
                                 @error('address')
                                  <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                               </span>
                                @enderror
                        
                            </div>

                           <div class="form-group">
                                  <label>Department</label>
                              <select  name="department_id" class="form-control @error('department') is-invalid @enderror" required="">
                                  @foreach(App\Department::all() as $department)
                              <option value="{{$department->id}}">{{$department->name}}</option>
                              @endforeach
                              </select>

                           </div>
                           
                           <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" required="">
                                @error('designation')
                               <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                            </div>

                           <div class="form-group">
                               <label>Salary</label>
                               <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror"  required="">
                               @error('salary')
                               <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                            </div>

                           <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" required="">
                            @error('mobile_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                           <div class="form-group">
                               <label>started Date</label>
                               <input type="date" name="start_from" class="form-control @error('start_from') is-invalid @enderror" required="">
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
                               <label>Email</label>
                               <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="">
                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                               @enderror
                            </div>

                          <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required="">
                                @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                            </div>
                          <div class="form-group">
                            <label>Role</label>
                            <select  name="role_id" class="form-control @error('role_id') is-invalid @enderror" required="">
                                @foreach(App\Role::all() as $role)
                              <option value="{{$role->id}}">{{$role->name}}</option>
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

@endsection