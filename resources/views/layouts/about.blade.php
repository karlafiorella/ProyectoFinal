<!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>¿Quienes somos?</h3>
          <p></p>
        </header>
        
        <div class="row about-cols">
         @foreach($abouts as $about)  
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{ $about->file }}" alt="" class="img-fluid">
                <div class="icon"><i class="{{ $about->imagen }}"></i></div>
              </div>
              <h2 class="title"><a href="#">{{ $about->title }}</a></h2>
              <p>
                {{ $about->description }}
              </p>
            </div>
          </div>
          @endforeach   
                   

        </div>

      </div>
    </section><!-- #about -->