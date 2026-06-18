<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Editar Producto</h2>

<form action="{{ route('productos.update',$producto->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Código</label>
<input type="text" name="codigo" value="{{ $producto->codigo }}" class="form-control">
</div>

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control">
</div>

<div class="mb-3">
<label>Precio</label>
<input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" class="form-control">
</div>

<div class="mb-3">
<label>Cantidad</label>
<input type="number" name="cantidad" value="{{ $producto->cantidad }}" class="form-control">
</div>

<div class="mb-3">
<label>Categoría</label>
<input type="text" name="categoria" value="{{ $producto->categoria }}" class="form-control">
</div>

<button class="btn btn-primary">
Actualizar
</button>

<a href="{{ route('productos.index') }}" class="btn btn-secondary">
Cancelar
</a>

</form>

</div>

</body>
</html>