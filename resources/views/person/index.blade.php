<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('People') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
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
                  <x-table.cell>{{ $person->person_email_id }}</x-table.cell>
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