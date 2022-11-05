<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
    <form class="bg-gradient-to-r from-cyan-700 to-blue-800 rounded" action="{{ url('sendemail', $data->id) }}" method="POST">
      @csrf
      <div style="padding: 15px">
        <label>Saludo: </label>
        <input type="text" name="greeting" style="color: black" placeholder="Ingresa un saludo" required>
      </div>

      <div style="padding: 15px">
        <label>Contenido: </label>
        <input type="text" name="body" style="color: black" required>
      </div>

      <div style="padding: 15px">
        <label>Texto Alternativo: </label>
        <input type="text" name="actiontext" style="color: black" required>
      </div>

      <div style="padding: 15px">
        <label>URL: </label>
        <input type="text" name="actionurl" style="color: black" required>
      </div>

      <div style="padding: 15px">
        <label>Parte final: </label>
        <input type="text" name="endpart" style="color: black" required>
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