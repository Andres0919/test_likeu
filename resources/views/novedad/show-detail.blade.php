@include('header')
<h1>Detalle novedad: {{ $novedad->nombre }}</h1>
        <p> fecha inicio: {{ $novedad->fecha_inicio }} </p>
        <p> fecha fin: {{ $novedad->fecha_fin }} </p>
        <p> duración: {{ $novedad->duracion }} </p>
        <p> categoría: {{ $novedad->categoria }} </p>
        <p> descripción: {{ $novedad->descripcion }} </p>
@if(count($novedad->operaciones) > 0)
    @foreach ($novedad->operaciones as $operacion)
        <p> Operacion: {{ $operacion->nombre }} </p>
    @endforeach
@else
    @foreach ($novedad->agentes as $agente)
        <p> Agente: {{ $agente->nombre }} </p>
    @endforeach
@endif
@include('footer')
