<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Sons;

class MultiForm extends Component
{
    use WithFileUploads;

    public $title;
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $age;
    public $hobbies;
    public $email;
    public $phone;
    public $church;
    public $occupation;
    public $city;
    public $educational_information = [];
    public $picture;
    public $father_name;
    public $father_contact;
    public $mother_name;
    public $mother_contact;
    public $foundation_school;

    public $totalSteps = 5;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multi-form');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'title'=>'required|string',
                'first_name'=>'required|string',
                'last_name'=>'required|string',
                'foundation_school'=>'required|string',
                'date_of_birth'=>'required|string',
                'hobbies'=>'required|string',      
                'age'=>'required|digits:2'
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'email'=>'required|email|unique:sons',
                 'phone'=>'required',
                 'occupation'=>'required',
                 'church'=>'required',
                 'city'=>'required'
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                  'educational_information'=>'required|array|min:1|max:4'
              ]);
        }
        elseif($this->currentStep == 4){
            $this->validate([
                'father_name'=>'required|string',
                'father_contact'=>'required|string',
                'mother_name'=>'required|string',
                'mother_contact'=>'required|string'
            ]);
      }
    }

    public function register(){
          $this->resetErrorBag();
          if($this->currentStep == 5){
              $this->validate([
                'picture'=>'required|mimes:jpg,png|max:1024'
                //   'picture'=>'required|mimes:doc,docx,pdf|max:1024'
                //   'terms'=>'accepted'
              ]);

            //   dd('Form submitted successfully');
          }

          $picture_name = 'PICTURE_'.$this->picture->getClientOriginalName();
          $upload_picture = $this->picture->storeAs('sons_picture', $picture_name);

          if($upload_picture){
              $values = array(
                  "title"=>$this->title,
                  "first_name"=>$this->first_name,
                  "last_name"=>$this->last_name,
                  "date_of_birth"=>$this->date_of_birth,
                  "age"=>$this->age,
                  "foundation_school"=>$this->foundation_school,
                  "occupation"=>$this->occupation,
                  "father_name"=>$this->father_name,
                  "father_contact"=>$this->father_contact,
                  "mother_name"=>$this->mother_name,
                  "mother_contact"=>$this->mother_contact,
                  "email"=>$this->email,
                  "phone"=>$this->phone,
                  "church"=>$this->church,
                  "city"=>$this->city,
                  "educational_information"=>json_encode($this->educational_information),
                  "hobbies"=>$this->hobbies,
                  "picture"=>$picture_name,
              );

              Sons::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
            return redirect()->route('registration.success', $data);
          }
    }
}