@section('title', 'TRABALHO')

@section('content')

@foreach($produtos as $produto)
  <p>{{ $produto->id }} -- {{ $produto->nome_produto }} -- {{ $produto->preco }} -- {{$produto->quantidade_estoque}}</p>

@endforeach

