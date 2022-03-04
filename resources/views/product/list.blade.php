@extends('product.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 9 CRUD PRODUCTO</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('product.create') }}">Add</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre Producto</th>
            <th>Tipo Producto</th>
            <th>Precio</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->nombreproducto }}</td>
                <td>{{ $product->tipoproducto }}</td>
                <td>{{ $product->precio }}</td>
                <td>
                    <form action="{{ route('product.destroy',$product->idproducto) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('product.show',$product->idproducto) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('product.edit',$product->idproducto) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection