@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BIENVENIDO') }}</div>

                <div class="card-body" style="font-family:'Times New Roman', Times, serif; font-weight: 900; color:rgb(25, 55, 63)">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Comodidad y Estilo') }}
                </div>
                <img src="https://mott.social/wp-content/uploads/2021/05/Estilos-de-ropa-para-mujer-que-esta%CC%81n-de-moda.png" alt="" style="border: 5px solid white">

            </div>
        </div>

    </div>
</div>
@endsection
