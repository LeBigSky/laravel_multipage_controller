<section class="page-section">
  @foreach ($item as $i => $obj)
  
      @if ($i%2 === 0 )
 <div class="container">
  <div class="product-item">
    <div class="product-item-title d-flex">
      <div class="bg-faded p-5 d-flex ml-auto rounded">
        <h2 class="section-heading mb-0">
          <span class="section-heading-upper">{{ $obj['strong'] }}</span>
          <span class="section-heading-lower">{{ $obj['title'] }}</span>
        </h2>
      </div>
    </div>
    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ $obj['img'] }}" alt="">
    <div class="product-item-description d-flex mr-auto">
      <div class="bg-faded p-5 rounded">
        <p class="mb-0">{{ $obj['text'] }}</p>
      </div>
    </div>
  </div>
</div>
<br>
 @else
 <div class="container">
  <div class="product-item">
    <div class="product-item-title d-flex">
      <div class="bg-faded p-5 d-flex mr-auto rounded">
        <h2 class="section-heading mb-0">
          <span class="section-heading-upper">{{ $obj['strong'] }}</span>
          <span class="section-heading-lower">{{ $obj['title'] }}</span>
        </h2>
      </div>
    </div>
    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ $obj['img'] }}" alt="">
    <div class="product-item-description d-flex ml-auto">
      <div class="bg-faded p-5 rounded">
        <p class="mb-0">{{ $obj['text'] }}</p>
      </div>
    </div>
  </div>
</div>
<br>
@endif
   @endforeach
</section>