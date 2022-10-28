<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <h5 class="card-header">Default</h5>
        <div class="card-body">
          <form action="{{ url('/color') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('color.form');
          </form>
        </div>
      </div>
    </div>
  </div>
</div>