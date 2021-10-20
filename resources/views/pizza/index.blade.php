@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Todas las Pizzas
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Precio P.</th>
                                <th scope="col">Precio M.</th>
                                <th scope="col">Precio G.</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pizzas as $key => $pizza)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td><img class="img-fluid" src="{{Storage::url($pizza->image)}}"></td>
                                    <td>{{$pizza->name}}</td>
                                    <td>{{$pizza->description}}</td>
                                    <td>{{$pizza->category}}</td>
                                    <td>{{$pizza->small_pizza_price}}</td>
                                    <td>{{$pizza->medium_pizza_price}}</td>
                                    <td>{{$pizza->large_pizza_price}}</td>
                                    <td><button class="btn btn-primary">Editar</button></td>
                                    <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection