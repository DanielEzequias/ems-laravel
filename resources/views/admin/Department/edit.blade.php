@extends('admin.layouts.master')
@if(isset(auth()->user()->role->permission['name']['department']
                         ['can-edit']))
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{route('department.update',[$department->id])}}" method="post">@csrf
            <div class="card">
                 {{method_field('PATCH')}} 
                <div class="card-header">Update Departments</div>

                <div class="card-body">
                      <div class="form-group"> 
                          <label>Name</label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$department->name}}">
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                      <textarea name="description" class="form-control @error('description') is-invalid @enderror" >{{$department->description}}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                        
                            <button type="submit" class="btn btn-primary">Update</button>
                        
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
 </div>
 @endif
 @endsection
