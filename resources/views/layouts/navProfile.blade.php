<div class="col-md-2 offset-md-1 shadow p-3 mb-5 bg-white rounded">
  <div class="row">
    <div class="col-md-12 text-center p-1">
      <h4>Vendedor</h4>
      <img src="/images/ProfilePhoto.jpg" class="col-md-12 rounded-circle" alt="">
    </div>
    <div class="col-md-12 text-center p-3">
      <h6>Edison Martínez</h6>
      <span>Sarmiento 1373</span>
    </div>
    <div class="col-md-12 mb-1">
      <a href="..." class="col btn btn-outline-dark">Crear Presupuesto</a>
    </div>
    <div class="col-md-12 mb-1">
      <button type="button" class="col btn btn-outline-dark" data-toggle="modal" data-target="#quoteShipping" data-whatever="Cantidad deseada">Cotizar Flete</button>
    </div>
    <div class="col-md-12 mb-1">
      <button type="button" class="col btn btn-outline-dark" data-toggle="modal" data-target="#payment" data-whatever="Cantidad deseada">Modalida de pago</button>
    </div>
    <div class="col-md-12 mb-1">
      <a href="/budgets" class="col btn btn-outline-dark">Editar Presupuesto</a>
    </div>
    <div class="col-md-12 m-1 text-center">
      <a href="..." class="btn btn-outline-danger">Cerrar Sesión</a>
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

{{-- caja 2 modal Modalidad de pago --}}
<div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Modo de pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary">Tipo de operación</button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">A</a>
                  <a class="dropdown-item" href="#">B</a>
                  <a class="dropdown-item" href="#">SF</a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Presupuesto</a>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-2">Medio</legend>
              <div class="col-sm-10 d-flex flex-wrap">
                <div class="form-check flex-fill p-1 m-1">
                  <input class="form-check-input" type="radio" name="gridRadios" id="cash" value="option1" checked>
                  <label class="form-check-label" for="cash">
                    Efectivo
                  </label>
                </div>
                <div class="form-check flex-fill p-1 m-1">
                  <input class="form-check-input" type="radio" name="gridRadios" id="card" value="option2">
                  <label class="form-check-label" for="card">
                    Tarjeta
                  </label>
                </div>
                <div class="form-check flex-fill p-1 m-1">
                  <input class="form-check-input" type="radio" name="gridRadios" id="deposit" value="option2">
                  <label class="form-check-label" for="deposit">
                    Depósito
                  </label>
                </div>
                <div class="form-check flex-fill p-1 m-1">
                  <input class="form-check-input" type="radio" name="gridRadios" id="check" value="option2">
                  <label class="form-check-label" for="check">
                    Cheque al Día
                  </label>
                </div>
                <div class="form-check flex-fill p-1 m-1 disabled">
                  <input class="form-check-input" type="radio" name="gridRadios" id="transfer" value="option3" disabled>
                  <label class="form-check-label" for="transfer">
                    Transferencia
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary">Concepto</button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Seña</a>
                  <a class="dropdown-item" href="#">Total pago</a>
                  <a class="dropdown-item" href="#">Contraentrega</a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Debe todo</a>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="detailPayment" class="col-form-label">Aclaraciones:</label>
            <textarea class="form-control" id="detailPayment"></textarea>
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
