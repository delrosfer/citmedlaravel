<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      
      @include('admin.navbar')

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <div class="container " style="padding-top: 100px">

        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-bs-dismiss="alert">
              X
            </button>
            {{ session()->get('message') }}
          </div>

        @endif
        <div class="card-body rounded bg-blue-400">
          <form class="bg-orange-400 text-black rounded" action="{{ url('editdoctor', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Nombre del Médico</label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" value="{{ $data->name }}">
            </div>

            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Teléfono</label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="phone" value="{{ $data->phone }}">
            </div>

            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Especialidad</label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="speciality" value="{{ $data->speciality }}">
            </div>

            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">No. de Consultorio</label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="room" value="{{ $data->room }}">
            </div>

            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Imagen anterior</label>
              <img height="100" width="100" src="doctorimage/{{ $data->image }}">
            </div>

            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Cambiar Imagen</label>
              <input type="file" name="file">
            </div>
            <br>
            <div>
              <input type="submit" name="" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>    
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>