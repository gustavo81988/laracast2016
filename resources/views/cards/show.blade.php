@extends('layout')
@section('content')
    
    <div class="col-md-6 col-md-offset-3">
        
        <h1>{{$card->title}}</h1>
        
        <div class="row">
            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item"><a href="#"></a>
                        <a href="{{url('notes/'.$note->id.'/edit')}}">{{$note->body}}</a>
                        <a href="#" style="float:right">{{$note->user->username}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        
        <hr>
        <h3>Add a New Note</h3>
        
        <form method="POST" action="{{url('cards/'.$card->id.'/notes')}}">
        {{csrf_field()}}   
            <div class="form-group">
                <textarea name="body" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Note</button>
            </div>
        </form>
        
    </div>
    
@stop