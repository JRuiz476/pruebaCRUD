@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}">Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código del Producto:</strong>
                            {{ $producto->cod_product }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del Producto:</strong>
                            {{ $producto->nameProd }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción del Producto:</strong>
                            {{ $producto->descProd }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Producto:</strong>
                            {{ $producto->typeProd }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Unitario:</strong>
                            {{ $producto->costUnit }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Existente:</strong>
                            {{ $producto->cantExist }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
