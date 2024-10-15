<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <a class="btn btn-success" href="/products/create">add product</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">cat_name</th>
          </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
</body>
</html>
