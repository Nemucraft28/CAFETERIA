@include('layouts.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pedido</h1>
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
                    <h3 class="card-title">En este formulario, podrás registrar todos los pedidos solicitados en las mesas.</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Aquí va el formulario -->
                    <form action="/pedidos" method="POST">
                        @csrf
                        <div class="form-group">
                            <!-- Campo para el ID (puede ser oculto si se autogenera) -->
                            <input type="hidden" name="id" value="">
                        </div>
                        <div class="form-group">
                            <label for="mesa">Número de mesa:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tablet-alt"></i></span>
                                </div>
                                <select class="form-control select2" id="mesa" name="mesa" required>
                                    <option value=""></option>
                                    <option value="1">Mesa 1</option>
                                    <option value="2">Mesa 2</option>
                                    <option value="3">Mesa 3</option>
                                    <option value="4">Mesa 4</option>
                                    <option value="5">Mesa 5</option>
                                    <option value="6">Mesa 6</option>
                                    <option value="7">Mesa 7</option>
                                    <option value="8">Mesa 8</option>
                                    <option value="9">Mesa 9</option>
                                    <option value="10">Mesa 10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-truck-loading"></i></span>
                                </div>
                                <select class="form-control select2" id="estado" name="estado" required>
                                    <option value=""></option>
                                    <option value="1">Pendiente</option>
                                    <option value="2">En preparación</option>
                                    <option value="3">Listo para servir</option>
                                    <option value="4">Entregado</option>
                                    <option value="5">Cancelado</option>
                                    <option value="6">Pagado</option>
                                    <option value="7">Esperando pago</option>
                                    <option value="8">Recogida en persona</option>
                                    <option value="9">Demora</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="forma_pago">Forma de Pago:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                                </div>
                                <select class="form-control select2" id="forma_pago"  name="forma_pago" required>
                                    <option value=""></option>
                                    <option value="1">Tarjeta de crédito</option>
                                    <option value="2">Tarjeta de débito</option>
                                    <option value="3">Transferencia bancaria</option>
                                    <option value="4">PayPal</option>
                                    <option value="5">Efectivo</option>
                                    <option value="6">Cheque</option>
                                    <!-- Agrega más opciones de formas de pago si es necesario -->
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-block btn-success">Guardar</button>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" onclick="window.location.href='{{ route('pedidos.index') }}'" class="btn btn-block btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('layouts.footer')
