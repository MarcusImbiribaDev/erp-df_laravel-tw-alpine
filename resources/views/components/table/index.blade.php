@aware([])

@props([
  'people',
  ])

<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">Id</th>
            <th scope="col" class="py-3 px-6">CPF</th>
            <th scope="col" class="py-3 px-6">{{ __('First Name') }}</th>
            <th scope="col" class="py-3 px-6">{{ __('Last Name') }}</th>
            <th scope="col" class="py-3 px-6">{{ __('Sex') }}</th>
            <th scope="col" class="py-3 px-6">{{ __('Actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($people as $person)
          @if ($loop->iteration % 2 == 0)
            <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          @else
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          @endif
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $person->id }}
                </th>
                <td class="py-4 px-6">
                    {{ $person->cpf }}
                </td>
                <td class="py-4 px-6">
                    {{ $person->first_name }}
                </td>
                <td class="py-4 px-6">
                    {{ $person->last_name }}
                </td>
                </td>
                <td class="py-4 px-6">
                    {{ $person->sex }}
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
