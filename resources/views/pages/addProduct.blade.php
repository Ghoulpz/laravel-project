<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easypay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
   <div class="container my-3">
       <h1 class="text-center">Добавить товар</h1>
       <div class="col-sm-6 mx-auto">
           <form method="POST" action="/addProduct">
               @csrf
               <div class="mb-3">
                   <input type="text" class="form-control" name="ProductName" placeholder="Название товара">
               </div>
               <div class="mb-3">
                   <input type="text" class="form-control" name="Description" placeholder="Описание товара">
               </div>
               <div class="mb-3">
                   <input type="number" class="form-control" name="Price" placeholder="Цена товара">
               </div>
               <select class="form-select mb-3" aria-label="Пример выбора по умолчанию" name="GameNumber">
                   <option selected>Выберите категорию</option>
                   <option value="1">Minecraft</option>
                   <option value="2">CS:GO</option>
                   <option value="3">Dota 2</option>
               </select>
               <div class="mb-3"><input type="submit" class="btn btn-secondary form-control" value="Добавить товар"></div>
           </form>
       </div>
   </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
