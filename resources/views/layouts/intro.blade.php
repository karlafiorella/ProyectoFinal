<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        
        
      @foreach($carrusels as $carrusel)
       <ol class="carousel-indicators">
         <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
       </ol>
       @endforeach

        <div class="carousel-inner" role="listbox">
        @foreach($carrusels as $carrusel)  
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <div class="carousel-background"><img src="{{ $carrusel->file }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>{{ $carrusel->title }}</h2>
                <p>{{ $carrusel->description }}</p>
                <a href="#featured-services" class="btn-get-started scrollto">Conócenos</a>
              </div>
            </div>
          </div>
        @endforeach                

         

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

