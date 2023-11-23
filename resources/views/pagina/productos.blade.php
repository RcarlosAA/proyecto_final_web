<x-master_pagina>
    <div class="container py-4 flex justify-between">
        <div class="flex gap-3 items-center">
            <a href="index.html" class="text-primary text-base">
                <i class="fas fa-home"></i>
            </a>
            <span class="text-sm text-gray-400"><i
                    class="fas fa-chevron-right"></i></span>
            <p class="text-gray-600 font-medium">{{ "Productos ". $categoria->nombre. " de la marca ". $categoria->marca->nombre  }}</p>
        </div>
    </div>

    <div class="container grid lg:grid-cols-4 gap-6 pt-4 pb-16 items-start relative">
        <div class="col-span-4">
            <div class="grid lg:grid-cols-2 xl:grid-cols-3 sm:grid-cols-2 gap-6">
            @forelse ($listaProductos as $item)
            
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src={{ asset($item->img ) }} class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="{{url('ver_producto/'.$item->id)}}">
                            <h4
                                class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                {{ $item->nombre }}
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">{{ $item->precio."$" }}</p>
                            
                            
                        </div>
                        
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="{{url('ver_producto/'.$item->id)}}"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Agregar al Carrito
                    </a>
                    <!-- product button end -->
                </div>
            
            @empty
            <h1>No hay productos Disponibles</h1>
                
            @endforelse



        </div>
        </div>
    </div>


</x-master_pagina>