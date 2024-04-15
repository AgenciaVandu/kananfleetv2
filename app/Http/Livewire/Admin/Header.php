<?php

namespace App\Http\Livewire\Admin;

use App\Models\Image;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Header extends Component
{
    use WithFileUploads;
    public $header,$file,$name,$open=false,$rand,$image,$link;
    public $editImage;
    public $editForm = [
        'open' => false,
        'name' => null,
        'link' => null,
        'url' => null,
    ];

    public function mount(){
        $this->header = Section::where('name','header')->where('page','index')->first();
        $this->rand = rand();
    }

    public function store(){
        $url = $this->file->store('header');
        $this->header->images()->create([
            'url'=> $url,
            'name' => $this->name,
            'link' => $this->link
        ]);

        $this->reset('name','file');
        $this->header = Section::where('name','header')->where('page','index')->first();
    }

    public function edit(Image $image){
        $this->reset('editImage');
        $this->image = $image;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $image->name;
        $this->editForm['link'] = $image->link;
        $this->editForm['url'] = $image->url;
    }


    public function update(){
        if ($this->editImage) {
            Storage::delete($this->editForm['url']);
            $this->editForm['url'] = $this->editImage->store('header');
        }
        $this->image->update($this->editForm);
        $this->reset(['editForm', 'editImage']);
        $this->header = Section::where('name','header')->where('page','index')->first();

    }

    public function delete(Image $image)
    {
        Storage::delete($image->url);
        $image->delete();
        $this->header = Section::where('name','header')->where('page','index')->first();
    }

    public function render()
    {
        return view('livewire.admin.header');
    }
}
