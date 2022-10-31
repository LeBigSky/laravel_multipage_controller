<section class="page-section clearfix">
    @foreach ($content as $element)
    @endforeach
    @foreach ($contents as $objet)
    @endforeach
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ $element['img'] }}" alt="">
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
