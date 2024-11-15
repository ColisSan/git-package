@extends('git-package::app')
@section('content')
<h2>blade</h2>
<hello></hello>
<div class="nav-bar">
    @if($result)
    <span>
        {{ $result }}
    </span>
    @endif
    <button>
        <form action="artisan" method="POST">
            <input type="hidden" name="command_type" value="make_model"/>
            <input type="text" name="artisan_command"/>
            <button type="submit">SUBMIT MODEL COMMAND</button>                
        </form>
        <form action="artisan" method="POST">
            <input type="hidden" name="command_type" value="make_migration"/>
            <input type="text" name="artisan_command"/>
            <button type="submit">SUBMIT MAKE MIGRATION COMMAND</button>                
        </form>
        <form action="artisan" method="POST">
            <input type="hidden" name="command_type" value="migrate"/>
            <input type="checkbox" name="fresh_options" value="fresh"/>Fresh migrate?
            <input type="checkbox" name="dbseed_options" value="--seed"/>DB Seed?
            <button type="submit">MIGRATE</button>                
        </form>
    </button>        
</div>
@endsection
