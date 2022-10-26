@props(
    [
        'label',
        'name',
        'value' => '',
        'placeholder' => '',
        'type' => 'text',
        'required' => false,
        'disabled' => false,
        'readonly' => false,
        'autofocus' => false,
        'autocomplete' => 'off',
        'help' => '',
        'error' => '',
        'class' => '',
        'labelClass' => '',
        'inputClass' => '',
        'helpClass' => '',
        'errorClass' => '',
    ]
)

<div class="col-span-6 sm:col-span-3">
  <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 dark:text-gray-200">{{ $label }}</label>
  <input 
    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
      block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
      dark:bg-gray-600 dark:text-gray-200 dark:border-gray-500
      disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
      dark:disabled:bg-gray-400 dark:disabled:text-slate-800 dark:disabled:border-gray-400 dark:disabled:shadow-none"
    type="{{ $type }}"
    name="{{ $name }}"
    autocomplete="{{ $autocomplete }}"
    value="{{ $value }}"
    @if($disabled == 'true') disabled @endif
  >
</div>
