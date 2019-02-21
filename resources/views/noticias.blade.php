    <section class="content-section" id="noticias">
      <div class="container">

        <div class="row no-gutters">
          @foreach($notas as $nota)
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <a class="portfolio-item text-center" href="#" data-toggle="modal" data-target="#nota-{{ $nota->id }}">
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

