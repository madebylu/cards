@extends('layouts.master')

@section('content')
<div class="container">
    <article>
        <section class="raised rounded">
            <div class="row">
                <div class="col-sm-4 push-8">
                    <h2>Topics</h2>
                    <p><a href=# id="toggle-add-topic">Add a topic</a></p>
                    <form id="add-topic">
                        <div class="form-group">
                            <label for="new-topic-name">New Topic</label>
                            <input type="text" id="new-topic-name">
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-8 pull-4">
                    <h1>Welcome!</h1>
                    <p>You are logged in</p>
                </div>
            </div>
        </section>
    </article>
</div>


<script>

$(function (){
    $('#add-topic').hide();
    $('#toggle-add-topic').on('click', function(e) {
        e.preventDefault();
        $('#add-topic').toggle();
    });
    $('#add-topic').on('submit', function(e) {
        e.preventDefault();
        var topic_name = $('#add-topic input').val();
        //send ajax call to controller.
        $('#add-topic input').val('');
    });
});

</script>
@endsection
