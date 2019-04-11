@extends ('layouts.base')
@section ('title', 'Productos')
@section ('main_content')


  <div class="container">
    <div class="row">
      <div class="col">
			<input type="text" name="searchProduct" class="formInput">
			<button type="submit" class="signupBtn search-btn container-form">Buscar</button>
		</div>
    </div>
    <div class="row">
      <div class="col-md-10">
        <ul>
          <li>PRODUCTOS</li>
        </ul>
      </div>
      <div class="col-md-2">
        <ul>
          <li>datos del vendedor</li>
        </ul>
      </div>
    </div>

  </div>



@endsection
