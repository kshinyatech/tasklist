@extends('layouts.app')

@section('content')

    <h3>新規タスク作成ページ</h3>
    
    <div class="row">
        <div class="col-lg-6 col-10">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
            
                    {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
                    
            {!! Form::close() !!}
        </div>
    </div>

@endsection