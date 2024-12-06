@extends('layouts.customer')
@section('title', 'Acceuil')
@section('content')
    @php $counter = 1; @endphp
    <div class="px-10 lg:px-10 md:px-3 sm:px-3 py-8">
        <div class="text-center mb-8 text-2xl">Bienvenue <strong class="text-2xl">{{ auth()->user()->fullname }}</strong>
            <span
                class="badge 
            {{ auth()->user()->role == 'admin' ? 'bg-[#a10]' : 'bg-[#28a745]' }} 
            text-white 
            p-2
            rounded">
                {{ auth()->user()->role == 'admin' ? 'Administrateur' : 'Client' }}
            </span>
        </div>

        <div class=" bg-white px-10 lg:px-10 md:px-3 sm:px-3  py-8 rounded-[10px]">
            <div class="flex justify-between items-center flex-wrap mb-5">
                <h1 class="font-[600] text-[22px]">Liste des produits</h1>
                <form action="{{ route('view.landing') }}" method="POST" class="flex items-center justify-center space-x-2">
                    @csrf
                    @method('GET')
                    <div>
                        <input type="text" name="name"
                            class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm"
                            placeholder="Rechercher par nom">
                    </div>
                    <button type="submit"
                        class="px-4 py-2 text-white text-nowrap bg-[#003169] hover:bg-[#005278] rounded-md text-sm font-medium">Rechercher</button>
                </form>
            </div>
            <div class="overflow-x-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            @if (auth()->user()->role == 'admin')
                                <th>Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if ($products && $products->count() > 0)
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    @if (auth()->user()->role == 'admin')
                                        <td class="flex items-center flex-wrap gap-2">
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" id="deleteProductForm"
                                                class="d-inline">
                                                @csrf
                                                <button  onclick="deleteProductAlert()" type="button"
                                                    class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">
                                    <p>Pas de produits.</p>
                                    @include('apps.pages.inc.no-data')
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="mt-2">
                {{ $products->links() }}
            </div>
        </div>
    </div>
    @include('shared.modals.delete')
@endsection
