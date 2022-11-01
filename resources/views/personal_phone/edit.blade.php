<x-app-layout>
  <x-slot:header>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
      {{ __('Personal Phones') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-600 border-b border-gray-200">
          <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
              {{ __('Edit Personal Phones') }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
              {{ __('Edit personal phones data.') }}
            </p>
          </div>
          <div class="px-4 py-5 sm:p-6">
@if ($errors->any())
  <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
@endif

            <form action="{{ route('personal_phones.update', $personalPhone) }}" method="POST">@csrf @method('PUT')
              <div class="grid grid-cols-6 gap-6">
                <x-form.input-text name="person_id" label="{{ __('Person') }}" autocomplete="given-name" value="{{ $personalPhone->person_id }}" />
                <x-form.input-text name="mobile_operator" label="{{ __('Mobile Operator') }}" value="{{ $personalPhone->mobile_operator }}" />
                <x-form.input-text name="ddd" label="DDD" autocomplete="tel-area-code" value="{{ $personalPhone->ddd }}" />
                <x-form.input-text name="phone_number" label="{{ __('Phone Number') }}" autocomplete="tel-local" value="{{ $personalPhone->phone_number }}" />
                <x-form.select name="type" label="{{ __('Type') }}">
                  @foreach ($contactTypeEnum as $contactType)
                    @if ($personalPhone->type === $contactType->value)
                      <option value="{{ $contactType->value }}" selected>{{ __($contactType->value) }}</option>
                    @else
                      <option value="{{ $contactType->value }}">{{ __($contactType->value) }}</option>
                    @endif
                  @endforeach
                </x-form.select>
              </div>
              <div class="flex justify-end mt-4">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  {{ __('Save') }}
                </button>
            </form>
            <a href="{{ route('personal_phones.index') }}" class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
              {{ __('Cancel') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
