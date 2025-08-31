<?php

use function Livewire\Volt\{state};
use App\Models\Article;

state(['title', 'body']);

//フォームからの入力値をデータベースへ保存
$store = function () {
    Article::create([
        'title' => $this->title,
        'body' => $this->body,
    ]);
    //一覧ページにリダイレクト
    return redirect()->route('articles.index');
};

?>

<div>
    <h1>新規論文投稿</h1>
    <form wire:submit="store">
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" wire:model="title" id="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea wire:model="body" id="body"></textarea>
        </p>

        <button type="submit">登録</button>
    </form>
</div>
