<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Estacion</th>
              <th>Ubicacion</th>
              <th>Combustibles</th>
              <th>Servicios</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($stations as $station )
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{ $stantion->id }}</strong></td>
              <td>{{ $stantion->location }}</td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Lilian Fuller"
                  >
                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Sophia Wilkerson"
                  >
                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Christina Parker"
                  >
                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                  </li>
                </ul>
              </td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Lilian Fuller"
                  >
                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Sophia Wilkerson"
                  >
                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Christina Parker"
                  >
                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                  </li>
                </ul>
              </td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/station/'.$station->id.'/edit') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <form action="{{ url('/station/'.$station->id) }}" method="POST">
                      @csrf
                      {{ method_field('DELETE') }}
                      <a class="dropdown-item" href="javascript:void(0);" onclick="return confirm('??Quieres Borrar?')"><i class="bx bx-trash me-1"></i> Delete</a>
                    </form>
                    </div>
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