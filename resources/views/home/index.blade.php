<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
<tr>
    <th>name</th>
    <th>mail</th>
    <th>age</th>
</tr>
@foreach($items as $key => $item)
<tr>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>
</tr>
@endforeach

    </table>
</body>
</html>