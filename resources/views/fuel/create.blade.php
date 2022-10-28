<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

  <div class="row">
    <div class="card-body">
      <h5 class="card-header">Default</h5>
      <form action="{{ url('/fuel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('fuel.form');
      </form>
    </div>
  </div>
</div>