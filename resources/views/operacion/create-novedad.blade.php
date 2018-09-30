<h2>Crear Novedad</h2>
<form action="/operacion/save-novedad" method="POST">
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
    </select><br/>
    <span>Descripción</span><br/>
    <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea><br/>
    <input type="hidden" name="id" value="{{ $id }}">
    <input type="submit" value="Guardar">
</form>
