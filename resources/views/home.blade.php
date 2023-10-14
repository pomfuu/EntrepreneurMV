<x-app>
    <div class="pb-5" style="font-family: 'Inter'; background-color: #121212;">
    <section>
        <div class="container-fluid carousel-container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2500">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('/storage/images/asset_website/slideshow1.png') }}" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('/storage/images/asset_website/slideshow2.png') }}" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('/storage/images/asset_website/slideshow3.png') }}" alt="...">
                </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5 text-white">
            <div class="row">
                <div class="col">
                <h4 class="fw-semibold mb-4">Recommended Cosplay</h4>
                <div class="col-12">
                    <div class="row">
                        @foreach ($recomendeds as $product)
                            <div class="col">
                                <a href="{{ route('products.show', $product) }}" class="text-decoration-none text-white">
                                        <img

                                        @if(isset($product->image))
                                            src="{{ url('/storage/images/products/' . $product->image) }}"
                                        @else
                                            src="{{ url('/storage/images/asset_website/crossboard.png') }}"
                                        @endif

                                        class="rounded float custom-image-size mb-3" alt="Image">
                                        <h5>{{ $product->name }}</h5>
                                        <p style="color: #707070;">Rp{{ number_format($product->price,0,',','.') }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5 text-white">
              <div class="row">
                <div class="col">
                  <h4 class="fw-semibold mb-4">Best Selling</h4>
                  <div class="col-12">
                    <div class="row">
                        @foreach ($sellings as $product)
                            <div class="col">
                                <a href="{{ route('products.show', $product) }}" class="text-decoration-none text-white">
                                        <img

                                        @if(isset($product->image))
                                            src="{{ url('/storage/images/products/' . $product->image) }}"
                                        @else
                                            src="{{ url('/storage/images/asset_website/crossboard.png') }}"
                                        @endif

                                        class="rounded float custom-image-size mb-3" alt="Image">
                                        <h5>{{ $product->name }}</h5>
                                        <p style="color: #707070;">Rp{{ number_format($product->price,0,',','.') }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-white">
              <div class="row">
                <div class="col">
                  <h4 class="fw-semibold mb-4">Popular Anime Cosplay</h4>
                  <div class="col-12">
                    <div class="row">
                        @foreach ($populars as $product)
                            <div class="col">
                                <a href="{{ route('products.show', $product) }}" class="text-decoration-none text-white">
                                        <img

                                        @if(isset($product->image))
                                            src="{{ url('/storage/images/products/' . $product->image) }}"
                                        @else
                                            src="{{ url('/storage/images/asset_website/crossboard.png') }}"
                                        @endif

                                        class="rounded float custom-image-size mb-3" alt="Image">
                                        <h5>{{ $product->name }}</h5>
                                        <p style="color: #707070;">Rp{{ number_format($product->price,0,',','.') }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    </div>
</x-app>
