
@extends('layouts.frontend')

@section('page')
<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Search results: {{ $query }}</h1>
    </div>
</div>



<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            
           @if($product->count() > 0)

                <div class="row">
                    @foreach($product as $product)
                        <div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{ $product->image }}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="">{{$product->name}}</a></h6>
                                    {{-- {{ route('post.single', ['slug' =>$post->slug ]) }} --}}
                                    <div class="product-details-info-price"><h5>Price: ${{ $product->price }}</h5></div>
                                    <p class="product-details-info-text">
                                        {{ $product->description }}
                                    </p>
                                </div>
                            </div>
                    @endforeach
                
                </div>

           @else

                <h2 class="text-center">No post found</h2>
           @endif

            <!-- End Post Details -->
            <br>
            <br>
            <br>
            <!-- Sidebar-->

                </aside>
            </div>

            <!-- End Sidebar-->

        </main>
    </div>
</div>
    
@endsection
<br>
@extends('layouts.boot')