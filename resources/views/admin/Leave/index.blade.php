@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date From</th>
                                <th>Date To</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Reply</th>
                                <th>Status</th>
                                <th>Approve/Reject</th>
                               
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($leaves as $leave)
                     
                             <tr>
                             <td >{{$leave->user->name}}</td>
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
                                     <a href="#" data-toggle="modal" data-target="#exampleModal{{$leave->id}}">
                                        Approved/Reject 
                                        </a>
                                 </td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>


                      <!-- Modal -->
 <div class="modal fade" id="exampleModal{{$leave->id}}" tabindex="-1" leave="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" leave="document">
    <form action="{{route('accept.reject', [$leave->id])}}" method="post">@csrf
          
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Leave</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> 
        </div>
        <div class="modal-body">
      <div class="form-group">    
         <label for="">Status</label>
         <select name="status" class="form-control">
             <option value="0">Pending</option>
             <option value="1">Accept</option>
         </select> 
      </div> 
      
      <div class="form-group">    
        <label for="">Status</label>
        <textarea name="message" class="form-control" required="">
           
        </textarea>
     </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Submit</button>
        </div>
      </div>
       </form>
    </div>
  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
