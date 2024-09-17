

<div class="form-group">
    <label for="cliente_id">Cliente ID:</label>
    <input type="number" class="form-control @error('cliente_id') is-invalid @enderror" id="cliente_id" name="cliente_id" value="{{ old('cliente_id', $cliente->cliente_id ?? '') }}">
    @error('cliente_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>




<div class="form-group">
    <label for="total">Total:</label>
    <input type="number" step="0.01" class="form-control" id="total" name="total" value="{{ old('total', $pedido->total) }}">
</div>


<div class="form-group">
    <label for="fecha_pedido">Fecha Pedido:</label>
    <input type="date" class="form-control @error('fecha_pedido') is-invalid @enderror" id="fecha_pedido" name="fecha_pedido" value="{{ old('fecha_pedido', $pedido->fecha_pedido ?? '') }}">
    @error('fecha_pedido')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="estado">Estado:</label>
    <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" value="{{ old('estado', $pedido->estado ?? '') }}">
    @error('estado')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $submitButtonText ?? 'Guardar' }}</button>
</div>
