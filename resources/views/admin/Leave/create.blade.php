@extends('admin.layouts.master')
@section('content')
<div class="container mt-5">

         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Create Leave</li>
              </ol>
         
         </nav>
         @if(Session::has('message'))
         <div class="alert alert-success">
             {{Session::get('message')}} 
         </div>
         @endif
        <form action="{{route('leave.store')}}" method="post" enctype="multipart/form-data">@csrf

    <div class="row justify-content-center">
            <div class="col-md-12">
                 <div class="card">
                     <div class="card-header">Create Leave</div>
                     <div class="card-body">
                           <div class="form-group">
                                <label>From Date</label>
                                <input type="date" name="from" class="form-control @error('from') is-invalid @enderror" required="" >
                                @error('from')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                            </div>

                           <div class="form-group">
                                 <label>To Date</label>
                                 <input type="date" name="to" class="form-control @error('to') is-invalid @enderror" required="">
                                 @error('to')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                                </div>

                           
                           <div class="form-group">
                                  <label>Type of leave</label>
                              <select  name="type" class="form-control" >
                                    <option value="annualleave">Annual Leave</option>
                                    <option value="sickleave">Sick Leave</option>
                                    <option value="parental">Parental</option>
                                    <option value="other">Other Leave</option>
                              </select>

                           </div>
                           
                           

                           <div class="form-group">
                               <label>Description</label>
                              <textarea name="description" class="form-control"></textarea>
                               
                            </div>

                           

                            <div class="form-group"> 
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>      
                </div>
            </div>              
    </div>

   </form>

                       <table class="table mt-5">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Date From</th>
                                   <th>Date To</th>
                                   <th>Description</th>
                                   <th>Type</th>
                                   <th>Reply</th>
                                   <th>Status</th>
                                   <th>Edit</th>
                                   <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leaves as $leave)
                        
                                <tr>
                                <td scope="row">1</td>
                                <td>{{$leave->from}}</td>
                                    <td>{{$leave->to}}</td>
                                    <td>{{$leave->description}}</td>
                                    <td>{{$leave->type}}</td>
                                    <td>{{$leave->message}}</td>
                                    <td>@if($leave->status==0)
                                    <span class="alert alert-danger">Pending</span>
                                   @else
                                    <span class="alert alert-success">Aproved</span>
                                    @endif
                                </td>
                                    <td>
                               
                                 <a href="{{route('leave.edit',[$leave->id])}}">
                                 <i class="fas fa-edit">edit</i>
                                 </a>
                              
                                    </td>
                                    
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal{{$leave->id}}">
                                            <i class="fas fa-trash">Delete</i>
                                           </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>





                         <!-- Modal -->
 <div class="modal fade" id="exampleModal{{$leave->id}}" tabindex="-1" leave="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" leave="document">
       <form action="{{route('leave.destroy',[$leave->id])}}" method="post">@csrf
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

</div> 

@endsection