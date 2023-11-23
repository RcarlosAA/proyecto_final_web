<x-master>
    
    <x-slot:title>Editar Producto</x-slot:title>
    
    
    
    
    <form action=""  enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="sm:col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Producto Nombre</label>
                <input type="text" name="nombre" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="" value="{{ $prod->nombre }}">
            </div>
            <div>
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                <select id="category" name="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected value="{{ $prod->color }}">{{ $prod->color }}</option>
                    <option value="Blanco">Blanco</option>
                    <option value="Negro">Negro</option>
                    <option value="Azul">Azul</option>
                    <option value="Plomo">Plomo</option>
                    <option value="Rojo">Rojo</option>
                    <option value="Rosado">Rosado</option>
                </select>
            </div>
            <div class="w-full">
                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                <select id="category" name="categoria_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                     
                    <option value="{{$prod->categoria_id}}">{{$prod->categoria->nombre." - ( ".$prod->categoria->marca->nombre." )"}}</option> 

                    @forelse ($listaRes as $lista)
                        <option value="{{$lista->id}}">{{$lista->nombre." - ( ".$lista->marca->nombre." )"}}</option>                                        
                    @empty
                        <option value="">No hay marcas</option>
                        
                    @endforelse
                </select>
            </div>


            
            <div class="w-full">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio ($)</label>
                <input type="number" name="precio" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="precio" required="" value="{{ $prod->precio }}">
            </div>
            
            <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                <input type="number" name="stock" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="stock" required="" value="{{ $prod->stock }}">
            </div> 
            
            <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peso (Kg.)</label>
                <input type="number" name="peso" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="peso" required="" value="{{ $prod->peso }}">
            </div> 
            <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alto</label>
                <input type="number" name="altura" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="alto" required="" value="{{ $prod->altura }}">
            </div> 
            <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ancho</label>
                <input type="number" name="ancho" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="ancho" required="" value="{{ $prod->ancho }}">
            </div> 

            <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profundidad</label>
                <input type="number" name="profundidad" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="profundidad" required="" value="{{ $prod->profundidad }}">
            </div> 
            <div class="sm:col-span-2">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripcion</label>
                <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=" Descripcion" name="descripcion">{{ $prod->descripcion }}</textarea>
            </div>

            <div class="sm:col-span-2">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen Antigua</label>
                <img src="{{url($prod->img)}}" alt="" width="200px" class="img-fluid">
            </div>

            <div class="sm:col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen Nueva</label>
                <input type="file" name="img" id="img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Imagen" >
            </div>
        </div>
        <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Editar
        </button>
    </form>
    
    
    
    
    
    
</x-master>