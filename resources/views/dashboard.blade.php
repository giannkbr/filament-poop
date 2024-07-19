@extends('components.layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-2xl font-bold mb-4">Log Your Defecation</h2>
            {{-- <livewire:defecation-log-form /> --}}
        </div>
        <div>
            <h2 class="text-2xl font-bold mb-4">Your Challenges</h2>
            {{-- <livewire:user-challenges /> --}}
        </div>
        <div>
            <h2 class="text-2xl font-bold mb-4">Your Achievements</h2>
            {{-- <livewire:user-achievements /> --}}
        </div>
    </div>
</div>

@endsection

