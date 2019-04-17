@extends ('layouts.base')
@section ('title', 'Productos')
@section ('main_content')


  <div class="container">
    <h2>Productos listados</h2>
    <div class="row" style="padding-top: 2%;">
      <div class="col-md-9 shadow p-3 mb-5 bg-white rounded">
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
      @include('layouts.navProfile')
    </div>
  </div>

@endsection
