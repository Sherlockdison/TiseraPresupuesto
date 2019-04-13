@extends ('layouts.base')
@section ('title', 'Productos')
@section ('main_content')


  <div class="container">
    <h2>Productos listados</h2>
    <div class="row" style="padding-top: 2%;">
      <div class="col shadow p-3 mb-5 bg-white rounded">
        <ul>
          <li class="row cardProduct">
            <div class="col-md-4">
              <img src="/images/galapvc.jpg" class="col">
            </div>
            <div class="col-md-8">
              <h4>SILLA GALA PVC NEGRA</h4>
              <h4>$700</h4>
              <p>Silla Estructural Gala PVC, Estructura de caño metalico con asiento y respaldo de PVC reforzado y antideslizante en color negro</p>
              <h5>COD: S29-1</h5>
              <div class="d-flex justify-content-between">
                {{-- se debe otorgar permisos para ver botonera --}}
                <a href="..." class="btn btn-outline-dark">Detalle</a>
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#detailProduct" data-whatever="Cantidad deseada">Agregar</button>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-md-2 offset-md-1 shadow p-3 mb-5 bg-white rounded">
        <div class="row">
          <div class="col-md-12 text-center p-1">
            <h4>Vendedor</h4>
            <img src="/images/ProfilePhoto.jpg" class="col rounded-circle" alt="">
          </div>
          <div class="col-md-12 text-center p-3">
            <h6>Edison Martínez</h6>
            <span>Sarmiento 1373</span>
          </div>
          <div class="col-md-12 mb-1">
            <a href="..." class="btn btn-outline-dark">Crear Presupuesto</a>
          </div>
          <div class="col-md-12 mb-1">
            <button type="button" class="col btn btn-outline-dark" data-toggle="modal" data-target="#quoteShipping" data-whatever="Cantidad deseada">Cotizar Flete</button>
          </div>
          <div class="col-md-12 mb-1">
            <a href="..." class="btn btn-outline-dark">Revisar Presupuesto </a>
          </div>
          <div class="col-md-12 m-1 text-center">
            <a href="..." class="btn btn-outline-danger">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- caja modal 1 Detalle de Producto --}}
  <div class="modal fade" id="detailProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Especificaciones para Gala PVC NEGRA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="quantityName" class="col-form-label">Cantidad:</label>
              <input type="number" class="form-control" id="quantityName">
            </div>
            <div class="form-group">
              <label for="messageText" class="col-form-label">Aclaraciones:</label>
              <textarea class="form-control" id="messageText"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-dark">Agregar</button>
        </div>
      </div>
    </div>
  </div>
  {{--fin caja modal  --}}

  {{-- caja 2 modal Cotizar Flete --}}
  <div class="modal fade" id="quoteShipping" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Dirección de Entrega</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="adressShipping" class="col-form-label">Dirección:</label>
              <input type="text" class="form-control" id="adressShipping">
              <div class="text-right m-1">
                <button type="button" class="btn btn-outline-dark" name="quote">Cotizar</button>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="responsibleShipping" class="col-form-label">Responsable:</label>
                <input type="text" class="form-control" id="responsibleShipping">
              </div>
              <div class="col-md-6">
                <label for="phoneShipping" class="col-form-label">Teléfono:</label>
                <input type="number" class="form-control" id="phoneShipping">
              </div>
            </div>
            <div class="form-group">
              <label for="hourShipping" class="col-form-label">Horario:</label>
              <input type="hour" class="form-control" id="hourShipping">
              <label for="detailShipping" class="col-form-label">Aclaraciones:</label>
              <textarea class="form-control" id="detailShipping"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-dark">Agregar</button>
        </div>
      </div>
    </div>
  </div>
  {{--fin caja modal  --}}

@endsection
