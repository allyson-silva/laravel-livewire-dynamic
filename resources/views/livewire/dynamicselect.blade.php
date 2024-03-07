<div style="text-align: center">
  <select wire:model.change="selectedValue" wire:change="updatedSelectedValue"> <option value="">Selecione uma opção</option>
      @foreach (range(1, 10) as $value) <option value="{{ $value }}">Opção {{ $value }}</option>
      @endforeach
  </select>

  @if ($errors->has('selectedValue'))
      <div class="error-message">{{ $errors->first('selectedValue') }}</div> @endif

  O valor selecionado é {{ $selectedValue }}
</div>