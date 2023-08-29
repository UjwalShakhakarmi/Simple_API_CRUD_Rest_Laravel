<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('savelist')}}" method="post">
        <input type="text" name="Lists">
        <button>Submit</button>
    </form>
    <table>
        <tr>
            <th>Sn.</th>
            <th>ShopingLists</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach($list as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->list}}</td>
            <td><a href="{{url('/edit/'. $value->id)}}">edit</a></td>
            <td><a href="{{url('/delete/'.$value->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>