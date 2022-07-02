<html>
<head>
    <title>DispalyPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<a class="btn btn-primary" href="{{route('post.DeletAll')}}" role="button">DeleteAll</a>
<a class="btn btn-primary" href="{{route('post.DeletAll.Truncate')}}" role="button">DeleteAllTRUNCAT</a>

    <table class="table">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Pr</th>
            </tr>
        @foreach($posts as $posts)

             <tr>
                <th scope="row">{{$posts->id}}</th>
                <td>{{$posts->title}}</td>
                <td>{{$posts->body}}</td>
                 <td>
                     <a class="btn btn-primary" href="{{route('post.edite' , $posts->id)}}">Edite</a>
                     <a class="btn btn-danger" href="{{route('post.delete' , $posts->id)}}">Delete</a>
                 </td>
            </tr>
        @endforeach


    </table>


</body>

</html>
