<?php

namespace App\Http\Livewire\Webpage;

use App\Project;
use Livewire\Component;

class Portfolio extends Component
{
    public $datas;

    public function mount()
    {
        $this->singkap();
    }

    public function moreProject()
    {
        $this->datas = Project::orderBy('created_at', 'DESC')->get();
    }

    public function singkap()
    {
        $this->datas = Project::orderBy('created_at', 'DESC')->get()->take(9);
    }

    public function render()
    {
        return view('livewire.webpage.portfolio');
    }
}
