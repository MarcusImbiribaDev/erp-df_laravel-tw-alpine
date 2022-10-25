<x-app-layout>
  <x-slot:header>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
      {{ __('People') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-600 border-b border-gray-200">
          <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
              {{ __('Edit Person') }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
              {{ __('Edit personal data.') }}
            </p>
          </div>
          <div class="px-4 py-5 sm:p-6">
            <form action="{{ route('people.store') }}" method="POST">
              @csrf
              <div class="grid grid-cols-6 gap-6">
                <x-form.input-text name="first_name" label="{{ __('First name') }}" autocomplete="given-name" value="{{ $person->first_name }}" />
                <x-form.input-text name="last_name" label="{{ __('Last name') }}" autocomplete="family-name" value="{{ $person->last_name }}" />
                <x-form.input-text name="cpf" label="CPF" value="{{ $person->cpf }}" />
                <x-form.select name="sex" label="{{ __('Sex')}}" autocomplete="sex">
                  @if ($person->sex === 'F')
                    <option value="{{ $person->sex }}" selected>{{ __('Female') }}</option>
                    <option value="M">{{ __('Male') }}</option>
                  @elseif ($person->sex === 'M')
                    <option value="M">{{ __('Male') }}</option>
                    <option value="{{ $person->sex }}" selected>{{ __('Male') }}</option>
                  @else
                    <option value="" disabled selected></option>
                    <option value="F">{{ __('Female') }}</option>
                    <option value="M">{{ __('Male') }}</option>
                  @endif
                </x-form.select>
                <x-form.input-text name="email" label="{{ __('Main Email') }}" autocomplete="email" value="{{ $person->personal_email_id }}" />
              </div>
              <div class="flex justify-end mt-4">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  {{ __('Create') }}
                </button>
            </form>
            <a href="{{ route('people.index') }}" class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
              {{ __('Cancel') }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
