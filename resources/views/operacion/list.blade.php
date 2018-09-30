<h2>TODAS LAS OPERACIONES</h2>
    <?php if(count($operaciones) != 0) {?>
    <table>
        <tr>
            <td>NOMBRE</td>
            <td>ACCION</td>
        </tr>

    <?php foreach($operaciones as $operacion){ ?>
        <tr>
            <td><?php echo $operacion->nombre ?></td>
            <td><a href="operacion/{{ $operacion->id }}/novedad">Agregar Novedad</a> <button>Detalle </button></td>
        </tr>
    <?php } ?>
    </table>
    <?php }else{ ?>
        <p>No Hay operaciones</p>
    <?php } ?>
