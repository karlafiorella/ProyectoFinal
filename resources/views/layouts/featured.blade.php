<!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">
      @foreach($featureds as $featured) 
          <div class="col-lg-4 box">
            <i class="{{ $featured->imagen }}"></i>
            <h4 class="title"><a href="">{{ $featured->title }}</a></h4>
            <p class="description">{{ $featured->description }}</p>
          </div>
      @endforeach 
          

        </div>
      </div>
    </section><!-- #featured-services -->