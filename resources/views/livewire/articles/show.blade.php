<?php

use function Livewire\Volt\{state};
use App\Models\Article;

state(['article' => fn(Article $article) => $article]);

//一覧にリダイレクト
$index = function () {
    return redirect()->route('articles.index');
};

//編集ページにリダイレクト
$edit = function () {
    return redirect()->route('articles.edit', $this->article);
};

//論文詳細削除
$destory = function () {
    $this->article->delete();
    return redirect()->route('articles.index');
};

?>

<div>
    <h1>論文詳細</h1>
    <p>タイトル: {{ $article->title }}</p>
    <p>{{ $article->body }}</p>

    <button wire:click="index">一覧へ戻る</button>
    <button wire:click="edit">編集する</button>
    <button wire:click="destory" wire:confirm="削除しますか？">削除する</button>

</div>
