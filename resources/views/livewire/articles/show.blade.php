<?php

use function Livewire\Volt\{state};
use \App\Models\article;

state(['article' => fn(Article $article) => $article]);

//一覧へ戻る
$index = function(){
    return redirect()->route('articles.index', $this->article);
};

?>

<div>
    <h1>論文詳細</h1>
    <p>タイトル:{{ $article->title }}</p>
    <p>{{ $article->body }}</p>
    <button wire:click="index">一覧へ戻る</button>
</div>
