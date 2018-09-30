<h2>Crear Novedad</h2>
<form action="./save" method="POST">
    {{ csrf_field() }}
    <span>Nombre</span>
    <input type="text" name="nombre"><br/>
    <span>fecha inicio</span>
    <input type="datetime-local" name="fecha_inicio"><br/>
    <span>fecha fin</span>
    <input type="datetime-local" name="fecha_fin"><br/>
    <span>Categoria</span>
    <select name="categoria" id="categorias">
        <option value="Reunión">Reunión</option>
        <option value="Tecnológica">Tecnológica</option>
        <option value="Formación">Formación</option>
        <option value="Capacitación">Capacitación</option>
    </select>
    <span> Para: </span>
    <select name="" id="">
        <option value="">Agente</option>
        <option value="">Operacion</option>
    </select>
    <input type="submit" value="Guardar">
</form>
<h4>Todas las novedades</h4>
<p>NO HAY NOVEDADES</p>
