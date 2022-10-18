<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Personal Phones') }}
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
                <x-table.column>{{ __('Person') }}</x-table.column>
                <x-table.column>{{ __('Mobile Operator') }}</x-table.column>
                <x-table.column>DDD</x-table.column>
                <x-table.column>{{ __('Phone Number') }}</x-table.column>
                <x-table.column>{{ __('Actions') }}</x-table.column>
              </x-slot>
              @foreach ($personPhones as $personPhone)
                <x-table.row>
                  <x-table.cell>{{ $personPhone->id }}</x-table.cell>
                  <x-table.cell>{{ $personPhone->person_id }}</x-table.cell>
                  <x-table.cell>{{ $personPhone->mobile_operator }}</x-table.cell>
                  <x-table.cell>{{ $personPhone->ddd }}</x-table.cell>
                  <x-table.cell>{{ $personPhone->phone_number }}</x-table.cell>
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