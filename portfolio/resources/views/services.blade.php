@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">サービス内容</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <div class="text-center p-4 bg-white rounded shadow cursor-pointer">
        <img src="{{ asset('images/system.jpg') }}" alt="システム開発" class="w-full aspect-[1/1] object-contain mx-auto mb-2">
        <h3 class="font-semibold">○○○○開発</h3>
    </div>
    <div class="text-center p-4 bg-white rounded shadow cursor-pointer">
        <img src="{{ asset('images/app.jpg') }}" alt="アプリ開発" class="w-full aspect-[1/1] object-contain mx-auto mb-2">
        <h3 class="font-semibold">xxxx開発</h3>
    </div>
    <div class="text-center p-4 bg-white rounded shadow cursor-pointer">
        <img src="{{ asset('images/consult.jpg') }}" alt="コンサルティング" class="w-full aspect-[1/1] object-contain mx-auto mb-2">
        <h3 class="font-semibold">○○○○<wbr>効率化<wbr>コンサルティング</h3>
    </div>
</div>
@endsection
