<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD USER LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
<form method="POST" action="{{ route ('addUser') }}">
  @csrf
    <div class="mb-3">
      <label for="name" class="form-label">name</label>
      <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="email" name = "email" class="form-control" id="email">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">phone</label>
      <input type="phone" name = "phone" class="form-control" id="phone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
