<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('tasks.create') }}" class="btn-link btn-lg mb-2">+ New Task</a>
            @foreach ($tasks as $task)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <div>
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
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
                    {{ $tasks->links() }}
        </div>
    </div>
    </div>
</x-app-layout>
