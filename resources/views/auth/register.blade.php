<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta -REGISTRO</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">

    <div class="min-h-screen flex flex-col justify-center items-center px-4">
        
        {{-- Tarjeta Principal (Formulario) --}}
        <div class="bg-white border border-gray-300 w-full max-w-[350px] p-8 md:p-10 mb-3 text-center">
            
            {{-- Título / Logo --}}
            <h1 class="text-4xl font-bold mb-4 text-gray-900 font-serif tracking-tight" style="font-family: 'Brush Script MT', cursive, serif;">
                REGISTRO
            </h1>
            
            <h2 class="text-gray-500 font-semibold mb-6 text-[15px] leading-tight">
                Regístrate para ver fotos y videos de tus amigos.
            </h2>

            {{-- Asegúrate de que la ruta action="{{ route('register') }}" sea la correcta para tu sistema --}}
            <form action="/register" method="POST" class="flex flex-col space-y-2">
                @csrf
                
                <input type="text" name="name" placeholder="Nombre completo" required
                    class="w-full bg-gray-50 border border-gray-300 rounded-[3px] px-2 py-2 text-xs focus:outline-none focus:border-gray-400 placeholder-gray-500">
                
                <input type="email" name="email" placeholder="Correo electrónico" required
                    class="w-full bg-gray-50 border border-gray-300 rounded-[3px] px-2 py-2 text-xs focus:outline-none focus:border-gray-400 placeholder-gray-500">
                
                <input type="password" name="password" placeholder="Contraseña" required
                    class="w-full bg-gray-50 border border-gray-300 rounded-[3px] px-2 py-2 text-xs focus:outline-none focus:border-gray-400 placeholder-gray-500">
                
                <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required
                    class="w-full bg-gray-50 border border-gray-300 rounded-[3px] px-2 py-2 text-xs focus:outline-none focus:border-gray-400 placeholder-gray-500">
                
                <p class="text-xs text-gray-400 mt-3 mb-3 leading-tight">
                    Al registrarte, aceptas nuestras Condiciones, la Política de privacidad y la Política de cookies.
                </p>

                <button type="submit"
                    class="w-full bg-[#0095f6] hover:bg-[#1877f2] text-white font-semibold py-[6px] rounded-lg text-sm transition-colors duration-200 mt-2">
                    Registrarte
                </button>
            </form>
        </div>

        {{-- Tarjeta Secundaria (Link a Inicio de Sesión) --}}
        <div class="bg-white border border-gray-300 w-full max-w-[350px] py-5 text-center text-sm">
            <p class="text-gray-900">
                ¿Tienes una cuenta?
                {{-- Ajusta la ruta href="{{ route('login') }}" según necesites --}}
                <a href="/login" class="text-[#0095f6] font-semibold hover:text-[#00376b]">Inicia sesión</a>
            </p>
        </div>

    </div>

</body>
</html>