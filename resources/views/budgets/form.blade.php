@extends ('layouts.base')

@section('title', 'Presupuesto')

@section('main_content')

  <div class="container">
    <div class="col-md-12">
      <form class="budgetForm" method="POST" action="{{ route('budgets.store') }}" enctype="multipart/form-data">
            @csrf
      <div class="row mb-3">
        <div class="col-md-2">
          <select class="custom-select custom-select-lg">
            <option selected>Operación</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C/F</option>
          </select>
        </div>
        <div class="col-md-8">
          <div class="textCen">
            <h4>Presupuesto</h4>
          </div>
        </div>
        <div class="col-md-2">
          <div class="custom-select-lg textCen">
            <strong>25499 </strong>
          </div>
        </div>
      </div>


      <div class="row mb-3">
        <div class="col-md-6 ">
          <div class="row mb-5 border rounded  ">
            <div class="col-md-6 textRtl">
              <img src="/images/logoTisera.png" alt="..." class="img-thumbnail border-0">
            </div>

            <div class="col-md-6 textRtl">
              <h5>Tisera S.A. Muebles de oficina</h5>
              <p>Sarmiento 1373 CABA <br>
              CUIT: 30-55480730-1 <br>
              TEL: 4373-3944 <br>
              esteban@tisera.com <br>
              <a href="www.tisera.com">www.tisera.com</a></p>
            </div>
          </div>
          <div class="row border rounded ">
            <div class="col-md-6">
              <p>{{date('d-m-y')}}</p>
            </div>
            <div class="col-md-6">
              <p>{{date('H:i:s')}}</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 ">
          <div class="row border rounded  padRigLef">

            <div class="col-md-12 textCen">
              <h5>Datos del Cliente</h5>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="name">Razon Social</span>
              </div>
              <input id="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="name">
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

      </div>


      <div class="row ">
          {{-- quiero agregar campos y este div sirve para otra columna y mostrar segun--}}
        <form role="form">
          <div class="row">
            <div class="col-md-2">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Codigo:</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <div class="col-md-2">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Cantidad:</span>
                </div>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <div class="col-md-7">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Aclaraciones:</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
            </div>
            <div class="col-md-1">
              <button type="submit" class="btn btn-danger">Agregar</button>
            </div>
          </div>
        </form>
      </div>

      <div class="row mb-1 headTab">
        <div class="col-md-1">
          <h6>Codigo</h6>
        </div>
        <div class="col-md-3">
          <h6>Descripción</h6>
        </div>
        <div class="col-md-1">
          <h6>Cantidad</h6>
        </div>
        <div class="col-md-2">
          <h6>Aclaraciones</h6>
        </div>
        <div class="col-md-3">
          <h6>Imagen</h6>
        </div>
        <div class="col-md-1">
          <h6>Precio/u</h6>
        </div>
        <div class="col-md-1">
          <h6>Total</h6>
        </div>
      </div>
{{-- aca va el eiterador de objetos traido desde la base --}}
      <div class="row mb-3">
        <div class="col-md-1 border listProducts">
          <h6>F52</h6>
        </div>
        <div class="col-md-3 border listProducts">
          <p><strong>sillon royal tatatatatat</strong></p>
        </div>
        <div class="col-md-1 border listProducts">
          <h4>2</h4>
        </div>
        <div class="col-md-2 border listProducts">
          <p><em>todo en color marron oscurrito</em></p>
        </div>
        <div class="col-md-3 border listProducts">
          <img src="" alt="">
        </div>
        <div class="col-md-1 border listProducts">
          <p>4400</p>
        </div>
        <div class="col-md-1 border listProducts">
          <p>8800</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="headTab ">
            <h6 class="">Datos de Envío</h6>
          </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Av. corrientes 7542" aria-label="Av. corrientes 7542" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cotizar</button>
              </div>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Observaciones</span>
              </div>
              <textarea class="form-control" aria-label="Observaciones"></textarea>
            </div>

          <select class="custom-select mb-3">
            <option selected>Seleccione un horario</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

          <select class="custom-select mb-3">
            <option selected>Seleccione forma de pago</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-md-6">
          <div class="headTab ">
            <h6 class="">Nombre de Contacto</h6>
          </div>
            <form>
              <div class="form-row mb-3">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="col">
                  <input type="number" class="form-control" placeholder="Numero Celular">
                </div>
              </div>
            </form>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Envío..........</span>
              </div>
              <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Subtotal........</span>
              </div>
              <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recargo</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">15% 6 cuotas</a>
                  <a class="dropdown-item" href="#">50% 12 cuotas</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div role="separator" class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
              <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">IVA........</span>
              </div>
              <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">TOTAL FINAL....</span>
              </div>
              <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-2 border rounded headTab">
            <h6>SETECIENTOS CUARENTA MIL DOCIENTOS TRES PESOS</h6>
          </div>


        <div class="col-md-6 border rounded headTab">
          <p>las imagenes son a mido ilistrativo</p>
        </div>
        <div class="col-md-6 border rounded headTab">
          <p>Nombre del vendedor logeado</p>
        </div>
        <button type="submit" name="button" style="with:80px;"></button>
      </form>
    </div>          {{-- div col-md-12 --}}
  </div>       {{-- div container --}}
</div>

@endsection
