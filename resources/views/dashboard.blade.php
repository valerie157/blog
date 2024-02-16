<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <!-- Displaying Tasks -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-bold mb-4">Tasks Dashboard</h1>
                    
                    @forelse ($tasks as $task)
                        <div class="mb-6 border-b border-gray-200">
                            <h3 class="text-lg font-semibold">{{ $task->task_name }}</h3>
                            <p class="text-gray-600">{{ $task->description }}</p>
                            <p class="text-gray-600">Due Date: {{ $task->due_date }}</p>
                            <p class="text-gray-600">Status: {{ $task->status }}</p>
                            <div class="mt-4 flex">
                                <a href="{{ route('tasks.edit', $task->id) }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md mr-2">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md">Delete</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>No tasks found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <!-- Form for Creating Tasks -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-4">Create New Task</h2>
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="task_name" class="block text-sm font-medium text-gray-700">Task Name</label>
                            <input type="text" name="task_name" id="task_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
                            <input type="date" name="due_date" id="due_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        <button type="submit" class="inline-block px-4 py-2 bg-green-500 text-white rounded-md">Create Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
