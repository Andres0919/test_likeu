@include('header')
<h2>TODOS LOS AGENTES</h2>
    <?php if(count($agentes) != 0) {?>
    <table class="table">
        <thead>
            <td>NOMBRE</td>
            <td>ACCION</td>
        </thead>

    <?php foreach($agentes as $agente){ ?>
        <tr>
            <td><?php echo $agente->nombre ?></td>
            <td>
                <a class="btn btn-success" href="/agente/{{ $agente->id }}/novedad">Agregar novedad </a>
                <a class="btn btn-info" href="/agente/{{ $agente->id }}/detalle" >Detalle </a>
            </td>
        </tr>
    <?php } ?>
    </table>
    <?php }else{ ?>
        <p>No Hay agentes</p>
    <?php } ?>
    @include('footer')
