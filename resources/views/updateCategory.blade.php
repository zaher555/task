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
    <form class="w-50 m-auto border p-5 rounded mt-5" method="POST" action="/categories/{{$category->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="category name" value="{{$category->name}}">
        </div>
        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$category->description}}">
        </div>
        @error('description')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <br>
            <button type="submit" class="btn btn-success">update</button>
    </form>
</body>
</html>
