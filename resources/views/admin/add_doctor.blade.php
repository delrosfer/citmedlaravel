<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
      label{
        display: inline-block;
        width: 200px;
      }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      
      @include('admin.navbar')


<div class="container-fluid page-body-wrapper">

  <div class="container" align="center" style="padding-top: 100px">
    @if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-bs-dismiss="alert">
        X
      </button>
      {{ session()->get('message') }}
    </div>

    @endif
    <form class="bg-gradient-to-r from-cyan-700 to-blue-800 rounded" action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div style="padding: 15px">
        <label>Nombre del Médico: </label>
        <input type="text" name="name" style="color: black" placeholder="Ingresa el nombre" required>
      </div>

      <div style="padding: 15px">
        <label>Telefono: </label>
        <input type="number" name="phone" style="color: black" placeholder="Ingresa el telefono" required>
      </div>

      <div style="padding: 15px">
        <label>Especialidad: </label>
        <select name="speciality" style="color: black; width: 230px" required>
          <option >--Seleccione--</option>
          <option value="Dermatologo">Dermatologo</option>
          <option value="Cardiologo">Cardiologo</option>
          <option value="Oftalmologo">Oftalmologo</option>
          <option value="Otorrinolaringólogo">Otorrinolaringólogo</option>
        </select>
      </div>

      <div style="padding: 15px">
        <label>Consultorio no.: </label>
        <input type="number" name="room" style="color: black" placeholder="Ingresa el consultorio" required>
      </div>

      <div style="padding: 15px">
        <label>Fotografía del Médico: </label>
        <input type="file" name="file" required>
      </div>

      <div style="padding: 15px">
        
        <input type="submit" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
        <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>