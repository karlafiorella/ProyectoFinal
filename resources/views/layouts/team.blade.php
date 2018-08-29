<!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Equipo</h3>
          <p>Los que hacemos posible tu diversión!!</p>
        </div>

        <div class="row">
        @foreach($teams as $team)  
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{ $team->file }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $team->name }}</h4>
                  <span>{{ $team->position }}</span>
                  <div class="social">
                    <a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $team->facebook }}"><i class="fab fa-facebook"></i></a>
                    <a href="{{ $team->linkin }}"><i class="fab fa-google-plus"></i></a>
                    <a href="{{ $team->google }}"><i class="fab fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @endforeach 
          

          
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->
