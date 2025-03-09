@extends('layouts.app')

@section('content')

    <x-organisms.card-grid>

        <x-molecules.card title="Welcome">
            This is an example of Atomic Design in Laravel.
        </x-molecules.card>

        <x-molecules.card title="Welcome">
            This is an example of Atomic Design in Laravel.
        </x-molecules.card>

        <x-molecules.card title="Welcome">
            This is an example of Atomic Design in Laravel.
        </x-molecules.card>

        <x-molecules.card title="Welcome">
            This is an example of Atomic Design in Laravel.
        </x-molecules.card>

        <x-molecules.card title="Welcome">
            This is an example of Atomic Design in Laravel.
        </x-molecules.card>

        <x-molecules.card title="Welcome">
            This is an example of Atomic Design in Laravel.
        </x-molecules.card>

    </x-organisms.card-grid>

    <x-atoms.button>Click Me</x-atoms.button>
@endsection
