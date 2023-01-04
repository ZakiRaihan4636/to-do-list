<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Create Post</title>
</head>

<body>
  <h1 class="text-center my-4">Create Task</h1>

  <div class="container">
    <div>
      <a href="/" class="btn btn-primary">
        < Back to Dashboard</a>
    </div>

    <hr>

    <form action="/task/store" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Task</label>
        <input type="text" class="form-control" id="task" name="task" placeholder="Enter your Task" >
        <label for="title" class="form-label">Start Date</label>
        <input type="date" class="form-control" id="start_date" name="start_date">
        <label for="title" class="form-label">Deadline</label>
        <input type="date" class="form-control" id="deadline" name="deadline">
        <label for="title" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deadline" name="dekripsi">
      </div>
      <button type="submit" class="btn btn-primary">Add data</button>
    </form>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>