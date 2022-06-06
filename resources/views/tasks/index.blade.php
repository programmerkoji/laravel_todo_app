<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            タスク一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <a href="{{ route('tasks.create') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">＋タスクを追加</a>
                    </div>
                    <table class="w-full border-collapse border">
                        <thead>
                          <tr class="bg-slate-50">
                            <th class="w-2/3 px-4 py-2 border">タスク</th>
                            <th class="w-1/3 px-4 py-2 border">アクション</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $task)
                          <tr>
                            <td class="border px-4 py-2">{{ $task->name }}</td>
                            <td class="border px-4 py-2 underline text-blue-600">
                                <div class="flex justify-around">
                                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">詳細</a>
                                    <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">編集</a>
                                    <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="post" class="delete_post">
                                        @method('delete')
                                        @csrf
                                        <button class="underline text-rose-600">削除</button>
                                    </form>
                                </div>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        'use strict';
        {
            document.querySelectorAll('.delete_post').forEach(form => {
                form.addEventListener('submit', e => {
                    e.preventDefault();

                    if (!confirm('Sure to delete?')) {
                        return;
                    }

                    form.submit();
                })
            });
        }
    </script>
</x-app-layout>
