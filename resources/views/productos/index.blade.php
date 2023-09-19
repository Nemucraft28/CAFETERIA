  @include('layouts.header')
  <div class="card">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Productos</h1>
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
                    <h3 class="card-title">En este módulo, podrás encontrar toda la información relacionada con nuestros productos.</h3>
                    <div class="card-tools">
                        <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Referencia</th>
                                <th>Precio</th>
                                <th>Peso</th>
                                <th>Categoría</th>
                                <th>Disponibilidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->referencia }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->peso }}</td>
                                <td>{{ $producto->categoria }}</td>
                                <td>{{ $producto->stock }}</td>
                                <td>
                                    <a href="/productos/{{ $producto->id }}" class="btn btn-info">Ver</a>
                                    <a href="/productos/{{ $producto->id }}/edit" class="btn btn-warning">Editar</a>
                                    <form action="/productos/{{ $producto->id }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
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