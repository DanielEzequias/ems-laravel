@extends('admin.layouts.master')
@section('content')

<div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">All Notices</li>
              </ol>
         
         </nav>

                   @if(count ($notices)>0) 
                         @foreach ($notices as $key =>$notice)
                         <div class="card alert alert-info">
                             
                        
                            <div class="card-header alert alert-warning">{{$notice->title}}</div>
                            
                            <div class="card-body"> 
                                <p>{{$notice->description}}</p>
                                <p class="badge badge-success">Date:{{$notice->date}}</p>
                                <p class="badge badge-warning">Created By:{{$notice->name}}</p>
                            </div> 
                            
                            <div class="card-footer">
                                @if (isset(auth()->user()->role->permission['name']['notice']['can-edit']))
                                <a href="{{route('notice.edit',[$notice->id])}}">
                                    <i class="fas fa-edit">edit</i>
                                    </a>
                                @endif
                                
                                @if (isset(auth()->user()->role->permission['name']['notice']['can-delete']))
                              <a href="#" class="float-right" data-toggle="modal" data-target="#exampleModal{{$notice->id}}">
                                        <i class="fas fa-trash"></i>
                                       </a>
                              @endif
                                    

                            </div>

                            </div>
                            @endforeach
                             @else
                            <p>No Notices to display</p>
                           
                           @endif
                               
                        </div> 
                    </div>
                </div>
                                       <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$notice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                     <div class="modal-dialog" role="document">
                                      <form action="{{route('notice.destroy',[$notice->id])}}" method="post">@csrf
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


                          
                         
                        
                    
           
        
@endsection

