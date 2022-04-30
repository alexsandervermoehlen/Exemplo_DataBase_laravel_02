@extends("layout")

@section('titulo')
    Listagem de Produtos
@stop

@section('conteudo')
    Listagem de Produtos
    <hr>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Ações</td>
        </tr>
        @foreach ($produtos as $p)
            <tr>
                <td><a href="produto/{{$p->id}}">{{$p->id}}</a></td>
                <td>{{$p->nome}}</td>
                <td>{{$p->descricao}}</td>
                <td><a href="produto_delete/{{$p->id}}">Deletar</td>
            </tr>
        @endforeach
    </table>
@stop