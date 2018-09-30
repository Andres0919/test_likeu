@include('header')
<h1>Detalle operacion: {{ $operacion->nombre }}</h1>
@if(count($operacion->novedades) != 0)
<table class="table">
    <thead>
        <td> nombre </td>
        <td> fecha inicio </td>
        <td> fecha fin </td>
        <td> duración </td>
        <td> categoría </td>
        <td> descripcion </td>
    </thead>
    @foreach ($operacion->novedades as $novedad)
     <tr>
        <td> {{ $novedad->nombre }} </td>
        <td> {{ $novedad->fecha_inicio }} </td>
        <td> {{ $novedad->fecha_fin }} </td>
        <td> {{ $novedad->duracion }} </td>
        <td> {{ $novedad->categoria }} </td>
        <td> {{ $novedad->descripción }} </td>
     </tr>
    @endforeach
</table>
@else
<p>NO HAY NOVEDADES</p>
@endif
@include('footer')
