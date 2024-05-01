@extends('layout.layout')

@section('title', 'Produtos')

@section('content')
    <div class="w-full">
        <div class="bg-purple-700 w-full flex justify-between rounded-md p-4">
            <div class="font-bold text-white">Registrar produto</div>
            <div class="font-bold text-white">
                <a href="{{ route('produto') }}"> Voltar </a>
            </div>
        </div>
    </div>
    <form class="bg-gray-200 mt-4 p-4 grid grid-cols-2 gap-4 shadow-md rounded-md" 
        method="POST"
        action="{{ route('produto.criar') }}">
        @csrf
        @method('POST')
        <div>
            <label class="flex flex-col">
                Nome
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="border py-2 rounded-md shadow-sm" />
            </label>
        </div>
        <div>
            <label class="flex flex-col">
                Preço
                <input type="number" name="price" id="price" value="{{ old('price') }}"
                    class="border py-2 rounded-md shadow-sm" />
            </label>
        </div>
        <div>
            <label class="flex flex-col">
                Descrição
                <textarea name="description" id="description" value="{{ old('description') }}" class="border py-2 rounded-md shadow-sm"></textarea>
            </label>
        </div>
        <div>
            <label class="flex flex-col">
                Marca
                <select name="brand" id="brand" class="border py-2 rounded-md shadow-sm">
                    <option>Selecione</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <div class="col-span-2">
            <button class="bg-purple-700 py-1 px-4 text-white hover:bg-purple-500 rounded-md">
                Salvar
            </button>
        </div>
    </form>
@endsection
