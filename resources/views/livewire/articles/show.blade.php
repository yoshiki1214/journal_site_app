<?php

use function Livewire\Volt\{state};
use \App\Models\Article;

state(['article' => fn(Article $article) => $article]);

//一覧へ戻る
$index = function(){
    return redirect()->route('articles.index');
};

?>

<div>
    <h1>論文詳細</h1>
    <p>タイトル:{{ $article->title }}</p>
    <p>{{ $article->body }}</p>
    <button wire:click="index">一覧へ戻る</button>
</div>
