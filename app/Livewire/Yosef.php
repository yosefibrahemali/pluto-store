<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
class Yosef extends Component
{
    use WithPagination;

    public $search = '';
    public $products ;
    public $q;
    public $search_term = '';
    public $p;
    public $message ;
    public function render()
    {
        $this->products = Product::where('name',$this->search_term)->get();
        return view('livewire.yosef');
    }
    public function mount()
    {
        
       



        
       
    }
    public function save(){
             $this->message = '111';
        }
        public function addTask(){
            dd('add new task');
        } 
}
