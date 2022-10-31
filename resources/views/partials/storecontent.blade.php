
<section class="page-section cta">
    @foreach ($content as $item)
  @endforeach
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Come On In</span>
                        <span class="section-heading-lower">We're Open</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        @foreach ($dayz as $element)
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{ $element['day'] }}
                                <span class="ml-auto">{{ $element['time'] }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <p class="address mb-5">
                        <em>
                            <strong>{{ $item['add1'] }}</strong>
                            <br>
                            {{ $item['add2'] }}
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>{{ $item['call'] }}</em>
                        </small>
                        <br>
                        {{ $item['number'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section about-heading">
  @foreach ($content2 as $element )
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
            <p class="mb-0">{{ $element['txt2'] }} <em>{{  $element['txt3'] }}</em> {{  $element['txt4'] }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

