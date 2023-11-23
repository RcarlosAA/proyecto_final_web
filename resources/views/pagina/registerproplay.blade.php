<x-master_pagina>
    <!-- form wrapper -->
    <div class="container py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">
                Crear una Cuenta
            </h2>
            <p class="text-gray-600 mb-6 text-sm">
                Registrate si no tienes una cuenta
            </p>
            <form action="">
                <div class="space-y-4">
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Nombre Completo <span class="text-primary">*</span>
                        </label>
                        <input type="text" class="input-box" placeholder="Nombre Completo">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Correo Electronico <span class="text-primary">*</span>
                        </label>
                        <input type="email" class="input-box" placeholder="example@gmail.com">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">Contraseña <span class="text-primary">*</span></label>
                        <input type="password" class="input-box" placeholder="Escribe tu contraseña">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">Confirmar Contraseña
                            <span class="text-primary">*</span>
                        </label>
                        <input type="password" class="input-box" placeholder="Confirma tu contraseña">
                    </div>
                </div>
                <div class="flex items-center mt-6">
                    <input type="checkbox" id="agreement"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">
                        He leido y acepto los
                        <a href="#" class="text-primary">terminos & condiciones</a>
                    </label>
                </div>
                <div class="mt-4">
                    <button type="submit"
                        class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                        Crear Cuenta
                    </button>
                </div>
            </form>
            <!-- login with social -->
            <div class="mt-6 flex justify-center relative">
                <div class="absolute left-0 top-3 w-full border-b-2 border-gray-200"></div>
                <div class="text-gray-600 uppercase px-3 bg-white relative z-10">
                    O INICIA SESION CON
                </div>
            </div>
            <div class="mt-4 flex gap-4">
                <a href="#"
                    class="block w-1/2 py-2 text-center text-white bg-blue-800 rounded uppercase font-roboto font-medium text-sm">
                    Facebook
                </a>
                 <a href="#"
                    class="block w-1/2 py-2 text-center text-white bg-yellow-600 rounded uppercase font-roboto font-medium text-sm">
                    Google
                </a>
            </div>
            <!-- login with social end -->
            <p class="mt-4 text-gray-600 text-center">
                Ya tienes una cuenta <a href="login.html" class="text-primary">Inicia Sesion Ahora</a>
            </p>
        </div>
    </div>
    <!-- form wrapper end -->
</x-master_pagina>