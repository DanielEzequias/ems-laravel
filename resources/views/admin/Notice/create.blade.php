@extends('admin.layouts.master')

@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{route('notice.store')}}" method="post">@csrf
            <div class="card">
                <div class="card-header">Notice</div>
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}} 
                </div>
                @endif
                <div class="card-body">
                      <div class="form-group">
                          <label>Title</label>
                          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                          @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                    <input name="date" type="date" class="form-control @error('date') is-invalid @enderror" >
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label>Created By</label>
                        <input name="name" class="form-control @error('name') is-invalid @enderror" required value="{{auth()->user()->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
 </div>
 @endsection
