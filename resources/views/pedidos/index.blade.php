  @include('layouts.header')
  <div class="card">
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1>Pedidos</h1>
                      </div>
                  </div>
              </div><!-- /.container-fluid -->
          </section>

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                                  <h3 class="card-title">En este módulo, podrás encontrar toda la información
                                      relacionada con nuestros productos.</h3>
                                  <div class="card-tools">
                                      <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Nuevo</a>
                                  </div>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                  <table id="example2" class="table table-bordered table-hover">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Mesa</th>
                                              <th>Estado</th>
                                              <th>Forma Pago</th>
                                              <th>Total</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($pedidos as $pedidos)
                                              <tr>
                                                  <td>{{ $pedidos->id }}</td>
                                                  <td>{{ $pedidos->mesa }}</td>
                                                  <td>{{ $pedidos->estado }}</td>
                                                  <td>{{ $pedidos->forma_pago }}</td>
                                                  <td>{{ $pedidos->total }}</td>
                                                  <td>
                                                      <a href="/pedidos/{{ $pedidos->id }}"
                                                          class="btn btn-info">Ver</a>
                                                      <a href="/pedidos/{{ $pedidos->id }}/edit"
                                                          class="btn btn-warning">Editar</a>
                                                      <form action="/pedidos/{{ $pedidos->id }}" method="POST"
                                                          style="display: inline;">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit"
                                                              class="btn btn-danger">Eliminar</button>
                                                      </form>
                                                  </td>
                                              </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                              <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                      </div>
                      <!-- /.col -->
                  </div>
                  <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
      @include('layouts.footer')
