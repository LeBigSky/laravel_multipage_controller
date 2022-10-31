<section class="page-section about-heading">
    @foreach ($content as $element)
    @endforeach

    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ $element['img'] }}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">{{ $element['strong'] }}</span>
                            <span class="section-heading-lower">{{ $element['title1'] }}</span>
                        </h2>
                        <p>{{ $element['txt1'] }}</p>
                        <p class="mb-0">{{ $element['txt2'] }} <em>{{ $element['txt3'] }}</em> {{ $element['txt4'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
