<?php

namespace App\Livewire;

use Livewire\Component;

class Cc extends Component
{

    public string $searchBook = "";
    public $so = '11' ;

    public $mo = 2;
    public function render()
    {
        $this->so = $this->searchBook;'yes';
      

       
          

        

        return view('livewire.cc-component');
    }
    public function add()
    {
        $mo = $this->mo++;
    }
}
