@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            You are logged in!
            <div class="panel panel-default">

                <div class="panel-heading">Hi, {{ Auth::user()->email }}</div>

                <div class="panel-body">
                    
                    <form class="form-horizontal" method="POST" action="/addpost">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea id="postText" type="text" class="form-control" name="postText" placeholder="How was your day, {{ Auth::user()->name }}?" style="resize:none;" autofocus>
                                </textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">
                                    POST
                                </button>
                            </div>  
                        </div>
                    </form>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    @foreach ($posts as $post)
                            <label><a href="home\{{ $post->id }}">{{ $post->title }} </a></label>

                            <label class="pull-right">{{ $post->updated_at->format('F d, Y') }}</label>
                            <br>
                            <label class="pull-right">by {{ $post->email }}</label>
                            
                            <hr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
