<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            タスク詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full border-collapse">
                        <tr>
                            <th class="border w-1/2 px-4 py-2">タスク</th>
                            <td class="border w-1/2 px-4 py-2">{{ $task->name }}</td>
                        </tr>
                        <tr>
                            <th class="border w-1/2 px-4 py-2">タスク内容</th>
                            <td class="border w-1/2 px-4 py-2">{{ $task->content }}</td>
                        </tr>
                        <tr>
                            <th class="border w-1/2 px-4 py-2">作成日時</th>
                            <td class="border w-1/2 px-4 py-2">{{ $task->created_at->format('Y年m月d日 H:i') }}</td>
                        </tr>
                        <tr>
                            <th class="border w-1/2 px-4 py-2">更新日時</th>
                            <td class="border w-1/2 px-4 py-2">{{ $task->updated_at->format('Y年m月d日 H:i') }}</td>
                        </tr>
                    </table>
                    <div class="flex justify-center items-center gap-6 mt-4">
                        <div>
                            <a href="{{ route('tasks.index') }}" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full">戻る</a>
                        </div>
                        <div>
                            <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">編集する</a>
                        </div>
                        <div>
                            <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="post" id="delete_post">
                                @method('delete')
                                @csrf
                                <button class="bg-rose-500 hover:bg-rose-700 text-white font-bold py-2 px-4 rounded-full">削除</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        'use strict';
        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('本当に削除してもよいですか？')) {
                    return;
                }

                e.target.submit();
            });
        }
    </script>
</x-app-layout>
