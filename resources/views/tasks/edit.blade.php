<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            タスク編集
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST" class="form">
                        @csrf
                        <div class="mb-4">
                            @error('name')
                            <div class="error_message">{{ $message }}</div>
                            @enderror
                            <label for="name" class="block text-gray-700 font-bold mb-2">タスク<span class="ml-2">(必須)</span></label>
                            <input type="text" name="name" maxlength="30" placeholder="タスクは30文字で書きましょう。" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ $task->name }}">
                        </div>
                        <div class="form-group">
                            @error('content')
                            <div class="error_message">{{ $message }}</div>
                            @enderror
                            <label for="content" class="block text-gray-700 font-bold mb-2">タスク内容<span class="ml-2">(必須)</span></label>
                            <textarea rows="5" name="content" placeholder="タスク内容を具体的に書きましょう" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $task->content }}</textarea>
                        </div>
                        <div class="flex justify-center items-center gap-6 mt-4">
                            <button type="button" onclick="location.href='{{ route('tasks.index') }}'" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">やっぱやめる</button>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">更新する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
