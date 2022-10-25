<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

  <div class="row">
    <div class="card-body">
      @csrf
      <form action="{{ url('/fuel') }}" method="POST" enctype="multipart/form-data">
        <h5 class="card-header">Default</h5>
        <div class="mt-2 mb-3">
          <label for="largeSelect" class="form-label">Large select</label>
          <select id="largeSelect" class="form-select form-select-lg">
            <option>Large select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div>
              <label for="defaultFormControlInput" class="form-label">Name</label>
              <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
              <div id="defaultFormControlHelp" class="form-text">
                We'll never share your details with anyone else.
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>