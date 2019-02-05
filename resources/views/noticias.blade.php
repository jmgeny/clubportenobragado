    <section class="content-section" id="noticias">
      <div class="container">
        <div class="content-section-heading text-center">
          <h2 class="mb-5">Ultimas noticias</h2>
        </div>
        <div class="row no-gutters">
          @foreach($notas as $nota)
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <a class="portfolio-item" href="#" data-toggle="modal" data-target="#nota-{{ $nota->id }}">
             <h3 class="ml-3">{{ $nota->titulo }}</h3>
             <span class="caption">
              <span class="caption-content">
                <strong>{{ $nota->descripcion }}</strong>
              </span>
            </span>
            <img class="img-fluid" src="{{ Storage::url($nota->avatar) }}" alt="">
          </a>
        </div>
        @include('modal')
        @endforeach         
      </div>
    </div>
  </section>

