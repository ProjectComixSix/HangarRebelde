@extends('layouts.app')

@section('content')
    <div class="d-flex flex-wrap row justify-content-center"  data-bs-spy="scroll">
        <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @if($users->isNotEmpty())
            
        @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">D.N.I</th>
                        <th scope="col">Nº DE SOCIO</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">OTRO TELEFONO</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">C.P</th>
                        <th scope="col">CIUDAD</th>
                        <th scope="col">PROVINCIA</th>
                        <th scope="col">PAIS</th>
                        {{-- <th scope="col">COMENTARIO</th> --}}
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)

                    <tr>
                    <th scope="row">{{ $user->id}}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->dni }}</td>
                        <td>{{ $user->membership_number }}</td>
                        <td>{{ $user->phone1 }}</td>
                        <td>{{ $user->phone2 }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->zipCode }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->region }}</td>
                        <td>{{ $user->country }}</td>
                        {{-- <td>{{ $user->notes }}</td> --}}
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        



                    {{-- <div class="ct-img">
                        <a href="{{ route('show', ['id' => $user->id]) }}">
                            <img class="imgCard" src="{{ asset('storage') . '/' . $user->name }}" alt="">
                        </a>
                    </div>
                    <div class="ct-info d-flex flex-row align-items-center p-1">
                        <div class="ct-txt d-flex flex-column justify-content-center">
                            <div class="txtTitle d-flex flex-row align-items-center">
                                <p class="txtInfoTitle text-truncate m-0">{{ $user->surname }} </p>
                            </div>
                            <p class="txtPrice">{{ $user->surname }} &#8364</p>
                        </div>
                        <div class="separator"></div>
                            <a href="{{ route('addCart', ['product_id'=>$user->email]) }}"> 
                                <img class="icoCard m-1" src="<?php echo asset('storage/img/shopping-cart.svg'); ?>" alt="Flaticon">
                            </a>
                    </div>
                --}}
        </div>
    @endsection
    