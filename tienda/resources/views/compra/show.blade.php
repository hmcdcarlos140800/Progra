@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? 'Show Compra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clientes Id:</strong>
                            {{ $compra->clientes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $compra->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
