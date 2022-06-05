<x-guest-layout>
    <style>
        h1 {
            text-align: center;
            padding: 30px;
        }
        .error {
            text-align: center;
        }
        .error_message {
            color: red;
        }
        .form {
            width: 80%;
            margin: 0 auto;
        }
        .form-group {
            padding-bottom: 50px;
        }
        span {
            color: red;
        }
    </style>
    <h1 class="text-2xl font-bold">タスク追加</h1>
    {{-- <div class="error">
        @foreach ($errors->all() as $error)
            <p class="error_message">{{ $error }}</p>
        @endforeach
    </div> --}}
    <form action="store" method="POST" class="form">
    @csrf
        <div class="form-group">
            @error('name')
            <div class="error_message">{{ $message }}</div>
            @enderror
            <label for="name">タスク<span>(必須)</span></label><br>
            <input type="text" name="name" maxlength="30" placeholder="タスクは30文字で書きましょう。" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            @error('content')
            <div class="error_message">{{ $message }}</div>
            @enderror
            <label for="content">タスク内容<span>(必須)</span></label><br>
            <textarea rows="5" name="content" placeholder="タスク内容を具体的に書きましょう" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('content') }}</textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">追加する</button>
        </div>
    </form>
</x-guest-layout>
