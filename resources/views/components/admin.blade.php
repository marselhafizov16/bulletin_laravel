<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="ads">
        <table>
            <tr><th>Категория</th><th>Объявление</th><th>Удалить объявление</th></tr> <!--ряд с ячейками заголовков-->
            @foreach ($ads as $ad)
            <tr><td>{{$ad->category}}</td><td>{{$ad->ad}}</td><td><a href="/laravel/bulletin/public/admin/deletead/{{$ad->id}}">Удалить</a></td></tr> <!--ряд с ячейками тела таблицы-->
            @endforeach
        </table>
    </div>
    <div class="users">
        @foreach ($users as $user)
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->created_at}}</p>
        <hr>
        @endforeach
    </div>

</body>
</html>