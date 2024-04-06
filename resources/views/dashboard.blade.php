<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Vous êtes connecté !") }}

                    <br> </br>
                    <br>
                    <a href="{{ url('/chambre') }}"  class="btn btn-primary btn-sm" title="Formulaire">
                        <i class="fa fa-plus" aria-hidden="true"></i> <span class="text-blue-500">Accéder au module de gestion de site e-commerce "ADJILAN SHOP"</span>
                    </a>

                    </br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
