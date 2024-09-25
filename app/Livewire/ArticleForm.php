<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticleForm extends Component
{
    // data binding and real time validation
    #[Validate()]
    public $title;
    #[Validate()]
    public $price;
    #[Validate()]
    public $description;
    #[Validate()]
    public $category_id;

    // methods for article CRUD
    public function rules(){ //validations
        return [
            'title' => 'required|max:18',
            'price' => 'required',
            'description' => 'required|min:20|max:2000',
            'category_id'=> 'required'
        ];
    }

    protected $messages = [
        'title.required' => 'Il titolo è obbligatorio.',
        'title.max' => 'Il titolo deve avere massimo 18 caratteri.',
        'price.required'=> 'Il prezzo è obbligatorio.',
        'description.required'=> 'La descrizione è obbligatoria',
        'description.min'=> 'La descrizione deve avere minimo 20 caratteri',
        'description.max'=> 'La descrizione deve avere massimo 2000 caratteri',
        'category_id.required'=> 'La categoria è obbligatoria'
    ];

    public function store(){ //store
        $this->validate();

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
