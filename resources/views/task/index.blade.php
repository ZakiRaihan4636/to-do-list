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
                          <button type="button" class="btn btn-outline-primary btn-ls" data-bs-toggle="modal"
                              data-bs-target="#taskCreate">Tambah +</button>

                          <!-- Table with hoverable rows -->
                          <table class="table text-center">
                              <thead>
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Mata Kuliah</th>
                                      <th scope="col">Tugas</th>
                                      <th scope="col">Tanggal Mulai</th>
                                      <th scope="col">Deadline</th>
                                      <th scope="col">Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @php
                                      $no = 1;
                                  @endphp
                                  @foreach ($tasks as $task)
                                      <tr>
                                          <td scope="row">{{ $no++ }}</td>
                                          <td>{{ $task->matkul }}</td>
                                          <td>{{ $task->task }}</td>
                                          <td>{{ $task->start_date }}</td>
                                          <td>{{ $task->deadline }}</td>
                                          <td>
                                              <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                  action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                                  <a href="{{ route('tasks.show', $task->id) }}"
                                                      class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                      data-bs-target="#show{{ $task->id }}">Show</a>
                                                  <a href="{{ route('tasks.edit', $task->id) }}"
                                                      class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                      data-bs-target="#taskedit{{ $task->id }}">EDIT</a>
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                              </form>
                                          </td>
                                      </tr>
                                      {{-- modal show --}}
                                      <div class="modal fade" id="show{{ $task->id }}" tabindex="-1"
                                          aria-labelledby="show" aria-hidden="true">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="show"><strong>SHOW TO DO
                                                              LIST</strong></h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                          aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body d-flex justify-content-center">

                                                      <div class="card mb-3">
                                                          <img src="{{ asset('lte') }}/assets/img/todolist.png"
                                                              class="card-img-top" alt="...">
                                                          <div class="card-body">
                                                              <h5 class="card-title">{{ $task->matkul }}</h5>
                                                              <p class="card-text">Tugas : {{ $task->task }}</p>
                                                              <p class="card-text">Deskripsi :{{ $task->deskripsi }}
                                                              </p>
                                                              <p class="card-text">Tanggal Muali :
                                                                  {{ $task->start_date }}</p>
                                                              <p class="card-text">Deadline : {{ $task->deadline }}</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- modal edit --}}
                                      <div class="modal fade" id="taskedit{{ $task->id }}" tabindex="-1"
                                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="edittask">Edit TASK</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                          aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form action="{{ route('tasks.update', $task->id) }}"
                                                          method="POST">
                                                          @csrf
                                                          @method('PUT')
                                                          <div class="mb-3">
                                                              <label for="recipient-name" class="col-form-label">Mata
                                                                  Kuliah</label>
                                                              <input type="text" class="form-control" name="matkul"
                                                                  id="matkul" value="{{ $task->matkul }}">
                                                          </div>
                                                          <div class="mb-3">
                                                              <label for="recipient-name"
                                                                  class="col-form-label">Task</label>
                                                              <input type="text" class="form-control" name="task"
                                                                  id="task" value="{{ $task->task }}">
                                                          </div>
                                                          <div class="mb-3">
                                                              <label for="recipient-name" class="col-form-label">Start
                                                                  Date</label>
                                                              <input type="date" class="form-control"
                                                                  name="start_date" id="start_date"
                                                                  value="{{ $task->start_date }}">
                                                          </div>
                                                          <div class="mb-3">
                                                              <label for="recipient-name"
                                                                  class="col-form-label">Deadline</label>
                                                              <input type="date" class="form-control"
                                                                  name="deadline" id="deadline"
                                                                  value="{{ $task->deadline }}">
                                                          </div>
                                                          <div class="mb-3">
                                                              <label for="recipient-name"
                                                                  class="col-form-label">Description</label>
                                                              <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4">{{ $task->deskripsi }}</textarea>
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="reset" class="btn btn-danger"
                                                                  data-bs-dismiss="modal">Reset</button>
                                                              <button type="submit"
                                                                  class="btn btn-warning">Update</button>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
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
                  <form action="{{ route('tasks.store') }}" method="POST">
                      @csrf
                      <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Mata Kuliah</label>
                          <input type="text" class="form-control" name="matkul" id="matkul">
                      </div>
                      <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Task</label>
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
                          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  {{-- end footer --}}

  @include('layouts.footer');
