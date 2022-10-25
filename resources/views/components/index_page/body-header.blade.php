<div class="flex flex-row">
  <div class="basis-1/2">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
        {{ $title }}
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
        {{ $subTitle }}
      </p>
    </div>
  </div>
  <div class="basis-1/2 text-right">
    <div class="px-4 py-5 sm:px-6">
      {{ $slot }}
    </div>
  </div>
</div>