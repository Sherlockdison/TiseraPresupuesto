@extends ('layouts.base')

@section('title', 'Presupuesto')

@section('main_content')

  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
          <select class="custom-select custom-select-lg">
            <option selected>Operación</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C/F</option>
          </select>
        </div>
        <div class="col-md-8">
          <select class="custom-select custom-select-lg mb-3">
            <option selected>PRESUPUESTO</option>
            <option value="1">BOLETA PEDIDO A</option>
            <option value="2">BOLETA PEDIDO B</option>
            <option value="3">BOLETA PEDIDO C/F</option>
          </select>
        </div>
        <div class="col-md-2">

            <div class="custom-select-lg">
              <strong>
              25499
              </strong>
            </div>

        </div>
      </div>


      <div class="row">
        <div class="col-md-6 border">
          <div class="row">
            <div class="col-md-6">
              <img src="/images/logoTisera.png" alt="..." class="img-thumbnail border-0">
            </div>
            <div class="col-md-6">
              <h5>Tisera S.A. Muebles de oficina</h5>
              <h5>Sarmiento 1373 CABA</h5>
              <h5>CUIT: 30-55480730-1</h5>
              <h5>TEL: 4373-3944</h5>
              <h5>esteban@tisera.com</h5>
              <h5><a href="www.tisera.com">www.tisera.com</a></h5>
            </div>
          </div>
        </div>

        <div class="col-md-6 border">
          <div class="row">
            <div class="col-md-6">
              <h4>DATOS CLIENTE</h4>
            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Razon Social</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Domicilio Fiscal</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">CUIT</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
