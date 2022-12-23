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
              <button type="button" class="btn btn-outline-primary">Tambah +</button>

              <!-- Table with hoverable rows -->
              <table class="table">
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td>2016-05-25</td>
                    <td>
                        <button type="button" class="btn btn-outline-primary">show</button>
                        <button type="button" class="btn btn-outline-warning">Edit</button>
                        <button type="button" class="btn btn-outline-danger">hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                    <td>2014-12-05</td>
                    <td>
                        <button type="button" class="btn btn-outline-primary">show</button>
                        <button type="button" class="btn btn-outline-warning">Edit</button>
                        <button type="button" class="btn btn-outline-danger">hapus</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @include('layouts.footer');