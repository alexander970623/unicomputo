<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Nuevo Producto</h2>

<form action="{{ route('productos.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Código</label>
<input type="text" name="codigo" class="form-control">
</div>

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control">
</div>

<div class="mb-3">
<label>Precio</label>
<input type="number" step="0.01" name="precio" class="form-control">
</div>

<div class="mb-3">
<label>Cantidad</label>
<input type="number" name="cantidad" class="form-control">
</div>

<div class="mb-3">
<label>Categoría</label>
<input type="text" name="categoria" class="form-control">
</div>

<button class="btn btn-success">
Guardar
</button>

<a href="{{ route('productos.index') }}" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>