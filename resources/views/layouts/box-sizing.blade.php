<x-layout>
<x-slot name="title">Welcome</x-slot>

<div class="p-8">
    <h1 class="text-2xl font-bold">Tamaño de Caja (Box Sizing)</h1>
    
    <p class="py-4">Utilidades para controlar cómo el navegador debe calcular el tamaño total de un elemento.</p>

    <table class="w-full text-left border-collapse mb-8">
        <thead>
            <tr class="border-b border-slate-200">
                <th class="">Clase</th>
                <th class="">Propiedades</th>
            </tr>
        </thead>
        <tbody class="align-baseline">
            <tr class="border-b border-slate-200">
                <td class="py-2 pr-2 font-medium text-xs text-sky-500 whitespace-nowrap">box-border</td>
                <td class="py-2 pl-2 font-medium text-xs leading-6 text-indigo-600 whitespace-nowrap">box-sizing: border-box; </td>
            </tr>
            <tr class="border-b border-slate-200">
                <td class="py-2 pr-2 font-medium text-xs text-sky-500 whitespace-nowrap">box-content</td>
                <td class="py-2 pl-2 font-medium text-xs text-indigo-600 whitespace-nowrap">box-sizing: content-box;</td>
            </tr>
        </tbody>
    </table>

    <h2 class="-ml-4 pl-4 mb-2 text-sm leading-6 text-sky-500 font-semibold">
        Uso Basico
    </h2>

    <h3 class="-ml-4 pl-4 text-xl font-semibold">Incluyendo bordes y relleno</h3>
    
    <p>Usé <b>box-borderpara</b> establecer un elemento <b>box-sizing</b>, diciéndole al navegador que incluya los bordes del elemento y el relleno cuando le dé una altura o un ancho</p>
    
    <p>Esto significa que un elemento de 100px × 100px con un borde de 2px y 4px de relleno en todos los lados se representará como 100px × 100px, con un área de contenido interno de 88px × 88px</p>
    
    <div class="px-4 mt-4">
        <ul class="list-disc">
            <li>A 100px se le resta 12px, dando un total de 88px</li>
            <li>El 88px es el resultado de sumar el border y el padding</li>
            <li>El border de (2px) :  2px Izq + 2px Der = 4px </li>
            <li>El padding: (4px) :  4px Izq + 4px Der = 8px </li>
        </ul>
    </div>
    

</div>

</x-layout>
