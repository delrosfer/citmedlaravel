<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      
      @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
        	<div>
        		<table class="table table-hover table-bordered table-striped dt-responsive nowrap" align="center">
        			<tr style="background-color: darkblue;" align="center">
        				<th style="padding: 10px; font-size: 20px; color: white;">Paciente</th>
        				<th style="padding: 10px; font-size: 20px; color: white;">Correo Elect.</th>
        				<th style="padding: 10px; font-size: 20px; color: white;">Teléfono</th>
        				<th style="padding: 10px; font-size: 20px; color: white;">Nombre del Médico</th>
        				<th style="padding: 10px; font-size: 20px; color: white;">Fecha</th>
        				<th style="padding: 10px; font-size: 20px; color: white;">Comentarios</th>
        				<th style="padding: 10px; font-size: 20px; color: white;">Status</th>
        				<th style="padding: 10px; font-size: 20px; color: white;">Aprobar</th>
        				<th style="padding: 10px; font-size: 20px; color: white;">Cancelar</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Enviar Correo</th>
        			</tr>

        			@foreach($data as $appoint)
        			<tr class="bg-yellow-400" align="center">
        				<td>{{ $appoint->name }}</td>
        				<td>{{ $appoint->email }}</td>
        				<td>{{ $appoint->phone }}</td>
        				<td>{{ $appoint->doctor }}</td>
        				<td>{{ $appoint->date }}</td>
        				<td>{{ $appoint->message }}</td>
        				<td>{{ $appoint->status }}</td>
        				<td>
        					<a class="btn btn-primary" href="{{ url('approved', $appoint->id) }}">Aprobar</a>
        				</td>
        				<td>
        					<a class="btn btn-danger" href="{{ url('canceled', $appoint->id) }}">Cancelar</a>
        				</td>
                <td>
                  <a class="btn btn-primary" href="{{ url('emailview', $appoint->id) }}">Confirmar Correo</a>
                </td>
        			</tr>
        			@endforeach
        		</table>
        	</div>	
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>