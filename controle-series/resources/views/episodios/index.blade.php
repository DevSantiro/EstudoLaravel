@extends('layout')

@section('cabecalho')
    Episódios
@endsection

@section('conteudo')

    @include('mensagem', ['mensagem' => $mensagem] )

    <form action="/temporadas/{{ $temporadaId }}/episodios/assistir" method="post">
        @csrf
        <ul class="list-group">
            @foreach($episodios as $episodio)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episódio {{$episodio->numero}}
                    @auth
                        <input type="checkbox" name="episodios[]" id="" value="{{ $episodio->id }}" {{ $episodio->assistido ? 'checked' : '' }}>
                    @endauth

                    @guest
                        <input type="checkbox" name="episodios[]" disabled id="" value="{{ $episodio->id }}" {{ $episodio->assistido ? 'checked' : '' }}>
                    @endguest

                </li>
            @endforeach
        </ul>
        @auth
            <button class="btn btn-primary mt-2 mb-2">Salvar</button>
        @endauth
    </form>
@endsection