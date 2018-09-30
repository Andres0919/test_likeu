@include('header')
<h2>Crear Novedad</h2>
<form action="/agente/save-novedad" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control"  type="text" name="nombre" required>
    </div>
    <div class="form-group">
        <label>fecha inicio</label>
        <input class="form-control"  type="datetime-local" name="fecha_inicio" required>
    </div>
    <div class="form-group">
        <label>fecha fin</label>
        <input class="form-control" type="datetime-local" name="fecha_fin" required>
    </div>
    <div class="form-group">
        <label>Categoria</label>
        <select class="form-control"  name="categoria" id="categorias" required>
            <option value="Reunión">Reunión</option>
            <option value="Tecnológica">Tecnológica</option>
            <option value="Formación">Formación</option>
            <option value="Capacitación">Capacitación</option>
        </select>
    </div>
    <div class="form-group">
        <label>Descripción</label><br/>
        <textarea class="form-control"  name="descripcion" id="descripcion" cols="30" rows="5" required></textarea>
    </div>
    <input type="hidden" name="id" value="{{ $id }}">
    <input class="btn btn-success" type="submit" value="Guardar">
</form>
@include('footer')
