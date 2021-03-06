<div class="form-group {{ $class }} {{ $errors->has($id) ? 'has-error' : false }}">
	<label for="{{ $id }}" class="control-label">{{ $text }} {{ $required ? '<span class="required-red">*</span>' : ''}}</label>
	<div class="form-controls">
		<input type="text" id="{{ $id }}" name="{{ $id }}" value="{{ $value }}" class="form-control" placeholder="{{ $placeholder }}" {{ $disabled ? 'readonly' : '' }} {{ $required ? 'required' : '' }}>
		@if ($helpText)
			<span class='help-block'>{{ $helpText }}</span>
		@endif
		@foreach($errors->get($id) as $message)
			<span class='help-block'>{{ $message }}</span>
		@endforeach
	</div>
</div>