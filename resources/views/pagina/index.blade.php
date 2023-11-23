<x-master_pagina>
    <div class="bg-cover bg-no-repeat bg-center py-36 relative" style="background-image: url({{ asset('dist/images/banner-bg2.jpg') }})">
        <div class="container">
            <!-- banner contenido -->
            <h1 class="xl:text-6xl md:text-5xl text-4xl text-white font-medium mb-4">
                ProPlay <br class="hidden sm:block"> Peripherals
            </h1>
            <p class="text-base text-gray-300 leading-6">
                Tus sueños de juego se vuelven realidad con ProPlay Peripherals: <br class="hidden sm:block">
                Descubre una amplia gama de periféricos de alta calidad diseñados para llevar tu experiencia de juego al siguiente nivel. 
            </p>
            <!-- banner button -->
            <div class="mt-12">
                <a href="shop.html" class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md uppercase hover:bg-transparent
                hover:text-primary transition">
                    Compra Ahora
                </a>
            </div>
            <!-- fin banner button  -->
            <!-- fin banner contenido -->
        </div>
    </div>


    <div class="container py-16">
        <div class="lg:w-10/12 grid md:grid-cols-3 gap-3 lg:gap-6 mx-auto justify-center">

            <!-- Funcion 1 -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img src="{{ asset('dist/images/icons/delivery-van.svg') }}" class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Envios Gratis</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Apartir de 700 Bs.</p>
                </div>
            </div>
            <!-- Fin Funcion 1 -->
            <!-- Funcion 2 -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img src="{{ asset('dist/images/icons/money-back.svg') }}" class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Seguro del Cliente</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">30 Dias de proteccion de tu dinero</p>
                </div>
            </div>
            <!-- Fin Funcion 2 -->
            <!-- Funcion 3 -->
            <div
                class="border-primary border rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5">
                <img src="{{ asset('dist/images/icons/service-hours.svg') }}" class="lg:w-12 w-10 h-12 object-contain">
                <div>
                    <h4 class="font-medium capitalize text-lg">Soporte 24/7 </h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Estamos Para atender tus consultas</p>
                </div>
            </div>
            <!-- Fin Funcion 3 -->

        </div>
    </div>

    <div class="container pb-16">
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">Compras segun las Categorias</h2>
        <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-3">
            
            @forelse ($categorias as $item)
            
            <div class="relative group rounded-sm overflow-hidden" >
                <img src={{ $item->img }} class="w-full">
                <a href="{{ url('pagina_web/categoria/'.$item->id)}}" class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 flex items-center justify-center text-xl text-white 
                font-roboto font-medium tracking-wide transition">
                {{ $item->nombre }}
                <br>
                {{ "Marca: ".$item->marca->nombre }}
                </a>
            </div>
        @empty
        <div class="relative group rounded-sm overflow-hidden" >
            No hay Categorias
        </div>
        @endforelse
    </div>
        



</x-master_pagina>