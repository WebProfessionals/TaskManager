@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            @include('common.errors')

            <form action="{{ url('tasks') }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Task hinzufügen
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <ul class="list-group">
          @foreach($tasks as $task)
            <li class="list-group-item">{{ $task->name }}</li>
          @endforeach
        </ul>
    </div>
@endsection
