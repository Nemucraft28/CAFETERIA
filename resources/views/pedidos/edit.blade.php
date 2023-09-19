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
                    <h3 class="card-title">En este formulario, podrás registrar todos los pedidos solicitados en las
                        mesas.</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Aquí va el formulario -->

                    <form action="{{ route('pedidos.update', ['pedido' => $pedidos->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <!-- Campo para el ID (puede ser oculto si se autogenera) -->
                            <input type="hidden" name="id" value="{{ $pedidos->id }}">
                        </div>
                        <div class="form-group">
                            <label for="mesa">Número de mesa:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-tablet-alt"></i></span>
                                </div>
                                <select class="form-control select2" id="mesa" name="mesa" required>
                                    <option value="" {{ $pedidos->mesa == '' ? 'selected' : '' }}></option>
                                    <option value="1" {{ $pedidos->mesa == '1' ? 'selected' : '' }}>Mesa 1</option>
                                    <option value="2" {{ $pedidos->mesa == '2' ? 'selected' : '' }}>Mesa 2</option>
                                    <option value="3" {{ $pedidos->mesa == '3' ? 'selected' : '' }}>Mesa 3</option>
                                    <option value="4" {{ $pedidos->mesa == '4' ? 'selected' : '' }}>Mesa 4</option>
                                    <option value="5" {{ $pedidos->mesa == '5' ? 'selected' : '' }}>Mesa 5</option>
                                    <option value="6" {{ $pedidos->mesa == '6' ? 'selected' : '' }}>Mesa 6</option>
                                    <option value="7" {{ $pedidos->mesa == '7' ? 'selected' : '' }}>Mesa 7</option>
                                    <option value="8" {{ $pedidos->mesa == '8' ? 'selected' : '' }}>Mesa 8
                                    </option>
                                    <option value="9" {{ $pedidos->mesa == '9' ? 'selected' : '' }}>Mesa 9
                                    </option>
                                    <option value="10" {{ $pedidos->mesa == '10' ? 'selected' : '' }}>Mesa 10
                                    </option>
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
                                    <option value="" {{ $pedidos->estado == '' ? 'selected' : '' }}></option>
                                    <option value="1" {{ $pedidos->estado == '1' ? 'selected' : '' }}>Pendiente
                                    </option>
                                    <option value="2" {{ $pedidos->estado == '2' ? 'selected' : '' }}>En
                                        preparación</option>
                                    <option value="3" {{ $pedidos->estado == '3' ? 'selected' : '' }}>Listo para
                                        servir</option>
                                    <option value="4" {{ $pedidos->estado == '4' ? 'selected' : '' }}>Entregado
                                    </option>
                                    <option value="5" {{ $pedidos->estado == '5' ? 'selected' : '' }}>Cancelado
                                    </option>
                                    <option value="6" {{ $pedidos->estado == '6' ? 'selected' : '' }}>Pagado
                                    </option>
                                    <option value="7" {{ $pedidos->estado == '7' ? 'selected' : '' }}>Esperando
                                        pago</option>
                                    <option value="8" {{ $pedidos->estado == '8' ? 'selected' : '' }}>Recogida en
                                        persona</option>
                                    <option value="9" {{ $pedidos->estado == '9' ? 'selected' : '' }}>Demora
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="forma_pago">Forma de Pago:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                                </div>
                                <select class="form-control select2" id="forma_pago" name="forma_pago" required>
                                    <option value="" {{ $pedidos->estado == '' ? 'selected' : '' }}></option>
                                    <option value="1" {{ $pedidos->estado == '1' ? 'selected' : '' }}>Tarjeta de
                                        crédito</option>
                                    <option value="2" {{ $pedidos->estado == '2' ? 'selected' : '' }}>Tarjeta de
                                        débito</option>
                                    <option value="3" {{ $pedidos->estado == '3' ? 'selected' : '' }}>
                                        Transferencia bancaria</option>
                                    <option value="4" {{ $pedidos->estado == '4' ? 'selected' : '' }}>PayPal
                                    </option>
                                    <option value="5" {{ $pedidos->estado == '5' ? 'selected' : '' }}>Efectivo
                                    </option>
                                    <option value="6" {{ $pedidos->estado == '6' ? 'selected' : '' }}>Cheque
                                    </option>
                                    <!-- Agrega más opciones de formas de pago si es necesario -->
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-block btn-success">Guardar</button>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" onclick="window.location.href='{{ route('pedidos.index') }}'"
                                    class="btn btn-block btn-danger">Cancelar</button>
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

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                        href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                        aria-selected="true">Vitrina</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-one-profile" role="tab"
                                        aria-controls="custom-tabs-one-profile" aria-selected="false">Carrito</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-home-tab">
                                    
                                        <div class="card card-primary">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                  <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                                                </a>
                                              </div>
                                              <div class="col-sm-2">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                  <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="col-sm-4">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                  <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                                                </a>
                                              </div>
                                              <div class="col-sm-2">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                  <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                                                </a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra
                                    purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl
                                    ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus,
                                    elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('layouts.footer')
