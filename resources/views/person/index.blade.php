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
          <div class="flex flex-row">
            <div class="basis-1/2">
              <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                  {{ __('List Persons') }}
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
                  {{ __('List all physical persons.') }}
                </p>
              </div>
            </div>
            <div class="basis-1/2 text-right">
              <div class="px-4 py-5 sm:px-6">
                <x-form.button url="{{ route('people.create') }}">{{ __("New") }}</x-form.button>
              </div>
            </div>
          </div>
          <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <x-table>
              <x-slot:header>
                <x-table.column>Id</x-table.column>
                <x-table.column>CPF</x-table.column>
                <x-table.column>{{ __('First Name') }}</x-table.column>
                <x-table.column>{{ __('Last Name') }}</x-table.column>
                <x-table.column>{{ __('Sex') }}</x-table.column>
                <x-table.column>{{ __('Main Email') }}</x-table.column>
                <x-table.column>{{ __('Actions') }}</x-table.column>
              </x-slot>
              @foreach ($people as $person)
                <x-table.row>
                  <x-table.cell>{{ $person->id }}</x-table.cell>
                  <x-table.cell>{{ $person->cpf }}</x-table.cell>
                  <x-table.cell>{{ $person->first_name }}</x-table.cell>
                  <x-table.cell>{{ $person->last_name }}</x-table.cell>
                  <x-table.cell>{{ $person->sex }}</x-table.cell>
                  <x-table.cell>{{ $person->personal_email_id }}</x-table.cell>
                  <x-table.cell>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                  </x-table.cell>
                </x-table.row>
              @endforeach
            </x-table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>