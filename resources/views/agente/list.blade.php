<h2>TODOS LOS AGENTES</h2>
    <?php if(count($agentes) != 0) {?>
    <table>
        <tr>
            <td>NOMBRE</td>
            <td>ACCION</td>
        </tr>

    <?php foreach($agentes as $agente){ ?>
        <tr>
            <td><?php echo $agente->nombre ?></td>
            <td><button>Novedad </button> <button>Detalle </button></td>
        </tr>
    <?php } ?>
    </table>
    <?php }else{ ?>
        <p>No Hay agentes</p>
    <?php } ?>
