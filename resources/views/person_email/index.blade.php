<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Person Emails') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <x-table.simple
              :$records
              :columns='[
                ["name" => "Id"],
                ["name" => "Person"],
                ["name" => "Email"],
                ["name" => "Type"],
                ["name" => "Actions"]
              ]'
              :rows='[
                ["name" => "person_id"],
                ["name" => "email"],
                ["name" => "type"]
              ]'
            >
            </x-tables.simple>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>