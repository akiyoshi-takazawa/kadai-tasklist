@extends('layouts.app')

@section('content')
     @if (Auth::check())
        <div class="row">
            
            <div class="col-sm-8">

                    @include('tasks.index')
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                <p>ログインにはユーザー登録が必要となります。</p>
                {!! link_to_route('signup.get', '登録ページ', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection