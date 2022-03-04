@extends('product.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 9 CRUD PRODUCTO</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('product') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nombre Producto:</th>
            <td>{{ $product->nombreproducto }}</td>
        </tr>
        <tr>
            <th>Precio Producto:</th>
            <td>{{ $product->tipoproducto }}</td>
        </tr>
        <tr>
            <th>Precio:</th>
            <td>{{ $product->precio }}</td>
        </tr>
 
    </table>
@endsection