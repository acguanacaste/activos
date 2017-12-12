@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Cambiar Estado de Factura de Combustible</div>

				<div class="panel-body">
					<form class="form-horizontal" method="POST" action="/combustibles/{{$combustible->id}}/updatestate" enctype="multipart/form-data">
						<input type="hidden" name="_method" value="PUT"> {{ csrf_field() }} 
                        ¿Está seguro?

						<div class="form-group" align="center"></div>
						<button type="submit" class="btn btn-primary">
							<span class=""></span> Eliminar </button>
						<a href="/combustibles" class="btn btn-default">
							<span class="glyphicon glyphicon-remove"></span> Cancelar </a>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection