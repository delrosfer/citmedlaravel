<div class="page-section">
    <div class="container rounded" style="background-color: powderblue;">
      <h1 class="text-center mb-5 wow fadeInUp">Nuestros Médicos</h1>

      <div class="owl-carousel wow fadeInUp rounded" style="background-color: lightgoldenrodyellow;" id="doctorSlideshow">

        @foreach($doctor as $doctors)
          <div class="item">
            <div class="card-doctor">
              <div class="header">
                <img height="400px" src="doctorimage/{{ $doctors->image }}" alt="">
                <div class="meta">
                  <a href="#"><span class="mai-call"></span></a>
                  <a href="#"><span class="mai-logo-whatsapp"></span></a>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0">{{ $doctors->name }}</p>
                <span class="text-sm text-grey">{{ $doctors->speciality }}</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>