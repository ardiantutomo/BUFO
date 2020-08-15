@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                <form method="POST" action="{{route('store-post')}}">
                    @csrf
                    <div class="form-group">
                        <label for="post">Ask the experts:</label>
                        <textarea class="form-control" id="post" name="post" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button style="width:100%" type="submit" class="btn btn-primary mb-12">Post</button>
                    </div>
                    <div class="form-group">
                        @error('post')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </form>
                    
                </div>
            </div>
            <br/>
            <div class="card">
                <div class="card-header">Timeline</div>

                <div class="card-body" id="post-lists" class="post-lists">
                     
                </div>
                    
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
// setInterval(function(){
    $.ajax({
      url: "/post",
      method: "get",
      success: function( response ) {
        $('#post-lists').html(response);
      }
    });
// },1000);
});
</script>
@endsection
