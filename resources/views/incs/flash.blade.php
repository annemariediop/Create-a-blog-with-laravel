@if ($message= Session::get('success'))
    <div class="alert alert-success alert-block">
     
        <strong>{{$message}}</strong>
        <button type="button" class="close" style="float: right" data-dismiss="alert">X</button>
        
    </div>
        
    @endif