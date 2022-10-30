<section>
  <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
      <span class="site-heading-lower">Business Casual</span>
    </h1>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="{{ route('home') }}">Home
            {{-- <span class="sr-only">(current)</span> --}}
          </a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="{{ route('product') }}">Products</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="{{ route('store') }}">Store</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>
<section class="page-section clearfix">
    @foreach ( $content as $element )
                
    @endforeach
    @foreach ( $contents as $objet )
        
    @endforeach
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ $element['img']}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{ $element['strong'] }}</span>
            <span class="section-heading-lower">{{ $element['title1'] }}</span>
          </h2>
          <p class="mb-3">{{ $element['txt'] }}
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">{{ $element['btn-txt'] }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{{ $objet['strong'] }}</span>
              <span class="section-heading-lower">{{ $objet['title1'] }}</span>
            </h2>
            <p class="mb-0">{{ $objet['txt'] }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>