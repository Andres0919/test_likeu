@include('header')
<h2>TODAS LAS NOVEDADES</h2>
    <?php if(count($novedades) != 0) {?>
    <table class="table">
        <thead>
            <td>NOMBRE</td>
            <td>FECHA INICIO</td>
            <td>FECHA FIN</td>
            <td>DURACION</td>
            <td>ACCION</td>
        </thead>

    <?php foreach($novedades as $novedad){ ?>
        <tr>
            <td><?php echo $novedad->nombre ?></td>
            <td><?php echo $novedad->fecha_inicio ?></td>
            <td><?php echo $novedad->fecha_fin ?></td>
            <td><?php echo $novedad->duracion ?></td>
            <td>
                <a class="btn btn-info" href="/novedad/{{ $novedad->id }}/detalle"> Ver detalle </a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <?php }else{ ?>
        <p>No Hay novedades</p>
    <?php } ?>

@include('footer')
