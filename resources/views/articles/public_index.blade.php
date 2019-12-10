@extends('layouts.public')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Articles</h1>
    </section>
    <div class="content">
        <div class="box-body">
            @foreach ($articles as $article)
                <div class="article" style="display:flex; flex-direction: row; ">
                    <div class="article-title">
                        {{ $article->name }}
                    </div>
                    <div class="article-body">
                        {{ $article->content }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

