<div class="inline-flex items-stretch rounded-md border bg-white dark:border-gray-800 dark:bg-gray-700" x-data="{ isActive: false }">
  <a class="rounded-l-md px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 hover:text-gray-700 dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-200">
    {{ Auth::user()->name }}
  </a>

  <div class="relative">
    <button type="button" class="inline-flex h-full items-center justify-center rounded-r-md border-l border-gray-100 px-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-200" x-on:click="isActive = !isActive">
      <span class="sr-only">Menu</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
      </svg>
    </button>

    <div
      class="absolute right-0 z-10 mt-4 w-56 origin-top-right rounded-md border border-gray-100 bg-white shadow-lg dark:border-gray-800 dark:bg-gray-700"
      x-cloak
      x-transition
      x-show="isActive"
      x-on:click.away="isActive = false"
      x-on:keydown.escape.window="isActive = false"
    >
      <div class="flow-root py-2">
        <div class="-my-2 divide-y divide-gray-100 dark:divide-gray-800">
          <div class="p-2">
            <strong class="block p-2 text-xs font-medium text-gray-400 dark:text-white">
              {{ __('Lighting') }}
            </strong>

            <a class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-300 cursor-pointer""
              x-data="{
                toggleDark: () => {
                  localStorage.theme = 'dark';
                  document.documentElement.classList.add('dark');
                },
              }"
              @click="toggleDark"
            >
              {{ __('Dark Mode') }}
            </a>

            <a class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-300 cursor-pointer"
              x-data="{
                toggleLight: () => {
                  localStorage.theme = 'light';
                  document.documentElement.classList.remove('dark');
                },
              }"
              @click="toggleLight"
            >
              {{ __('Light Mode') }}
            </a>

            <a class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 dark:text-white dark:hover:bg-gray-800 dark:hover:text-gray-300 cursor-pointer"
              x-data="{
                toggleSystem: () => {
                  if (localStorage.theme === 'dark') {
                      document.documentElement.classList.remove('dark');
                      localStorage.removeItem('dark');
                      window.location.reload();
                  } else {
                      localStorage.removeItem('light');
                      window.location.reload();
                  }
                },
              }"
              @click="toggleSystem"
            >
              {{ __('System Mode') }}
            </a>
          </div>

          <div class="p-2">
            <strong class="block p-2 text-xs font-medium text-gray-400 dark:text-white">
              {{ __('User') }}
            </strong>
            <form method="POST" action="{{ route('logout') }}">@csrf
              <button type="submit" class="flex w-full items-center gap-2 rounded-lg px-4 py-2 text-sm text-red-700 hover:bg-red-50 dark:text-red-500 dark:hover:bg-red-600/10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd" />
                </svg>
                {{ __('Log Out') }}
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
