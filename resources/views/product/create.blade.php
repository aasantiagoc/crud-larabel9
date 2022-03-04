@extends('product.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Product</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('product') }}"> Back</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtNombreProducto">Nombre Producto:</label>
            <input type="text" class="form-control" id="txtNombreProducto" placeholder="Enter Nombre Producto" name="txtNombreProducto">
        </div>
        <div class="form-group">
            <label for="txtTipoProducto">Tipo Producto:</label>
            <input type="text" class="form-control" id="txtTipoProducto" placeholder="Enter Tipo Producto" name="txtTipoProducto">
        </div>
        <div class="form-group">
            <label for="txtPrecio">Precio:</label>
            <input class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Enter Address">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection