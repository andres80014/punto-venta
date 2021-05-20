<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
</div>

<div class="form-group">
    <label for="sell_price">Precio de Venta</label>
    <input type="number" name="sell_price" id="sell_price" class="form-control" placeholder="Precio" required>
</div>

<div class="form-group">
    <label for="category_id">Categoria</label>
    <select class="form-control" id="category_id" name="category_id">
        <option selected>Seleccione</option>
       @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
       @endforeach
    </select>
</div>

<div class="form-group">
    <label for="category_id">Proveedor</label>
    <select class="form-control" id="provider_id"  name="provider_id">
        <option selected>Seleccione</option>
        @foreach($providers as $provider)
            <option value="{{$provider->id}}">{{$provider->name}}</option>
        @endforeach
    </select>
</div>

<div class="custom-file mb-5" >
    <input type="file" class="custom-file-input" name="picture" id="picture" lang="es">
    <label class="custom-file-label" for="image">Seleccionar Archivo</label>
</div>

