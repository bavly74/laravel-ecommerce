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

<form action="/item" method="post" class="row g-3" style="border:1px solid black;padding:50px;margin:auto;">
    @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">item name</label>
    <input type="text" name="itemName" class="form-control" id="inputEmail4">
  </div>



  <div class="col-md-4">
    <label for="inputState" class="form-label">item category</label>
    <select id="inputState" class="form-select" name="itemCat">
      <option selected>Choose...</option>
      <option value="men">men</option>
      <option value="women">women</option>

    </select>
  </div>

  <div class="col-4">
    <label for="inputAddress2" class="form-label">item price</label>
    <input type="text" class="form-control" id="inputAddress2" name="itemPrice">
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">item image path</label>
    <input type="text" name="img" class="form-control" id="inputEmail4">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">save</button>
  </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
