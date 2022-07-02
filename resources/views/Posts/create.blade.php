<h3>Welcome To Posts Page In QueryBuilder</h3>

<form action="{{route('post.store')}}" method="post">
    @csrf
    <input type="text" placeholder="title" name="title"> <br><br>
    <input type="text" placeholder="body" name="body"> <br><br>
    <input type="submit">
</form>
