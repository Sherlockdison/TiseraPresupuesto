@extends ('layouts.base')

@section('title', 'Presupuesto')

@section('main_content')

  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
          <h4>aca va tipo de operacion</h4>
        </div>
        <div class="col-md-8">
          <h1>Presupuesto, estaria bueno que cambie segun eleccion</h1>
        </div>
        <div class="col-md-2">
          <h4>aca va numeracion automatica</h4>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6">

          <h2>Logotipo y Datos de cada sucursal</h2>

        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h3>DATOS CLIENTE</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h4>Razon Social</h4>
            </div>
            <div class="col-md-8">
              <h4>esto esta vacio</h4>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h4>Domicilio Fiscal</h4>
            </div>
            <div class="col-md-8">
              <h4>esto esta vacio</h4>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h4>tELEFONO</h4>
            </div>
            <div class="col-md-8">
              <h4>esto esta vacio</h4>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h4>CUIT</h4>
            </div>
            <div class="col-md-8">
              <h4>esto esta vacio</h4>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h4>EMAIL</h4>
            </div>
            <div class="col-md-8">
              <h4>esto esta vacio</h4>
            </div>
          </div>

        </div>

      </div>

      <div class="row">
        <div class="col-md-6">
          <h3>fecha</h3>
        </div>
        <div class="col-md-6">
          <h3>hora</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          {{-- quiero agregar campos y este div sirve para otra columna y mostrar segun--}}
          <form role="form">
            <div class="row">
              <div class="col-md-2">
                <label for="Codigo">Codigo:</label>
                <input type="text" class="form-control" id="Codigo">
              </div>
              <div class="col-md-2">
                <label for="Cantidad">Cantidad:</label>
                <input type="number" class="form-control" id="Cantidad">
              </div>
              <div class="col-md-4">
                <label for="Aclaraciones">Aclaraciones:</label>
                <input type="text" class="form-control" id="Aclaraciones">
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-default">Agregar</button>
              </div>
            </div>
          </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1" style="background-color:#aaa">
        <P>CODIGO</P>
      </div>
      <div class="col-md-3" style="background-color:#bbb">
        <P>DESCRIPCION</P>
      </div>
      <div class="col-md-1" style="background-color:#aaa">
        <P>CANTIDAD</P>
      </div>
      <div class="col-md-2" style="background-color:#bbb">
        <P>ACLARACIONES</P>
      </div>
      <div class="col-md-3" style="background-color:#aaa">
        <P>FOTO</P>
      </div>
      <div class="col-md-1" style="background-color:#bbb">
        <P>PRECIO/U</P>
      </div>
      <div class="col-md-1" style="background-color:#aaa">
        <P>TOTAL PRODUCTO</P>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1" style="background-color:#aaa">
        <P>f52</P>
      </div>
      <div class="col-md-3" style="background-color:#bbb">
        <P>sillon royal tatatatatat</P>
      </div>
      <div class="col-md-1" style="background-color:#aaa">
        <P>2</P>
      </div>
      <div class="col-md-2" style="background-color:#bbb">
        <P>todo en color marron oscurrito</P>
      </div>
      <div class="col-md-3" style="background-color:#aaa">
        <P>Fotiqui</P>
      </div>
      <div class="col-md-1" style="background-color:#bbb">
        <P>4400</P>
      </div>
      <div class="col-md-1" style="background-color:#aaa">
        <P>8800</P>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p>DIRECCION DE ENTREGA</p>
        <div class="row">
          <p>observaciones</p>
          <hr>
          <p>horario de entrega</p>
        </div>
      </div>
      <div class="col-md-6">
        <p>NOMBRE DE CONTACTO</p>
        <div class="row">
          <div class="col-md-9">
            <p>Envío</p>
          </div>
          <div class="col-md-3">
            <p>$$$$$$</p>
          </div>
          <div class="col-md-9">
            <p>SUBTOTAL</p>
          </div>
          <div class="col-md-3">
            <p>$$$$$$</p>
          </div>

          <div class="col-md-8">
            <p>RECARGO</p>
          </div>
          <div class="col-md-1">
            <p>15%</p>
          </div>
          <div class="col-md-3">
            <p>$$$$$$</p>
          </div>
          <div class="col-md-8">
            <p>I.V.A. %</p>
          </div>
          <div class="col-md-1">
            <p>21%</p>
          </div>
          <div class="col-md-3">
            <p>$$$$$$</p>
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>FORMAS DE PAGO</p>
        </div>
        <div class="col-md-3">
          <p>TOTAL FINAL</p>
        </div>
        <div class="col-md-3">
          <p>$$$$$</p>
        </div>
      </div>
      <div class="row">
        <p>VALOR CONVERTIDO A LETRAS BUSCAR FORMAS</p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>las imagenes son a mido ilistrativo</p>
        </div>
        <div class="col-md-6">
          <p>Nombre del vendedor logeado</p>
        </div>
      </div>         {{-- div col-md-12 --}}
  </div>
  {{-- div container --}}
</div>

@endsection
