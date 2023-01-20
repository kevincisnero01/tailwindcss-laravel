<x-layout>
<x-slot name="title">Grid</x-slot>

@push('css') 
.grid > div {
    border: 1px solid gray;
}
@endpush

<div class="container py-4">

    <h1 class="text-3xl font-bold my-8">Sistema de Grillas (.grid)</h1>
    
    <h2 class="text-lg font-bold mb-2">1)Grilla de  4 Columnas(.grid)</h2>
    <div class="grid grid-cols-4">
        <div class="bg-blue-100">1</div>
        <div class="bg-blue-200">2</div>
        <div class="bg-blue-300">3</div>
        <div class="bg-blue-400">4</div>
    </div><!--.grid-->

    <h2 class="text-lg font-bold my-4">2)Grilla de  4 (Columnas Responsive)</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        <div class="bg-blue-100">1</div>
        <div class="bg-blue-200">2</div>
        <div class="bg-blue-300">3</div>
        <div class="bg-blue-400">4</div>
    </div><!--.grid-->

    <h2 class="text-lg font-bold my-4">3)Espaciado de Columnas y filas (gap-2)</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
    <div class="bg-blue-100">1</div>
        <div class="bg-blue-200">2</div>
        <div class="bg-blue-300">3</div>
        <div class="bg-blue-400">4</div>
        <div class="bg-blue-500">5</div>
        <div class="bg-blue-600">6</div>
        <div class="bg-blue-700">7</div>
        <div class="bg-blue-800">8</div>
        <div class="bg-blue-200">9</div>
        <div class="bg-blue-300">10</div>
        <div class="bg-blue-400">11</div>
        <div class="bg-blue-500">12</div>
    </div><!--.grid-->

    <h2 class="text-lg font-bold my-4">4)Espaciado vertical (gap-y-2)</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-2">
        <div class="bg-blue-100">1</div>
        <div class="bg-blue-200">2</div>
        <div class="bg-blue-300">3</div>
        <div class="bg-blue-400">4</div>
        <div class="bg-blue-500">5</div>
        <div class="bg-blue-600">6</div>
        <div class="bg-blue-700">7</div>
        <div class="bg-blue-800">8</div>
        <div class="bg-blue-200">9</div>
        <div class="bg-blue-300">10</div>
        <div class="bg-blue-400">11</div>
        <div class="bg-blue-500">12</div>
    </div><!--.grid-->

    <h2 class="text-lg font-bold my-4">5)Espaciado horizontal (gap-x-2)</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2">
    <div class="bg-blue-100">1</div>
        <div class="bg-blue-200">2</div>
        <div class="bg-blue-300">3</div>
        <div class="bg-blue-400">4</div>
        <div class="bg-blue-500">5</div>
        <div class="bg-blue-600">6</div>
        <div class="bg-blue-700">7</div>
        <div class="bg-blue-800">8</div>
        <div class="bg-blue-200">9</div>
        <div class="bg-blue-300">10</div>
        <div class="bg-blue-400">11</div>
        <div class="bg-blue-500">12</div>
    </div><!--.grid-->

    <h2 class="text-lg font-bold my-4">6)Fusionar Columnas (col-span))</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-blue-100 col-span-2">1</div>
        <div class="bg-blue-200 col-span-2">2</div>
        <div class="bg-blue-300 col-span-3">3</div>
        <div class="bg-blue-400 ">4</div>
        <div class="bg-blue-500 col-span-3">5</div>
        <div class="bg-blue-600 ">6</div>
        <div class="bg-blue-700 ">7</div>
        <div class="bg-blue-800 col-span-3">8</div>
        <div class="bg-blue-800 col-span-4">9</div>
    </div><!--.grid-->
    
    
</div>

@push('js') @endpush

</x-layout>

