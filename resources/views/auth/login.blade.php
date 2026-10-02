<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - INICIO DE SESION</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">

    <div class="min-h-screen flex flex-col justify-center items-center px-4">
        
        {{-- Tarjeta Principal (Formulario Login) --}}
        <div class="bg-white border border-gray-300 w-full max-w-[350px] p-8 md:p-10 mb-3 text-center">
            
            {{-- Título estilo Instagram --}}
            <h1 class="text-4xl font-bold mb-8 text-gray-900 tracking-tight" style="font-family: 'Brush Script MT', cursive, serif;">
                INICIO DE SESION
            </h1>

            <form action="{{ route('login') }}" method="POST" class="flex flex-col space-y-2">
                @csrf
                
                {{-- Campos de entrada como placeholders --}}
                <input type="email" name="email" placeholder="Correo electrónico" required
                    class="w-full bg-gray-50 border border-gray-300 rounded-[3px] px-2 py-2 text-xs focus:outline-none focus:border-gray-400 placeholder-gray-500">
                
                <input type="password" name="password" placeholder="Contraseña" required
                    class="w-full bg-gray-50 border border-gray-300 rounded-[3px] px-2 py-2 text-xs focus:outline-none focus:border-gray-400 placeholder-gray-500">
                
                <button type="submit"
                    class="w-full bg-[#0095f6] hover:bg-[#1877f2] text-white font-semibold py-[6px] rounded-lg text-sm transition-colors duration-200 mt-4">
                    Entrar
                </button>
            </form>

            {{-- Separador opcional clásico de Instagram --}}
            <div class="flex items-center my-4 w-full">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="px-4 text-gray-500 text-xs font-semibold">O</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>
            
            {{-- Enlace de recuperar contraseña (puedes ajustar la ruta luego) --}}
            <a href="#" class="text-xs text-[#00376b] mt-2 block">¿Olvidaste tu contraseña?</a>
        </div>

        {{-- Tarjeta Secundaria (Link a Registro) --}}
        <div class="bg-white border border-gray-300 w-full max-w-[350px] py-5 text-center text-sm">
            <p class="text-gray-900">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}" class="text-[#0095f6] font-semibold hover:text-[#00376b]">Regístrate</a>
            </p>
        </div>

    </div>

</body>
</html>