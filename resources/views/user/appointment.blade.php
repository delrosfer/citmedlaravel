<div class="page-section">
    <div class="container bg-emerald-200" style="background-color: powderblue;">
      <h1 class="text-center wow fadeInUp">{{ __('Agenda tu cita Médica') }}</h1>

      <form class="main-form bg-amber-500" action="{{ url('appointment') }}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control rounded" name="name" placeholder="Ingresa tu Nombre Completo" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control rounded" name="email" placeholder="Ingresa tu Correo Electrónico.." required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control rounded" name="date" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select rounded" required>

              <option>**Selecciona un médico**</option>
              @foreach($doctor as $doctors)
                <option value="{{ $doctors->name }}">{{ $doctors->name }}**Especialidad** {{ $doctors->speciality }}</option>
              @endforeach

            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name="number" type="text" class="form-control rounded" placeholder="Ingresa tu Numero Telefónico.." required maxlength="10">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control rounded" rows="4" placeholder="Indicaciones.."></textarea>
          </div>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full"><b>{{ __('Generar Consulta') }}</b></button>
      </form>
    </div>
  </div> <!-- .page-section -->