<x-app-layout>
  <x-slot:header>
    {{ __('Person Emails') }}
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-600 border-b border-gray-200">
          <div class="flex flex-row">
            <div class="basis-1/2">
              <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                  {{ __('List Personal Emails') }}
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
                  {{ __('List all physical persons emails.') }}
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
                <x-table.column>{{ __('Person') }}</x-table.column>
                <x-table.column>{{ __('Email') }}</x-table.column>
                <x-table.column>{{ __('Type') }}</x-table.column>
                <x-table.column>{{ __('Actions') }}</x-table.column>
              </x-slot>
              @foreach ($personalEmails as $personalEmail)
                <x-table.row>
                  <x-table.cell>{{ $personalEmail->id }}</x-table.cell>
                  <x-table.cell>{{ $personalEmail->person_id }}</x-table.cell>
                  <x-table.cell>{{ $personalEmail->email }}</x-table.cell>
                  <x-table.cell>{{ $personalEmail->type }}</x-table.cell>
                  <x-table.cell>
                    <a href="{{ route('personal_emails.edit', $personalEmail->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                    <a href="{{ route('personal_emails.show', $personalEmail->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
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