@include('header')
<h2>TODAS LAS OPERACIONES</h2>
    <?php if(count($operaciones) != 0) {?>
    <table class="table" >
        <thead>
            <td>NOMBRE</td>
            <td colspan="2">ACCION</td>
        </thead>

    <?php foreach($operaciones as $operacion){ ?>
        <tr>
            <td><?php echo $operacion->nombre ?></td>
            <td colspan="2">
                <a class="btn btn-success" href="operacion/{{ $operacion->id }}/novedad">Agregar Novedad</a>
                <a class="btn btn-info" href="operacion/{{ $operacion->id }}/detalle" >Detalle </a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <?php }else{ ?>
        <p>No Hay operaciones</p>
    <?php } ?>
@include('footer')
