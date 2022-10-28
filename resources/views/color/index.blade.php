<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Color</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
                <th>ID</th>
                <th>Color</th>
                <th>Acciones</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ( $colors as $color )
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $color->id }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $color->name }}</strong></td>
                    <td>
                        <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ url('/color/'.$color->id.'/edit') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                          <form action="{{ url('/color/'.$color->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a class="dropdown-item" href="javascript:void(0);" onclick="return confirm('¿Quieres Borrar?')"><i class="bx bx-trash me-1"></i> Delete</a>
                          </form>
                          </div>
                        </div>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>