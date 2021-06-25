@extends('layouts.global')

@section('title', 'mercadoria')


@push('css')
<link rel="stylesheet" href="{{ asset('css/style/editar.css') }}">
@endpush


@section('content')

    <div class="edit-title">
        <h2>Atualizar cadastro de @yield('title')</h2>
    </div>
    <form class='edit-form' action="/mercadorias/editar/" method="post">
        @csrf
        <input type="hidden" name='id' value="{{ $mercadoria['id'] }}"></input>
        
        <label for="codMercadoria">Código: </label>
        <input required type="text" name="codMercadoria" id="codMercadoria" value="{{ $mercadoria['codMercadoria'] }}"> 
        <label for="descricaoMercadoria">Descrição: </label>
        <input required type="text" name="descricaoMercadoria" id='descricaoMercadoria' value="{{ $mercadoria['descricaoMercadoria'] }}"> 
        <label for="mlgMercadoria">Ml/g: </label>
        <input required type="text" name="mlgMercadoria" id='mlgMercadoria' value="{{ $mercadoria['mlgMercadoria'] }}"> 
        <label for="categoriaMercadoria">Categoria: </label>
        <input required type="text" name="categoriaMercadoria" id='categoriaMercadoria' value="{{ $mercadoria['categoriaMercadoria'] }}">
        
        <label for="fornecedorMercadoria">Fornecedor: </label>
        <select required name="fornecedorMercadoria" id="fornecedorMercadoria" value="{{ $mercadoria['fornecedorMercadoria'] }}">
            @foreach ($fornecedores as $fornecedor)
            <option value="{{ $fornecedor->id }}">{{ $fornecedor->nomeForn }}</option>

            @endforeach
        </select>
        <label for="custoMercadoria">Preço de custo: </label>
        <input required type="text" name="custoMercadoria" id="custoMercadoria" value="{{ $mercadoria['custoMercadoria'] }}"> 
        <button class='modal-confirm-button' action="/mercadorias">Cancelar</button>

            <button class='modal-confirm-button' type='submit'>Atualizar</button>
    </form>
@endsection
