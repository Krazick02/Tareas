@csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="" class="form-label">Ingrese el nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="..." value="{{old('nombre')}}">
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="finalizada" id="finalizada" class="form-check-input" @checked(old('finalizada'))">
                    <label for="finalizada">Finalizada</label>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="urgencia" class="form-label">Grado de urgencia</label>
                <select name="urgencia" id="urgencia" class="form-select">
                    <option value="0">Baja</option>
                    <option value="1">Normal</option>
                    <option value="2">Urgente</option>
                </select>
                <script>
                    document.getElementById('urgencia').value="{{old('urgencia')}}";
                </script>
            </div>
            <div class="col-sm-4">
                <label for="fecha_limite" class="form-label">Fecha Limite</label>
                <input type="datetime-local" name="fecha_limite" id="fecha_limite" class="form-control" value="{{old('fecha_limite')}}">
            </div>
            <div class="col-sm-12">
                <label for="descripcion" class="form-label">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control">{{old('descripcion')}}</textarea>
            </div>
            <div class="col-sm-12 text-end">
                <button type="submit" class="btn btn-primary m-2">Guardar</button>
            </div>
        </div>
