<x-layout>
<x-slot name="title">Grid</x-slot>
<div class="container py-4">

    <h1 class="text-3xl font-bold mt-8 mb-2">Layouts</h1>
    <p>Utilidades para controlar cómo el navegador debe calcular el tamaño total de un elemento.</p>
    
    <hr class="my-4">

    <h2 class="text-lg font-bold mb-2">1)Incluyendo bordes y relleno (.box-content)</h2>
    
    <p>Úselo box-border para establecer un elemento con tamaño de cada "box-sizingen" en "border-box", diciéndole al navegador que incluya los bordes del elemento y el relleno cuando le dé una altura o un ancho</p>
    <br>
    <p>Esto significa que un elemento de 100px × 100px con un borde de 2px y 4px de relleno en todos los lados se representará como 100px × 100px, con un área de contenido interno de 88 px× 88px</p>
    <br>
    <p>Tailwind hace que este sea el valor predeterminado para todos los elementos en nuestros estilos base de verificación previa </p>

    <img src="/img/box-border-1-tailwindcss.jpg" alt="">

    <textarea cols='100' rows='4' class="my-2 border-4 border-gray-600 rounded">
        <div class="box-border h-32 w-32 p-4 border-4 ...">
            <!-- ... -->
        </div>
    </textarea>

</div>
</x-layout>
