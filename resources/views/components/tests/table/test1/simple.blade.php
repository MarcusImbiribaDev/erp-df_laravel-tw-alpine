<x-table {{ $attributes }}>
  {{ $slot }}
</x-table>

{{-- <x-table.simple
  :$records
  :columns='[
    ["name" => "Id"],
    ["name" => "CPF"],
    ["name" => "First Name"],
    ["name" => "Last Name"],
    ["name" => "Sex"],
    ["name" => "Actions"]
  ]'
  :rows='[
    ["name" => "cpf"],
    ["name" => "first_name"],
    ["name" => "last_name"],
    ["name" => "sex"]
  ]'
>
</x-tables.simple> --}}