<?php

use function Livewire\Volt\{state};
use App\Models\article;

state(['articles' => fn() => Article::all()]);

?>

<div>
    <h1>論文一覧</h1>
    <p>
        @foreach ($articles as $article)
            <a href="{{ route('articles.show', $article->id) }}">
                {{ $article->title }} <br><br>
        @endforeach
    </p>
</div>
