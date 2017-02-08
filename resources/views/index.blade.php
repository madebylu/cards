@extends('layouts.master')

@section('content')
<article class="container">
        <div class="flashcard raised">
            <div class="front">
                <h1>Prompt</h1>
                <p>This is where you will provide yourself with a question or reminder</p>
            </div>
            <div class="back">
                <h1>Response</h1>
                <p>And this is the answer or response you should associate with the prompt</p>
            </div>
        </div>

        <div class="correct raised">
            <button class="btn btn-danger no" id="answer-incorrect" disabled>No</button>
            <button class="btn btn-success yes" id="answer-correct" disabled>Yes</button>
        </div>
    </article>

    <script>
        $(function(){
            $('.flashcard').on('click', function(e){
                var current_card = $(this);
                setTimeout(function() {
                    $(current_card).children().toggle();
                }, 1000);
                $(this).toggleClass('flipped');
                $('button').removeAttr('disabled');
            })

        });
    </script>
@endsection
