@include('header')
<h1>Detalle agente: {{ $agente->nombre }}</h1>
@foreach ($agente->operaciones as $operacion )
<p>Operación: {{ $operacion->nombre }}</p>
@endforeach
@if(count($agente->novedades) != 0)
<table>
    <tr>
        <td> nombre </td>
        <td> fecha inicio </td>
        <td> fecha fin </td>
        <td> duracion </td>
        <td> descripcion </td>
    </tr>
    @foreach ($agente->novedades as $novedad)
     <tr>
        <td> {{ $novedad->nombre }} </td>
        <td> {{ $novedad->fecha_inicio }} </td>
        <td> {{ $novedad->fecha_fin }} </td>
        <td> {{ $novedad->duracion }} </td>
     </tr>
    @endforeach
</table>
@else
<p>NO HAY NOVEDADES</p>
@endif
@include('footer')
