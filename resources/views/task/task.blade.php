  @include('layouts.header');
  @include('layouts.sidebar');
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Task</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Task</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Date Task</h5>
              <button type="button" class="btn btn-outline-primary btn-ls" data-bs-toggle="modal" data-bs-target="#taskCreate">Tambah +</button>

              <!-- Table with hoverable rows -->
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Task</th>
                    <th scope="col">Description</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tasks as $row)
                      
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$row->user->name}}</td></td>
                    <td>{{$row->task}}</td></td>
                    <td>{{$row->deskripsi}}</td></td>
                    <td>{{$row->start_date}}</td>
                    <td>{{$row->deadline}}</td>
                    <td>
                        <button type="button" class="btn btn-primary">show</button>
                        <button type="button" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#taskCreate">Edit</button>
                        <button type="button" class="btn btn-danger">hapus</button>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  {{-- Modal tambah --}}
<div class="modal fade" id="taskCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addtask">ADD TASK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="tasks/store" method="POST">
          @csrf
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Task:</label>
            <input type="text" class="form-control" name="task" id="task">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Start Date</label>
            <input type="date" class="form-control" name="start_date" id="start_date">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Deadline</label>
            <input type="date" class="form-control" name="deadline" id="deadline">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Description</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4"></textarea>
          </div>
          <div class="modal-footer">
            <a type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</a>
            <a type="submit"  class="btn btn-primary">Simpan</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- end footer --}}
{{-- modal edit --}}
{{-- <div class="modal fade" id="taskedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edittask">Edit TASK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="task/store " method="POST">
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Task:</label>
            <input type="text" class="form-control" name="task" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Start Date</label>
            <input type="date" class="form-control" name="start_date" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Deadline</label>
            <input type="date" class="form-control" name="deadline" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Description</label>
            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>
          <div class="modal-footer">
            <a type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</a>
            <a type="submit"  class="btn btn-primary">Simpan</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
  @include('layouts.footer');