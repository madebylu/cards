@extends('layouts.master')

@section('content')
<article class="container">
    <section class="raised rounded">
        <h1>Spaced repetition flashcards.</h1>
        <p>They say elephants never forget but you probably aren't an elephant. One of the best ways to make sure you
            remember things is to review them regularly. For simple, solid facts double sided flashcards are a good way to review.
            Conveniently, this site lets you make and review flashcards, showing you things you can't remember more often than
            the things that you do.<p>
        
        <p>The only thing it won't help you remember at first release is to check it...</p>

    </section>
    @if(!Auth::check())
    <section class="full-width raised rounded">
        <h2><a href="/register">Sign Up</a> or Log In</h2>
        <br />
        <form class="form row" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-5">
                <label for="email" class="control-label sr-only">E-Mail Address</label>

                <div class="">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email@address" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-sm-5">
                <label for="password" class="control-label sr-only">Password</label>

                <div class="">
                    <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group col-sm-2">
                <div class="">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                </div>
            </div>
        </form>


                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
    </section>
    @endif

</article>

@endsection
