@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifica tu email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Se ha enviado a tu correo un link para verificar tu cuenta
                        </div>
                    @endif

                    Se ha enviado a tu correo un link para verificar tu cuenta<br>
                    Si no te ha llegado el correo, puedes volver a solicitarlo a continuación
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clic aqui para solicitar otro link</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
