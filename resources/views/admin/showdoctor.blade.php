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
            <table class="table table-hover table-bordered table-striped" align="center">
              <tr style="background-color: darkblue;" align="center">
                <th style="padding: 10px; font-size: 20px; color: white;">Nombre del Médico</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Teléfono</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Especialidad</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Consultorio no.</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Image</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Eliminar</th>
                <th style="padding: 10px; font-size: 20px; color: white;">Actualizar</th>
              </tr>
              @foreach($data as $doctor)
              <tr class="bg-teal-500" align="center">
                <td class="text-white" ><b> {{ $doctor->name }} </b></td>
                <td class="text-white" ><b>{{ $doctor->phone }} </b></td>
                <td class="text-white" ><b> {{ $doctor->speciality }} </b></td>
                <td class="text-white" ><b> {{ $doctor->room }} </b></td>
                <td ><img src="doctorimage/{{ $doctor->image }}"></td>
                
                <td>
                  <a onclick="return confirm('¿Está seguro de Eliminar al(a) doctor(a): {{ $doctor->name }}?')" class="btn btn-danger" href="{{ url('deletedoctor', $doctor->id) }}">Eliminar</a>
                </td>
                <td>
                  <a class="btn btn-primary" href="{{ url('updatedoctor', $doctor->id) }}">Actualizar</a>
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