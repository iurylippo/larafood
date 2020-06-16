@extends('adminlte::page')

@section('title', "Detalhes do plano {$plan->name}")

@section('content_header')
    <h1>Detalhes do plano <strong>{{ $plan->name }}</strong></h1>
@stop

@section('content')
    <div class="card">
        <card-body>
            <ul>
                <li>
                    <strong>Nome: {{  $plan->name }}</strong>
                </li>
                <li>
                    <strong>URL: {{  $plan->url }}</strong>
                </li>
                <li>
                    <strong>Preço: R$ {{ number_format($plan->price, 2, ",",".") }}</strong>
                </li>
                <li>
                    <strong>Descrição: {{  $plan->description }}</strong>
                </li>
            </ul>

            <form action="{{ route('plans.destroy', $plan->url) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> DELETAR O PLANO {{ $plan->name }}</button>
            </form>
        </card-body>
    </div>
@endsection
