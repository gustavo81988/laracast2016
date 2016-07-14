<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        $note = new Note($request->all());
        $card->addNote($note);
        
        return back();
    }
    
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
      
    public function update(Request $request,Note $note)
    {
        $note->update($request->all());
        return redirect('cards/'.$note->card_id);
    }  
}
