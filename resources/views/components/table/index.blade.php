@props([])

<table class="w-full text-base text-center text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
      {{ $header }}
    </tr>
  </thead>
    <tbody>
      {{ $slot }}
    </tbody>
</table>
