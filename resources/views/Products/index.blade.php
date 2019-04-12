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
                <a href="..." class="btn btn-outline-dark">Detalle</a>
                <a href="..." class="btn btn-outline-dark">Agregar</a>
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
        </div>
      </div>
    </div>
  </div>



@endsection
