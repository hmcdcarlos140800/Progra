@extends('layouts.app')

@section('template_title')
    {{ $ropa->name ?? 'Show Ropa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ropa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ropas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categorias Id:</strong>
                            {{ $ropa->categorias_id }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $ropa->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $ropa->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $ropa->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
