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
                
                    
                    @foreach ($posts as $post)
                            <!-- <label class="pull-left"></label>
                            <label class="pull-left"><a href="home\{{ $post->id }}">Add Comment </a></label>
                            <label class="pull-right">{{ $post->updated_at->format('F d, Y') }}</label>
                            <label class="pull-right">by {{ $post->email }}</label> -->
                            <div class="panel-heading">
                            <label class="control-label pull-right">{{$post->email}}kk</label>
                            <label>{{ $post->updated_at->format('F d, Y') }}</label>
                            <h1><a href="home\{{ $post->id }}">{{ $post->title }}</a></h1>
                                                       </div>
                            <!-- <label class="col-md-4"><a href="home\{{ $post->id }}">{{ $post->title }} </a></label>
                            <label class="col-md-4"><a href="home\{{ $post->id }}">{{ $post->title }} </a></label>
                            <label class="col-md-4"><a href="home\{{ $post->id }}">{{ $post->title }} </a></label> -->
                            
                    @endforeach

                
            </div>
        </div>
    </div>
</div>
@endsection
