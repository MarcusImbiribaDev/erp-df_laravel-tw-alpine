<x-app-layout>
  <x-slot:header>
    {{ __('People') }}
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-600 border-b border-gray-200">

          <x-index_page.body-header>
            <x-slot:title>{{ __('List Persons') }}</x-slot>
            <x-slot:subTitle>{{ __('List all physical persons.') }}</x-slot>
            <x-form.button url="{{ route('people.create') }}">{{ __("New") }}</x-form.button>
          </x-index_page.body-header>

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
                  <x-table.cell>{{ $person->mainEmail->email }}</x-table.cell>
                  <x-table.cell>
                    <x-table.action url="{{ route('people.edit', $person->id) }}">{{ __("Edit") }}</x-table.action> |
                    <x-table.action url="{{ route('people.show', $person->id) }}">{{ __("Show") }}</x-table.action>
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