<x-app-layout>
    <x-slot name="header">
        Admin Dashboard
    </x-slot>

    @isPermission('ban user')
    hlw
    @endisPermission
    @isAnyPermissions('ban user2|home')
    hlw 2
    @endisAnyPermissions

</x-app-layout>