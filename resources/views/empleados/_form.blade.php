<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre', $empleado->nombre ?? '') }}">
    @error('nombre')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="apellido">Apellido:</label>
    <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" value="{{ old('apellido', $empleado->apellido ?? '') }}">
    @error('apellido')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $empleado->email ?? '') }}">
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="telefono">Teléfono:</label>
    <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ old('telefono', $empleado->telefono ?? '') }}">
    @error('telefono')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="puesto">Puesto:</label>
    <input type="text" class="form-control @error('puesto') is-invalid @enderror" id="puesto" name="puesto" value="{{ old('puesto', $empleado->puesto ?? '') }}">
    @error('puesto')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="salario">Salario:</label>
    <input type="number" step="0.01" class="form-control @error('salario') is-invalid @enderror" id="salario" name="salario" value="{{ old('salario', $empleado->salario ?? '') }}">
    @error('salario')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="fecha_contratacion">Fecha de Contratación</label>
    <input type="date" name="fecha_contratacion" id="fecha_contratacion" class="form-control @error('fecha_contratacion') is-invalid @enderror" value="{{ old('fecha_contratacion') }}">
    @error('fecha_contratacion')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $submitButtonText ?? 'Guardar' }}</button>
</div>

