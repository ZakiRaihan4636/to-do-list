<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Post</title>
</head>

<body>
    <h1 class="text-center my-4">To do list</h1>

    <div class="container">

        <div class="d-flex justify-content-end">
            <a href="/post/create" class="btn btn-primary">Tambah Tugas</a>
        </div>
        <hr>

        <div class="row row-cols-1 row-cols-md-2 g-4">
           
            <table class="table">
              <thead class="table-dark">
                <th>No</th>
                <th>Tugas</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th class="text-center">Aksi</th>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($task as $row)
                  <td>{{$i}}</td>
                  <td>{{$row->task}}</td>
                  <td>{{$row->start_date}}</td>
                  <td>{{$row->deadline}}</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary">Selesai</a>
                    <a href="" class="btn btn-primary">Hapus</a>
                  </td>
              </tbody>
              @php
                  $i++
              @endphp
                @endforeach
            </table>

        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>