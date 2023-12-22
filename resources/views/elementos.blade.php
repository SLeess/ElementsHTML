@extends('layouts.main')

@section('titulo', 'Elementos Salvos')

@section('ambienteDeConteudo')
<section id="conteudo" class='col-10 offset-1 col-md-7 offset-md-1'>
    <div class="dropdown">
        <h1 id="dropdownMenuButton" style="margin-bottom: 20px;white-space: normal;" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Elementos para Desenvolvimento</h1>
        <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton" style="z-index: 999;">
            <p class="introduction">
                Bem-vindo ao nosso <strong>Sistema de gerenciamento de Elementos Web</strong>! 
                <br><br>
                Aqui, você pode encontrar e visualizar uma variedade de elementos prontos para uso em seus projetos. Desde barras de navegação elegantes até botões estilizados, nossa tabela contém uma ampla gama de componentes prontos para integrar às suas páginas web.
            </p>
            <p class="highlight">
                Explore a tabela abaixo para obter detalhes sobre cada elemento, incluindo o tipo, descrição, código CSS e HTML.
            </p>
        </div>
    </div>
    <!-- row table-responsive -->
    <div class="row">
        <table id="table-elements" class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descrição</th>
            <th scope="col">CSS</th>
            <th scope="col">HTML</th>
            <th scope="col">Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($elements as $element)
            <tr>
                <th scope="row">{{ $element->id }}</th>
                <td>{{ $element->type }}</td>
                <td>{{ Str::limit($element->description, 25) }}</td>
                <td>{{ Str::limit($element->css, 30) }}</td>
                <td>{{ Str::limit($element->html, 30) }}</td>
                <td>{{ $element->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</section>
<aside id="lateral" class='d-flex col-10 offset-1 offset-md-0 col-md-3'>
    <h2 id='txtBuscar' class="row">Buscar elemento</h2>
    <div class="submit-line row">
        <input type="search" name="buscarElement" id="buscarElement" class="form-control">
        <button class="submit-lente" type="submit">
            <i class="fa fa-search"></i>
        </button>
        <button type="button" class="disabled btn btn-danger btn-md row mt-3">Visualizar</button>
        <button type="button" class="disabled btn btn-danger btn-md row mt-1">Editar</button>
        <button type="button" class="disabled btn btn-danger btn-md row mt-1">Apagar</button>
    </div>
</aside>
@endsection

@section('imports')
<link rel="stylesheet" href="/css/elements.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<script src="js/buscar.js"></script>
@endsection