<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Basic Layout</h5>
            <small class="text-muted float-end">Default label</small>
          </div>
          <div class="card-body">
            @csrf
            <form action="{{ url('/serviceHistory') }}" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Vehiculo</label>
                <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">Kilometraje</label>
                <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">Valor</label>
                <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-company">Estacion</label>
                <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
              </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->