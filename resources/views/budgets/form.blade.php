@extends ('layouts.base')

@section('title', 'Crear presupuesto')

@section('main_content')

  <div class="container">
    <h1>Plantilla Presupuesto</h1>
    <div class="row pt-2">
      <div class="col-md-9 shadow p-1 bg-white rounded">
        <h2>Presupuesto #</h2>
        <h5>Cantidad de presupuestos x vendedor</h5>
        <ul class="pl-0 center">
          <li class="d-flex" style="font-size: 0.75rem">
            <div class="p-1 flex-fill d-flex align-items-center border">
              <span><strong>PDT-14</strong></span>
            </div>
            <div class="p-1 flex-fill d-flex align-items-center border">
              <img src="/images/giroItalia.jpg" alt="producto" width="100px">
            </div>
            <div class="p-1 flex-fill d-flex align-items-center border">
              <p>Puesto de trabajo Giro DItalia. Fabricado en melamina de 25mm, terminacion ABS. Incluye bandeja y porta cpu. Medidas Largo 2.15m Ancho 1.75m Alto 0.75m</p>
            </div>
            <div class="p-1 flex-fill d-flex align-items-center border">
              <p>Extencion izquierda.
                CEDRO/NEGRO.
                ACABADOS ABS..</p>
            </div>
            <div class="p-1 flex-fill d-flex align-items-center border">
              <p>1</p>
            </div>
            <div class="p-1 flex-fill d-flex align-items-center border">
              <p>$14250</p>
            </div>
            <div class="p-1 flex-fill d-flex align-items-center border">
              <p>$14250</p>
            </div>

          </li>
        </ul>
      </div>
      @include('layouts.navProfile')
    </div>
  </div>

@endsection









{{-- <form>
<h4>Datos de envío:</h4>
<div class="form-group">
<label for="adressShipping" class="col-form-label">Dirección:</label>
<input type="text" class="form-control" id="adressShipping">
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
<div class="col-md-6">
<label for="hourShipping" class="col-form-label">Horario:</label>
<input type="hour" class="form-control" id="hourShipping">
</div>
<div class="col-md-6">
<label for="detailShipping" class="col-form-label">Aclaraciones:</label>
<textarea class="form-control" id="detailShipping"></textarea>
</div>
</div>
<hr>
<h4>Modo de Pago</h4>
<div class="form-group">
<label for="exampleFormControlSelect1">Tipo de operacion</label>
<select class="form-control" id="exampleFormControlSelect1">
<option>Factura A</option>
<option>Factura B</option>
<option>Factura C</option>
<option>SF</option>
<option>Presupuesto</option>
</select>
</div>
<div class="form-group">
<div class="row">
<legend class="col-form-label col-sm-2 pt-2">Medio de pago</legend>
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
<div class="form-group">
  <label for="exampleFormControlSelect2">Example multiple select</label>
  <select multiple class="form-control" id="exampleFormControlSelect2">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
</div>
<div class="form-group">
  <label for="exampleFormControlTextarea1">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</form> --}}
