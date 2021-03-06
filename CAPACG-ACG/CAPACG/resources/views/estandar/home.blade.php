@extends('estandar.estandar') @section('content')
<div class="container">


	<div id="homeContentCol" class="col-md-10 col-md-offset-1">
		<div class="row">

			<br>
			<h2 class="text-center">Menú Principal</h2>
			<br>
			<div class="col-sm-4 text-center">
				<div class="thumbnail">

					<span id="inicio" class="fa-stack fa-4x">
						<i id="inicio" class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-university fa-stack-1x fa-inverse"></i>
					</span>
					<p>
						<strong>Infraestructuras</strong>
					</p>
					<p>En este módulo se pueden ver todos los activos de tipo infraestructura asignados a mi usuario.</p>
					<a href="estandar/infraestructurasAsignadas" class="btn hbtn">Ir al módulo</a>
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<div class="thumbnail">

					<span id="inicio" class="fa-stack fa-4x">
						<i id="inicio" class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-television fa-stack-1x fa-inverse"></i>
					</span>
					<p>
						<strong>Inmuebles</strong>
					</p>
					<p>En este módulo se pueden ver todos los activos de tipo inmueble asignados a mi usuario.</p>
					<a href="estandar/inmueblesAsignados" class="btn hbtn">Ir al módulo</a>
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<div class="thumbnail">

					<span id="inicio" class="fa-stack fa-4x">
						<i id="inicio" class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-bug fa-stack-1x fa-inverse"></i>
					</span>
					<p>
						<strong>Semovientes</strong>
					</p>
					<p>En este módulo se pueden ver todos los activos de tipo semoviente asignados a mi usuario.</p>
					<a href="estandar/semovientesAsignados" class="btn hbtn">Ir al módulo</a>
				</div>
			</div>

			<div class="col-sm-4 text-center">
				<div class="thumbnail">

					<span id="inicio" class="fa-stack fa-4x">
						<i id="inicio" class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-car fa-stack-1x fa-inverse"></i>
					</span>
					<p>
						<strong>Vehículos</strong>
					</p>
					<p>En este módulo se pueden ver todos los activos de tipo vehículo asignados a mi usuario.</p>
					<a class="btn hbtn" href="estandar/vehiculos">Ir al módulo</a>
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<div class="thumbnail">

					<span id="inicio" class="fa-stack fa-4x">
						<i id="inicio" class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-file-text fa-stack-1x fa-inverse"></i>
					</span>
					<p>
						<strong>Combustibles</strong>
					</p>
					<p>En este módulo se puede administrar todas las facturas de combustibles hechas a un vehiculo</p>
					<a href="estandar/combustibles" class="btn hbtn">Ir al módulo</a>
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<div class="thumbnail">

					<span id="inicio" class="fa-stack fa-4x">
						<i id="inicio" class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-users fa-stack-1x fa-inverse"></i>
					</span>
					<p>
						<strong>Usuarios</strong>
					</p>
					<p>En este módulo se pueden ver los usuarios pertenecientes al sistema</p>
					<a href="estandar/usuarios" class="btn hbtn">Ir al módulo</a>
				</div>
			</div>

		</div>
	</div>

</div>

@endsection