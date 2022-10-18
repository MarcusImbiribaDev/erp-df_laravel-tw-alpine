<x-table.test1 {{ $attributes }}>
  {{ $slot }}
</x-table.test1>

{{-- <x-table.test1.simple>
  <x-slot:header>
    <th scope="col" class="py-3 px-6">Id</th>
    <th scope="col" class="py-3 px-6">{{ __('Person') }}</th>
    <th scope="col" class="py-3 px-6">{{ __('Mobile Operator') }}</th>
    <th scope="col" class="py-3 px-6">{{ __('DDD') }}</th>
    <th scope="col" class="py-3 px-6">{{ __('Phone Number') }}</th>
    <th scope="col" class="py-3 px-6">{{ __('Actions') }}</th>
  </x-slot>
  <x-slot:body>
  @foreach ($personPhones as $personPhone)
    @if ($loop->iteration % 2 == 0)
      <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
     @else
      <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
     @endif
        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          {{ $personPhone->id }}
        </th>
        <td class="py-4 px-6">
          {{ $personPhone->person_id }}
        </td>
        <td class="py-4 px-6">
          {{ $personPhone->mobile_operator }}
        </td>
        <td class="py-4 px-6">
          {{ $personPhone->ddd }}
        </td>
        <td class="py-4 px-6">
          {{ $personPhone->phone_number }}
        </td>
        <td class="py-4 px-6">
          <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
          <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
        </td>
      </tr>
  @endforeach
  </x-slot>
</x-table.test1.simple> --}}