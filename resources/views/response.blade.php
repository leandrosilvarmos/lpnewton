@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (!isset($clientes))
                <h3 style="color: red">Nenhum Registro Encontrado!</h3>
            @else
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2>Obrigado pelo seu cadastro</h2>
                            <p>
                                Enviamos para o seu email link para voce conhecer nossa newsletter, e saber ainda mais sobre a nossa clinica. 
                            </p>
                            <a href="{{ url('/') }}" class="btn btn-primary mt-3">Voltar ao Início</a>
                        </div>
                    </div>
                </div>
            @endif
            @if (isset($msg))
                <script>
                    alert("{{ $msg }}");
                </script>
            @endif
        </div>
    </div>
@endsection
