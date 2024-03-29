@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  ¡te haz logeado correctamente, bienvenido  {{$user->name}} {{ Auth::user()->lastname }}! 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
