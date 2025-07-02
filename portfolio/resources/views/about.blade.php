@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">会社概要</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <div class="text-center p-4 bg-white rounded shadow cursor-pointer">
        <img src="{{ asset('images/established.jpg') }}" alt="設立" class="w-full aspect-[1/1] object-contain mb-2">
        <h3 class="font-semibold">設立</h3>
        <p>xxxx年</p>
    </div>
    <div class="text-center p-4 bg-white rounded shadow cursor-pointer">
        <img src="{{ asset('images/location.jpg') }}" alt="所在地" class="w-full aspect-[1/1] object-contain mb-2">
        <h3 class="font-semibold">所在地</h3>
        <p>東京都xx区xx</p>
    </div>
    <div class="text-center p-4 bg-white rounded shadow cursor-pointer">
        <img src="{{ asset('images/ceo.jpg') }}" alt="代表者" class="w-full aspect-[1/1] object-contain mb-2">
        <h3 class="font-semibold">代表者</h3>
        <p>xx xx</p>
    </div>
</div>
@endsection
