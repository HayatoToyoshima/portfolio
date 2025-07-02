@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">お問い合わせ</h2>

@if (session('success'))
    <p class="text-green-600">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul class="text-red-600 mb-4">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/contact/submit" class="space-y-4">
    @csrf
    <div>
        <label for="name">お名前</label>
        <input type="text" name="name" id="name" class="w-full border p-2 rounded" value="{{ old('name') }}">
    </div>
    <div>
        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email" class="w-full border p-2 rounded" value="{{ old('email') }}">
    </div>
    <div>
        <label for="message">お問い合わせ内容</label>
        <textarea name="message" id="message" class="w-full border p-2 rounded">{{ old('message') }}</textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">送信</button>
</form>
@endsection
