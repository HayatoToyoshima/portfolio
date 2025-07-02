<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|max:100',
        ]);

        // ここでメール送信やDB保存が可能

        return redirect('/contact')->with('success', 'お問い合わせを送信しました。');
    }
}
