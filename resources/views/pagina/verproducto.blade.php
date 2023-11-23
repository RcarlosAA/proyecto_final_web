<x-master_pagina>
    <div class="py-4 container flex gap-3 items-center">
        <a href="index.html" class="text-primary text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <a href="shop.html" class="text-primary text-base font-medium uppercase">
            Tienda
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <p class="text-gray-600 font-medium uppercase">{{$listaProductos->categoria->nombre}}</p>
    </div>
    <!-- breadcrum end -->

    <!-- product view -->
    <div class="container pt-4 pb-6 grid lg:grid-cols-2 gap-6">
        <!-- product image -->
        <div>
            <div>
                <img id="main-img" src="{{ asset($listaProductos->img )}}" class="w-full">
            </div>
            
        </div>
        <!-- product image end -->
        <!-- product content -->
        <div>
            <h2 class="md:text-3xl text-2xl font-medium uppercase mb-2">{{$listaProductos->categoria->nombre." ".$listaProductos->nombre}}</h2>
            
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Availability: </span>
                    <span class="text-green-600">En Stock</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Marca: </span>
                    <span class="text-gray-600">{{$listaProductos->categoria->marca->nombre}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Categoria: </span>
                    <span class="text-gray-600">{{$listaProductos->categoria->nombre}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Peso (Kg.): </span>
                    <span class="text-gray-600">{{$listaProductos->peso}}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Dimensiones (cm.): </span>
                    <span class="text-gray-600">{{$listaProductos->altura." X ".$listaProductos->ancho." X ".$listaProductos->profundidad}}</span>
                </p>

                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Color: </span>
                    <span class="text-gray-600">{{$listaProductos->color}}</span>
                </p>
                
            </div>
            <div class="mt-4 flex items-baseline gap-3">
                <span class="text-primary font-semibold text-xl">{{ $listaProductos->precio}}</span>
                
            </div>
            <p class="mt-4 text-gray-600">
                {{$listaProductos->detalles}}
            </p>
            <!-- size -->
            
            <!-- size end -->
            <!-- color -->
            
            <!-- color end -->
            <!-- quantity -->
            <div class="mt-4">
                <h3 class="text-base text-gray-800 mb-1">Cantidad</h3>
                <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                    <div class="h-8 w-10 flex items-center justify-center">1</div>
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
                </div>
            </div>
            <!-- color end -->
            <!-- add to cart button -->
            <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">
                <a href="#" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase 
                    hover:bg-transparent hover:text-primary transition text-sm flex items-center">
                    <span class="mr-2"><i class="fas fa-shopping-bag"></i></span> Añadir al Carrito
                </a>
                
            </div>
            <!-- add to cart button end -->
            <!-- product share icons -->
            
            <!-- product share icons end -->
        </div>
    </div>
</x-master_pagina>