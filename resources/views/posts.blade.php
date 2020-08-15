
@foreach ($posts as $post)
<div class="card">
  <div class="card-header">
    <h4>{{$post->post}}</h4>
    <b>Post by: {{$post->users->name}}</b>
  </div>

  <div class="card-body">
    <h5>Comments: </h5>
    @foreach ($post->comments as $comment)
    <b>
        {{$comment->user->get()[0]->name}}:
    </b>
    <p style="margin:0;padding:0;margin-left:20px;">{{$comment->comment}}</p>
    <hr style="margin:2px"/>
    
    @endforeach
    <form method="post" action="{{route('store-comment')}}">
      @csrf
      <input type="hidden" name="parent_id" value="{{$post->id}}"/>
      <div class="form-group">
        <textarea class="form-control" id="comment" name="comment" rows="1"></textarea>
      </div>
      <div class="form-group">
          <button style="width:100%" type="submit" class="btn btn-success mb-12">Post comment</button>
      </div>
    </form>
  </div>
                  
</div>
</br>
@endforeach