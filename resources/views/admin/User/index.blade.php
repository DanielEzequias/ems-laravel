@extends('admin.layouts.master')
@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">All Users</li>
              </ol>
         </nav>

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}} 
            </div>
            @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      
                        <tr>
                            <td>SN</td>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Role</td>
                            <td>Department</td>
                            <td>Designation</td>
                            <td>Salary</td>
                            <td>Mobile </td>
                            <td>Email</td>
                            <td>Started</td>
                            <td>Edit</td>
                            <td>Delete</i></td>
                        </tr>
                    
                    </thead>
                    
                    <tbody>
                        @if(
                            count ($users)>0) 
                         @foreach ($users as $key =>$user)
                         <tr>
                             <td>{{$key+1}}</td>
                             <td><img src="{{asset('profile')}}/{{$user->image}}" width="100"></td>
                             <td>{{$user->name}}</td>
                             <td><span class="badge badge-success">{{$user->role->name}}</span></td>
                             <td>{{$user->department->name}}</td>
                             <td>{{$user->designation}}</td>
                             <td>{{$user->salary}}</td>
                             <td>{{$user->mobile_number}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$user->start_from}}</td>
                              <td>
                                @if (isset(auth()->user()->role->permission['name']['user']['can-edit']))
                                 <a href="{{route('user.edit',[$user->id])}}">
                                 <i class="fas fa-edit"></i>
                                 </a>
                                 @endif
                             </td>
                             
                             <td>
                              @if (isset(auth()->user()->role->permission['name']['user']['can-delete']))
                             <a href="#" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
                                 <i class="fas fa-trash"></i>
                                </a>
                              @endif

                                       <!-- Modal -->
 <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" user="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" user="document">
     <form action="{{route('user.destroy',[$user->id])}}" method="post">@csrf
         {{method_field('DELETE')}}
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        Are you sure you want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </div>
     </form>
  </div>
</div>


                            </td>
                             
                             
                         </tr>
                         @endforeach
                         @else
                         <td>No Deparments to Display</td>
                         @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

