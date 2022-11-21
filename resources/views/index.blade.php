<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
    <p> {{$post->title}} </p>
    <button onclick="like({{$post->id}})">いいね</button>
    @endforeach
    <script>
        function like(postId) {
            $.ajax({
                headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                url: `/like/${postId}`,
                type: "POST",
            })
                .done(function (data, status, xhr) {
                console.log(data);
                })
                .fail(function (xhr, status, error) {
                console.log();
                });
            }
    </script>
</body>
</html>