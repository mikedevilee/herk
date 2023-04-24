<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @foreach ($tasks as $task)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <div>
                    <h2>
                        {{ $task->title }}
                    </h2>
                    <p>
                        {{ Str::limit( $task->text, 200 ) }}
                    </p>

                    <p>
                        {{ $task->deadline }}
                    </p>
                    <span>
    <span>
    {{ $task->updated_at->diffForHumans() }}
</span>

</span>
                </div>
            @endforeach

        </div>
    </div>
    </div>
</x-app-layout>
