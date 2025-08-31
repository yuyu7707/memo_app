<?php

use function Livewire\Volt\{state};
use App\Models\Memo;

state(['title', 'body']);

//メモを保存する関数
$store = function() {
    Memo::create([
        'title' => $this->title,
        'body' => $this->body,
    ]);
     // 一覧ページにリダイレクト
    return redirect()->route('memos.index');
};
?>

<div>
    <a href="{{ route('memos.index') }}">戻る</a>
    <h1>新規登録</h1>
    <form wire:submit="store">
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" wire:model="title" id="title">
            </p>
        <p>
            <label for="body">本文</label><br>
            <textarea wire:model="body" id="body"></textarea>
        </p>
        <button type="submit">登録</button>
    </form> 
</div>
