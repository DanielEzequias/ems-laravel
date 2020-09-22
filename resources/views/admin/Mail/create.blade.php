@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{}}" method="post">@csrf
          
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                   
                <div class="card-body">
                    <div class="form-group">    
                       <label for="">Select</label>
                       <select id="mail" class="form-control">
                           <option value="0">Mail to All staff</option>
                           <option value="1">Choose Department</option>
                           <option value="2">Choose Person</option>
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
@endsection
