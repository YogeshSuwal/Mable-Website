<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\support;
class MultiStepForm extends Component
{

    use WithFileUploads;
    public $first_name;
    public $last_name;
    public $phone;
    public $address;
    public $question_one;
    public $question_two;
    public $question_three;
    public $question_four;
    public $cv; 
    public $totalSteps=3;
    public $currentStep=1;

    public function mount(){
        $this->currentStep=1;
    }
    public function render()
    {
        return view('livewire.multi-step-form');
    }
    

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if( $this->currentStep < 1){
            $this->currentStep = 1;
        }
    }
    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if( $this->currentStep >  $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function validateData(){
       
        if($this->currentStep == 1){
            $this->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'phone' => 'required|numeric',
                'address' => 'required|string'
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'question_one' => 'required',
                'question_two' => 'required',
                'question_three' => 'required',
                'question_four' => 'required'
            ]);
        }
    }
    public function support(){
        $this->resetErrorBag();
        if($this->currentStep == 3){
            $this->validate([
                'cv' => 'required|mimes:doc,jpeg,png,jpg,pdf,svg,docx',
            ]);
        }
        $cv_name = 'Cv_'.$this->cv->getClientOriginalName();
        $upload_cv = $this->cv->storeAs('support_cv',$cv_name);
        if($upload_cv){
            $values = array(
                "first_name"=>$this->first_name,
                "last_name"=>$this->last_name,
                "phone"=>$this->phone,
                "address"=>$this->address,
                "question_one"=>$this->question_one,
                "question_two"=>$this->question_two,
                "question_three"=>$this->question_three,
                "question_four"=>$this->question_four,
            );
            support::insert($values);
            $this->reset();
            $this->currentStep = 1;
        }
    }
}
