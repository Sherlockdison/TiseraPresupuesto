<div class="col-md-2 offset-md-1 shadow p-1 bg-white rounded">
  <div class="d-flex flex-column">
    <div class="text-center p-1">
      <h4>Vendedor</h4>
      <img src="/images/ProfilePhoto.jpg" class="rounded-circle" style="width: 9rem" alt="">
      <h6>Edison Martínez</h6>
      <span>Sarmiento 1373</span>
    </div>
    <div class="p-1">
      <a href="..." class="col btn btn-outline-dark">Crear Presupuesto</a>
    </div>
    <div class="p-1">
      <button type="button" class="col btn btn-outline-dark" data-toggle="modal" data-target="#iAgreeProduct" data-whatever="Agregar Producto">Agregar Producto</button>
    </div>
    <div class="p-1">
      <button type="button" class="col btn btn-outline-dark" data-toggle="modal" data-target="#quoteShipping" data-whatever="Cantidad deseada">Cotizar Flete</button>
    </div>
    <div class="p-1">
      <button type="button" class="col btn btn-outline-dark" data-toggle="modal" data-target="#payment" data-whatever="Cantidad deseada">Modalida de pago</button>
    </div>
    <div class="p-1">
      <a href="/budgets" class="col btn btn-outline-dark">Editar Presupuesto</a>
    </div>
    <div class="p-1 text-center">
      <a href="..." class="btn btn-outline-danger">Cerrar Sesión</a>
    </div>
  </div>
</div>

{{-- caja modal 1 Detalle de Producto --}}
<div class="modal fade" id="iAgreeProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega un Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="d-flex my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar producto" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
        </form>
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
            <select class="custom-select">
              <option selected>Tipo de operación</option>
              <option value="1">Factura A</option>
              <option value="2">Factura B</option>
              <option value="3">SF</option>
            </select>
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
            <select class="custom-select">
              <option selected>Concepto de Abono</option>
              <option value="1">Seña</option>
              <option value="2">Pago Total</option>
              <option value="3">Debe todo</option>
            </select>
          </div>
          <hr>
          <div class="form-group">
            <h6 class="text-center">Datos de facturación</h6>
            <div class="row mt-3">
              <div class="col-md-6 pb-2">
                <input type="text" class="form-control" placeholder="Razón social">
              </div>
              <div class="col-md-6 pb-2">
                <input type="text" class="form-control" placeholder="Cuit/cuil">
              </div>
              <div class="col-md-6 pb-2">
                <input type="text" class="form-control" placeholder="Domicilio fiscal">
              </div>
              <div class="col-md-6 pb-2">
                <input type="text" class="form-control" placeholder="Teléfono">
              </div>
              <div class="col-md-12 pb-2">
                <input type="email" class="form-control" placeholder="email@email.com">
              </div>
            </div>
            <div class="form-group">
              <label for="detailPayment" class="col-form-label">Aclaraciones:</label>
              <textarea class="form-control" id="detailPayment"></textarea>
            </div>
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
