@include('layouts.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Advanced Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Productos</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Aquí va el formulario -->
                    <form action="{{ route('productos.update', ['producto' => $producto->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nombre">Nombre del Producto:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="{{ $producto->nombre }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="referencia">Referencia:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="referencia" name="referencia" value="{{ $producto->referencia }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="peso">Peso:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                               <input type="number" class="form-control" id="peso" name="peso" value="{{ $producto->peso }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="peso">Categoría:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                               <input type="number" class="form-control" id="categoria" name="categoria" value="{{ $producto->categoria }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stock">Inventario:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                               <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-success">Success</button>
                    </form>
                </div>
                <div class="card-footer">
                    Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and
                    information about
                    the plugin.
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('layouts.footer')
