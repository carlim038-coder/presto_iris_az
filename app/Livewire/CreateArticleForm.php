<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $category;
    
    public $images = [];
    public $temporary_images = [];
    public $article;

    protected $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:10',
        'price' => 'required|numeric',
        'category' => 'required',
        'images.*' => 'image|max:1024',
    ];

       public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
    
    public function store()
    {
        $this->validate();

        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);

        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                
                $newImage = $this->article->images()->create([
                    'path' => $image->store($newFileName, 'public')
                ]);
                
                // Invio del job in coda per il crop asincrono dell'immagine
                dispatch(new ResizeImage($newImage->path, 300, 300));
            }
            
            // Pulizia della cartella temporanea di Livewire
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        session()->flash('success', 'Articolo creato correttamente');
        $this->cleanForm();
    }

    public function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}