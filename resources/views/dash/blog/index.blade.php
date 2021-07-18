@extends('layouts.dash')
@section('content')
    <div class="pt-24">
        <div class="max-w-7xl px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <x-jet-validation-errors class="mb-4"/>
            @livewire('dash.blog.index')
        </div>
    </div>
@endsection
