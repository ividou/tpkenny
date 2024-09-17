<div class="form-group">
    <label for="pedido_id">Pedido ID:</label>
    <input type="number" class="form-control @error('pedido_id') is-invalid @enderror" id="pedido_id" name="pedido_id" value="{{ old('pedido_id', $pago->pedido_id ?? '') }}">
    @error('pedido_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="monto">Monto</label>
    <input type="number" step="0.01" class="form-control @error('monto') is-invalid @enderror" id="monto" name="monto" value="{{ old('monto', $pago->monto ?? '') }}">
    @error('monto')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="metodo_pago">Método de Pago</label>
    <input type="text" class="form-control @error('metodo_pago') is-invalid @enderror" id="metodo_pago" name="metodo_pago" value="{{ old('metodo_pago', $pago->metodo_pago ?? '') }}">
    @error('metodo_pago')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="fecha_pago">Fecha de Contratación</label>
    <input type="date" name="fecha_pago" id="fecha_pago" class="form-control @error('fecha_pago') is-invalid @enderror" value="{{ old('fecha_pago') }}">
    @error('fecha_pago')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $submitButtonText ?? 'Guardar' }}</button>
</div>

