<x-app-layout>
  <x-slot:header>
    {{ __('Personal Phones') }}
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-600 border-b border-gray-200">

          <x-index_page.body-header>
            <x-slot:title>{{ __('List Personal Phones') }}</x-slot>
            <x-slot:subTitle>{{ __('List all physical persons phones.') }}</x-slot>
            <x-form.button url="{{ route('personal_phones.create') }}">{{ __("New") }}</x-form.button>
          </x-index_page.body-header>

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
              @foreach ($personalPhones as $personalPhone)
                <x-table.row>
                  <x-table.cell>{{ $personalPhone->id }}</x-table.cell>
                  <x-table.cell>{{ $personalPhone->person_id }}</x-table.cell>
                  <x-table.cell>{{ $personalPhone->mobile_operator }}</x-table.cell>
                  <x-table.cell>{{ $personalPhone->ddd }}</x-table.cell>
                  <x-table.cell>{{ $personalPhone->phone_number }}</x-table.cell>
                  <x-table.cell>
                    <x-table.action url="{{ route('personal_phones.edit', $personalPhone->id) }}">{{ __("Edit") }}</x-table.action> |
                    <x-table.action url="{{ route('personal_phones.show', $personalPhone->id) }}">{{ __("Show") }}</x-table.action>
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