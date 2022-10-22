@aware(['left', 'right'])

@props([
  'href',
  'confirmation',
  'type' => 'button',
  'buttonClasses',
  'classes' => $buttonClasses . ' w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md md:py-4 md:text-lg md:px-10',
  ])

<div {{ $attributes->merge(['class' => 'rounded-md shadow']) }}>
  @isset ($href)
    <a
      href="{{ $href }}"
      class="{{ $classes }}"
      @isset ($confirmation)
        x-data
        @click.prevent="if (confirm('{{ $confirmation }}')) window.location='{{ $href }}';"
      @endisset 
    >
      {{ $left }}
      {{ $slot }}
      {{ $right }}
    </a>
  @else
    <button
      type="{{ $type }}"
      class="{{ $classes }}"
    >
      {{ $left }}
      {{ $slot }}
      {{ $right }}
    </button>
  @endisset
</div>