<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\First_timer;

class MultiUploadFirstTimers extends Component
{

    public $date;
    public $name;
    public $phone_number;
    public $alt_phone_number;
    public $relative_phone_number;
    public $email;
    public $gender;
    public $age;
    public $address;
    public $baptism_status;
    public $occupation;
    public $marital_status;
    public $invitation_medium = [];
    public $name_of_inviter;
    public $fellowship_of_inviter;
    public $contact_of_inviter;
    public $salvation_status;
    public $date_of_salvation;
    public $prayer_requests;
    public $service_type;
    public $other_service_type;
    public $zonal_church;
    

    public $totalSteps = 3;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-upload-first-timers');
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
                'date'=>'required|date',
                'name'=>'required|string',
                'email'=>'required|email|unique:first_timers',
                'gender'=>'required|string',
                'phone_number'=>'required|numeric',
                'alt_phone_number'=>'required|numeric',
                'relative_phone_number'=>'required|numeric',      
                'age'=>'required|digits:2',
                'address'=>'required|string',
                'occupation'=>'required|string',
                'marital_status'=>'required|string',
                'salvation_status'=>'required|string',
                'date_of_salvation'=>'required|string',
                'baptism_status'=>'required|string'
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'invitation_medium'=>'required|array|min:1|max:4',
                'name_of_inviter'=>'required|string',
                'contact_of_inviter'=>'required|numeric',
                'fellowship_of_inviter'=>'required|string',
                'zonal_church'=>'required|string'
                // 'service_type'=>'required|string'
                // 'other_service_type'=>'string'
            ]);
      }
        elseif($this->currentStep == 3){
            $this->validate([
                'prayer_requests'=>'required|string'
            ]);
      }
    }

    public function register(){
        $this->resetErrorBag();

            $values = array(
                "date"=>$this->date,
                "name"=>$this->name,
                "phone_number"=>$this->phone_number,
                "alt_phone_number"=>$this->alt_phone_number,
                "relative_phone_number"=>$this->relative_phone_number,
                "email"=>$this->email,
                "gender"=>$this->gender,
                "age"=>$this->age,
                "address"=>$this->address,
                "occupation"=>$this->occupation,
                "baptism_status"=>$this->baptism_status,
                "marital_status"=>$this->marital_status,
                "name_of_inviter"=>$this->name_of_inviter,
                "fellowship_of_inviter"=>$this->fellowship_of_inviter,
                "contact_of_inviter"=>$this->contact_of_inviter,
                "invitation_medium"=>json_encode($this->invitation_medium),
                "salvation_status"=>$this->salvation_status,
                "date_of_salvation"=>$this->date_of_salvation,
                "prayer_requests"=>$this->prayer_requests,
                "service_type"=>$this->service_type,
                "other_service_type"=>$this->other_service_type,
                "zonal_church"=>$this->zonal_church
            );

        First_timer::insert($values);

        $data = ['name'=>$this->name,'email'=>$this->email,'zonal_church'=>$this->zonal_church];
        return redirect()->route('upload.success', $data);
    
  }

}
