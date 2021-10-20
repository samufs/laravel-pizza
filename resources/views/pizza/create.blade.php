@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">Ver Pizza</a>
                        <a href="" class="list-group-item list-group-item-action">Añadir Pizza</a>
                    </ul>
                </div>
            </div>
            @if(count($errors)>0)
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <p>{{$error}}</p> 
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif  
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
               
                <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre de la Pizza</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="Nombre de la pizza">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción de la Pizza</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-inline">
                            <label for="">Precio de la Pizza(€)</label>
                            <input type="number" name="small_pizza_price" id="" class="form-control" placeholder="Precio pequeña">
                            <input type="number" name="medium_pizza_price" id="" class="form-control" placeholder="Precio mediana">
                            <input type="number" name="large_pizza_price" id="" class="form-control" placeholder="Precio grande">
                        </div>
                        <div class="form-group">
                            <label for="description">Categoría</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">---</option>
                                <option value="vegetarian">Pizza Vegetariana</option>
                                <option value="nonvegetarian">Pizza No Vegetariana</option>
                                <option value="traditional">Pizza Tradicional</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection