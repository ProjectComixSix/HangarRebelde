@extends('layouts.app')

@section('content')

    <x-header />
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-column flex-md-row mt-5 align-items-center align-items-md-start">
                <div class="ct-imgShow">
                    <img class="imgShow" src="{{ asset('storage') . '/' . $product->image1 }}" alt="">
                </div>
                <div class="card-body p-0 mx-md-4 my-4 my-md-0 ct-infoShow">
                    <h5 class="card-title font-weight-bold txtTitleShow">{{ $product->title }}</h5>
                    <div class="d-flex flex-row flex-wrap align-items-center">
                        <h6 class="extraShow font-weight-bold mr-2">Precio: </h6>
                        <p class="card-title extraShow font-weight-bold txtPriceShow">{{ $product->price }} &#8364 </p>
                        @if($product->isAvailable)
                        <h6 class="extraShow font-weight-bold mx-2"> | Disponible: Sí</h6>
                        @else
                        <h6 class="extraShow font-weight-bold mx-2"> | No Disponible: No</h6>
                        @endif
                        <h6 class="extraShow font-weight-bold mx-2"> | Añadir al carrito</h6>
                        <img class="icoCardShow m-1 mb-2" src="<?php echo asset('storage/img/shopping-cart.svg'); ?>" alt="Flaticon">
                        {{-- @if($product->canReserve) --}}
                        <h6 class="extraShow font-weight-bold mx-2"> | Reservar</h6>
                        {{-- @endif --}}
                        
                    </div>
                    <h6 class="card-title font-weight-bold mt-3">Autores:</h6>
                    <div class="d-flex flex-row flex-wrap align-items-center">
                        <h6 class="extraShow mr-1">{{ $product->author1 }}  </h6>
                        {{-- <p class="card-title extraShow">{{ $product->isbn }}</p> --}}
                        @if($product->author2)
                        <h6 class="extraShow mr-1">,  {{ $product->author2 }}  </h6>
                        @endif
                        @if($product->author3)
                        <h6 class="extraShow mr-1">,  {{ $product->author3 }}  </h6>
                        @endif
                        @if($product->author3)
                        <h6 class="extraShow mr-1">,  {{ $product->author4 }}  </h6>
                        @endif
                        @if($product->author3)
                        <h6 class="extraShow mr-1">,  {{ $product->author5 }}  </h6>
                        @endif
                        @if($product->author3)
                        <h6 class="extraShow mr-1">,  {{ $product->author6 }}  </h6>
                        @endif
                        {{-- <p class="card-title extraShow">{{ $product->categoryMain }}</p> --}}
                    </div>
                    <p class="card-title">{{ $product->author }}</p>
                    <h6 class="card-title font-weight-bold">Editorial:</h6>
                    <p class="card-title">{{ $product->editorial }}</p>
                    <h6 class="card-title font-weight-bold">Descripción:</h6>
                    <p class="card-title">{{$product->description}}</p>
                    <div class="d-flex flex-row flex-wrap align-items-center">
                        <h6 class="extraShow font-weight-bold mr-2">ISBN</h6>
                        <p class="card-title extraShow">{{ $product->isbn }}</p>
                        <h6 class="extraShow font-weight-bold mx-2"> | Categoría Principal:</h6>
                        <p class="card-title extraShow">{{ $product->categoryMain }}</p>
                    </div>
                    <div class="d-flex flex-row mt-3">
                        <img class="mr-1" src="{{ asset('storage') . '/' . $product->image1 }}" width=90 alt="">
                        <img class="mx-1" src="{{ asset('storage') . '/' . $product->image2 }}" width=90 alt="">
                        <img class="mx-1" src="{{ asset('storage') . '/' . $product->image3 }}" width=90 alt="">
                        <div class="d-flex flex-column justify-content-end">
                            <div class="d-flex flex-row align-items-center flex-wrap">
                                <h6 class="extraShow font-weight-bold mx-2">Formato:</h6>
                                <p class="card-title extraShow">{{ $product->format }}</p>
                            </div>
                            <div class="d-flex flex-row align-items-center flex-wrap">
                                <h6 class="extraShow font-weight-bold mx-2">Páginas:</h6>
                                <p class="card-title extraShow">{{ $product->pages }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <a href="{{ route('edit', ['id'=>$product->id]) }}"><button type="text" class="input-group-text">Edit</button></a>
                <form action="{{ route('delete', ['id'=>$product->id]) }}" method="post">
                @method('delete')
                @csrf 
                    <input type="submit" class="input-group-text ml-2" onclick="return confirm('Estás seguro de que quieres borrar este item?')" value="Delete">
                </form>
            </div>
            <center>
                <br>
                <br>
                <div>
                    <h2 class="card-title font-weight-bold txtTitleShow">Productos relacionados</h2>
                </div>

            </center>
            <div class="row justify-content-center">

                @foreach ($productrelations as $productrelation)
                    <div class="ct-product m-3">
                        <div class="ct-img">
                            <a href="{{ route('show', ['id' => $productrelation->id]) }}">
                                <img class="imgCard" src="{{ asset('storage') . '/' . $productrelation->image1 }}"
                                    alt="">
                            </a>
                        </div>
                        <div class="ct-info d-flex flex-row align-items-center p-1">
                            <div class="ct-txt d-flex flex-column justify-content-center">
                                <div class="txtTitle d-flex flex-row align-items-center">
                                    <p class="txtInfoTitle m-0">{{ $productrelation->title }} </p>
                                    <p class="txtPoints m-0">...</p>
                                </div>
                                <p class="txtPrice">{{ $productrelation->price }} &#8364</p>
                            </div>
                            <div class="separator"></div>
                            <img class="icoCard m-1" src="<?php echo asset('storage/img/carrito-negro.png'); ?>" alt="Flaticon">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-footer />

@endsection
