<x-master>
    <x-slot:title>Productos</x-slot:title>
    
    <!-- Start coding here -->
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-1/2">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                    </div>
                </form>
            </div>
            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <a type="button" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ url('registrar_productos') }}">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Agregar
                    
                </a>
                
                
                
                
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Nro.</th>
                        <th scope="col" class="px-4 py-3">Nombre</th>
                        <th scope="col" class="px-4 py-3">Color</th>
                        <th scope="col" class="px-4 py-3">Categoria</th>
                        <th scope="col" class="px-4 py-3">Marca</th>
                        <th scope="col" class="px-4 py-3">Descripcion</th>
                        <th scope="col" class="px-4 py-3">Peso (Kg)</th>
                        <th scope="col" class="px-4 py-3">Dimensiones (cm)</th>
                        <th scope="col" class="px-4 py-3">Precio ($)</th>
                        <th scope="col" class="px-4 py-3">Stock</th>
                        <th scope="col" class="px-4 py-3">Estado</th>
                        <th scope="col" class="px-4 py-3">Imagen</th>

                        <th scope="col" class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listaRes as $lista)
                    <tr class="border-b dark:border-gray-700" >
                        <th class="px-4 py-3">{{$lista->id}}</th>
                        <td class="px-4 py-3">{{$lista->nombre}}</td>
                        <td class="px-4 py-3">{{$lista->color}}</td>
                        <td class="px-4 py-3">{{$lista->categoria->nombre}}</td>
                        <td class="px-4 py-3">{{$lista->categoria->marca->nombre}}</td>
                        <td class="px-4 py-3">{{$lista->descripcion}}</td>
                        <td class="px-4 py-3">{{$lista->peso}}</td>
                        <td class="px-4 py-3">{{$lista->altura."x".$lista->ancho."x".$lista->profundidad}}</td>
                        <td class="px-4 py-3">{{$lista->precio}}</td>
                        <td class="px-4 py-3">{{$lista->stock}}</td>
                        <td class="px-4 py-3">
                            @if ($lista->estado==1)
                                Disponible
                            @else
                                Agotado
                            @endif
                        </td>
                        <td class="px-4 py-3"> <img src="{{url($lista->img)}}" alt="" width="64"></td>
                        
                        <td class="px-4 py-3">
                            
                            <a class="text-white bg-yellow-500 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-600 rounded text-sm" href="{{ url('productos/editar/'.$lista->id)}}">E</a>
                            <br><br>
                            <a class="text-white bg-red-500 border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-sm" href="{{ url('productos/eliminar/'.$lista->id)}}">X</a>
                        </td>
                    </tr>    
                    @empty
                    <tr>
                        <td>No hay datos...</td>
                    </tr>
                    @endforelse
                    
                    
                </tbody>
            </table>
        </div>
        
    </div>
    
</x-master>