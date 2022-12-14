
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->


<style>
    body {
        font-family: 'Nunito', sans-serif !important;
        width: '18%' !important;
        width: 18% !important;
    }
    .a{
     width: '18%' !important;}

     a{
font-size: 16pt !important;
font-size: 8px;
width: 18% !important;
}
</style>
 
<x-app-layout>
    <x-slot name="header">
   
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <button onclick="location.href='/inventario'">Enviar a inventario</button>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
   </x-app-layout>
