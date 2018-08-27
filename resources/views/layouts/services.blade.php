<!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Servicios</h3>
          <p></p>
        </header>

        <div class="row">
          @foreach($servicios as $servicio) 
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="{{ $servicio->imagen }}"></i></div>
            <h4 class="title"><a href="">{{ $servicio->title }}</a></h4>
            <p class="description">{{ $servicio->description }}</p>
          </div>
          @endforeach 
          
        </div>

      </div>
    </section><!-- #services -->