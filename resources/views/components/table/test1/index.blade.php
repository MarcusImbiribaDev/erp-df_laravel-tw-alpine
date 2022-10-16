@aware([])

@props([
  'records',
  ])

<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <tr class="bg-gray-200">{{ $header }}</tr>
      </tr>
    </thead>
    <tbody>
      @foreach ($records as $record)
        @if ($loop->iteration % 2 == 0)
          <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        @else
          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        @endif
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $record->id }}
            </th>
            @foreach ($rows as $row)
              <td class="py-4 px-6">
                  {{ $record->{$row['name']} }}
              </td>
            @endforeach
              <td class="py-4 px-6">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
              </td>
          </tr>
      @endforeach
    </tbody>
</table>
