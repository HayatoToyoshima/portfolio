<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>コーポレートサイト</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gray-50 text-gray-900">

    <header class="bg-blue-600 text-white p-4">
        <nav class="max-w-4xl mx-auto flex justify-between">
            <a href="/">Home</a>
            <a href="/services">サービス</a>
            <a href="/about">会社概要</a>
            <a href="/contact">お問い合わせ</a>
        </nav>
    </header>

    <main class="max-w-4xl mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-10">
        &copy; xxxx 株式会社○○○○. All rights reserved.
    </footer>

</body>
</html>
