
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h1>Items List</h1>
<table class="table table-dark table-striped">
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">category</th>
        <th scope="col">price</th>
        <th scope="col">image</th>
        <th scope="col">Delete</th>

    </tr>

@foreach($item as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->category}}</td>
    <td>{{$item->price}}</td>
    <td><img style="width:100px;height:100px;" src="/img/{{$item->img}}"></td>
   <td> <a href="/delete/{{$item->id}}" style="text-decoration:none;color:red;font-size:20px;font-weight:bold;margin:10px;">X</a></td>
</tr>
@endforeach
</table>
<a  href="/item/create">Add item</a>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
