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
    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <a class="btn btn-success" href="/products/create">add product</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">cat_Id</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category_id}}</td>
            <td>
                <a class="btn btn-warning" href="/products/{{$product->id}}/edit">edit</a>
                <form method="POST" action="/products/{{$product->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        delete
                    </button>
                </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
</body>
</html>
