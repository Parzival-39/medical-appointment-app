<x-admin-layout title="Pacientes | Healthify" :breadcrumbs="[
  [
    'name' => 'Dashboard',
    'route' => route('admin.dashboard'),
  ],
  [
    'name' => 'Pacientes',
  ],

]">

  @livewire('admin.datatables.patient-table')

</x-admin-layout>