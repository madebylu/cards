@extends('layouts.master')

@section('content')
<article class="container">
    <section class="raised rounded">
        <h2>Login / register form</h2>
        <form action="/login" method="POST">
            
        </form>
    </section>
    <section class="raised rounded">
        <h1>Spaced repetition flashcards.</h1>
        <p>They say elephants never forget but people don't have the same benefits. One of the best ways to make sure you
            remember things is to review them regularly. For simple, solid facts double sided flashcards are a good way to review.
            Conveniently, this site lets you make and review flashcards, showing you things you can't remember more often than
            the things that you do.<p>
        
        <p>The only thing it won't help you remember at first release is to check it...</p>
    </section>

</article>

@endsection
