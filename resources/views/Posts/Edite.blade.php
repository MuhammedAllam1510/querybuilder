<h2>Edite Post</h2>

<form action="{{route('post.update' , $posts->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$posts->title}}"> <br><br>
    <input type="text" name="body" value="{{$posts->body}}"> <br><br>
    <input type="submit">
</form>
