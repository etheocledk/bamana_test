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
                <div class="flex items-center gap-3 flex-wrap">
                    <form action="{{ route('view.landing') }}" method="POST"
                        class="flex items-center justify-center space-x-2">
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
                    <button class="bg-[#003169] hover:bg-[#005278]  text-white px-4 py-2 rounded-md text-sm font-medium"
                        onclick="openModal()">
                        + Ajouter
                    </button>
                </div>
            </div>
            <div class="overflow-x-scroll">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        @if (auth()->user()->role == 'admin')
                            <th>Actions</th>
                        @endif
                    </thead>
                    <tbody>
                        @if ($products && $products->count() > 0)
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>
                                        @if ($product->image_path && $product->image_path != null)
                                            <img src="{{ asset('storage/' . $product->image_path) }}"
                                                alt="{{ $product->name }}" class="w-12 h-12 object-cover rounded">
                                        @else
                                            <img src="{{ asset('assets/images/profile.jpg') }}" alt="{{ $product->name }}"
                                                class="w-12 h-12 object-cover rounded">
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    @if (auth()->user()->role == 'admin')
                                        <td>
                                            <div class="flex items-center flex-wrap gap-2 w-full">
                                                <a href="" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Modifier</a>

                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                    id="deleteProductForm" class="d-inline">
                                                    @csrf
                                                    <button onclick="deleteProductAlert()" type="button"
                                                        class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div>
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

    <!-- Modal d'ajout de produit -->
    <div id="addProductModal"
        class="fixed inset-0 bg-black/60 z-[999] flex h-full w-full bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white p-6 rounded-lg lg:w-1/3 md:2/4 sm:3/4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Ajouter un produit</h3>
                <button class="text-gray-500" onclick="closeModal()">&times;</button>
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nom du produit</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea id="description" name="description" class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700">Prix</label>
                    <input type="number" id="price" name="price"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md" step="0.01" required>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-gray-700">Quantité</label>
                    <input type="number" id="quantity" name="quantity"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Image</label>
                    <input type="file" id="image" name="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md mr-2"
                        onclick="closeModal()">Annuler</button>
                    <button type="submit" class="bg-[#003169] text-white px-4 py-2 rounded-md">Ajouter</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    @include('shared.modals.delete')

    <script>
        function openModal() {
            document.getElementById("addProductModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("addProductModal").classList.add("hidden");
        }
    </script>
@endsection
