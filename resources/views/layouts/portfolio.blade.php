<!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Películas y Series</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".filter-app">Películas</li>
              <li data-filter=".filter-card">Series</li>
              <li data-filter=".filter-web">Documentales</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
         @foreach($portfolios as $portfolio)  
          <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->filter }} wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ $portfolio->file }}" class="img-fluid" alt="">
                <a href="{{ $portfolio->file }}" data-lightbox="portfolio" data-title="{{ $portfolio->title }}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <!--<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">{{ $portfolio->title }}</a></h4>
                <p>{{ $portfolio->type }}</p>
              </div>
            </div>
          </div>
        @endforeach  

              

        </div>

      </div>
    </section><!-- #portfolio -->