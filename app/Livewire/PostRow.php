<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public $post;

    public PostForm $form;

    public $showEditDialog = false;

    public function mount()
    {
        $this->form->setPost($this->post);
    }

    public function save()
    {
        $this->form->update();

        $this->post->refresh();

        $this->reset('showEditDialog');
    }

    public function render()
    {
        return view('livewire.post-row');
    }
}
