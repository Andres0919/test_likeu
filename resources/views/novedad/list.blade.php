<h2>TODAS LAS NOVEDADES</h2>
    <?php if(count($novedades) != 0) {?>
    <table>
        <tr>
            <td>NOMBRE</td>
            <td>FECHA INICIO</td>
            <td>FECHA FIN</td>
            <td>DURACION</td>
        </tr>

    <?php foreach($novedades as $novedad){ ?>
        <tr>
            <td><?php echo $novedad->nombre ?></td>
            <td><?php echo $novedad->fecha_inicio ?></td>
            <td><?php echo $novedad->fecha_fin ?></td>
            <td><?php echo $novedad->duracion ?></td>
        </tr>
    <?php } ?>
    </table>
    <?php }else{ ?>
        <p>No Hay novedades</p>
    <?php } ?>

<a href="/novedades/nuevo">Crear</a>
