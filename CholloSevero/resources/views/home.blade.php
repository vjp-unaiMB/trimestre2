@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Estado') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>¡Te logeaste!</h2>

                    <a href="{{ route('dirigirPagCrearChollo') }}" class="btn crear">Crear Chollo <i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
