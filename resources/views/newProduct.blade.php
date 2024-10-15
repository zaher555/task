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
    <form class="w-50 m-auto border p-5 rounded mt-5" method="POST" action="/products">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="product name">
        </div>
        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        @error('description')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        @error('price')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <select name="category">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <br>
            <button type="submit" class="btn btn-success">save</button>
    </form>
</body>
</html>
