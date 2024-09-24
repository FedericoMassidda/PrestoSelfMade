<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ArticleForm extends Component
{
    // data binding
    public $title;
    public $price;
    public $description;
    public $category_id;

    // methods for article CRUD
    // aggiungere la validazione
    public function store(){ //store
        Article::create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'category_id'=>$this->category_id,
            'user_id'=>Auth::user()->id
        ]);
        session()->flash('success', 'Articolo creato con successo!');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.article-form');
    }
}
