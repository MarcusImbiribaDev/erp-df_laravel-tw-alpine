<x-app-layout>
  <x-slot:header>
    {{ __('Person Emails') }}
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-600 border-b border-gray-200">

          <x-index_page.body-header>
            <x-slot:title>{{ __('List Personal Emails') }}</x-slot>
            <x-slot:subTitle>{{ __('List all physical persons emails.') }}</x-slot>
            <x-form.button url="{{ route('personal_emails.create') }}">{{ __("New") }}</x-form.button>
          </x-index_page.body-header>

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
                  <x-table.cell>{{ $personalEmail->person->first_name .' '. $personalEmail->person->last_name }}</x-table.cell>
                  <x-table.cell>{{ $personalEmail->email }}</x-table.cell>
                  <x-table.cell>{{ $personalEmail->type }}</x-table.cell>
                  <x-table.cell>
                    <x-table.action url="{{ route('personal_emails.edit', $personalEmail) }}">{{ __("Edit") }}</x-table.action> |
                    <x-table.action url="{{ route('personal_emails.show', $personalEmail) }}">{{ __("Show") }}</x-table.action>
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
