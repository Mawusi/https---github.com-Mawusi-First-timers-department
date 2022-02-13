<div>
    
    <form wire:submit.prevent="register">

        {{-- STEP 1 --}}

        @if ($currentStep == 1)
            
     
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 1/5 - Personal Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Title</label>
                                <select  class="form-control" wire:model="title">
                                    <option value="" selected>Select</option>
                                    <option value="Pastor">Pastor</option>
                                    <option value="Bro">Bro</option>
                                    <option value="Sis">Sis</option>
                                </select>
                                <span class="text-danger">@error('title'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">First name</label>
                                <input type="text" class="form-control" placeholder="Enter first name" wire:model="first_name">
                               <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                               <label for="">Last name</label>
                               <input type="text" class="form-control" placeholder="Enter last name" wire:model="last_name">
                               <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Foundation School Status</label>
                                <select  class="form-control" wire:model="foundation_school">
                                       <option value="" selected>Select status</option>
                                       <option value="completed">Completed</option>
                                       <option value="progress">In progress</option>
                                       <option value="not_yet">Not yet started</option>
                                </select>
                                <span class="text-danger">@error('foundation_school'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Date of Birth</label>
                                <input type="text" class="form-control" placeholder="Date of birth" wire:model="date_of_birth">
                                <span class="text-danger">@error('date_of_birth'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" class="form-control" placeholder="Enter your age" wire:model="age">
                                <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Hobbies (Area of Interest)</label>
                        <textarea class="form-control" cols="2" rows="2" wire:model="hobbies"></textarea>
                        <span class="text-danger">@error('hobbies'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- STEP 2 --}}

        @if ($currentStep == 2)
            
       
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 2/5 - Address & Contacts</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter phone number" wire:model="phone">
                                <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" class="form-control" placeholder="Enter email address" wire:model="email">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Country of residence</label>
                                <select class="form-control" wire:model="country">
                                    <option value="" selected>Select country</option>
                                    <option value="United States">United States</option>
                                    <option value="India">India</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Phillipines">Phillipines</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                                <span class="text-danger">@error('country'){{ $message }}@enderror</span>
                            </div>
                        </div> --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Name of Church you attend</label>
                                <input type="text" class="form-control" placeholder="Enter your church" wire:model="church">
                                <span class="text-danger">@error('church'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Area of Residence</label>
                                <input type="text" class="form-control" placeholder="Enter your residence" wire:model="city">
                                <span class="text-danger">@error('city'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Place of work</label>
                                <input type="text" class="form-control" placeholder="Enter place of work" wire:model="occupation">
                                <span class="text-danger">@error('occupation'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif
        {{-- STEP 3 --}}

        @if ($currentStep == 3)
            
    
        <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 3/5 - Educational Information</div>
                <div class="card-body">
                    Kindly tick as it applies to you. Thank you
                    <div class="frameworks d-flex flex-column align-items-left mt-2">
                        <label for="basic_school">
                            <input type="checkbox" id="basic_school" value="basic_school" wire:model="educational_information"> Basic School
                        </label>
                        <label for="senior_high_school">
                           <input type="checkbox" id="senior_high_school" value="senior_high_school" wire:model="educational_information"> Senior High School
                       </label>
                       <label for="tertiary">
                           <input type="checkbox" id="tertiary" value="tertiary" wire:model="educational_information"> Tertiary
                       </label>
                       <label for="vocational_training">
                           <input type="checkbox" id="vocational_training" value="vocational_training" wire:model="educational_information"> Vocational Training
                       </label>
                       <label for="not_applicable">
                        <input type="checkbox" id="not_applicable" value="not_applicable" wire:model="educational_information"> Not Applicable
                    </label>
                    </div>
                    <span class="text-danger">@error('educational_information'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        @endif


        {{-- STEP 4 --}}

        @if ($currentStep == 4)
            
       
        <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 4/5 - Parents Information</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name of Father</label>
                                <input type="text" class="form-control" placeholder="Enter name of Father" wire:model="father_name">
                                <span class="text-danger">@error('father_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Father's contact</label>
                                <input type="text" class="form-control" placeholder="Enter Father's contact" wire:model="father_contact">
                                <span class="text-danger">@error('father_contact'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name of Mother</label>
                                <input type="text" class="form-control" placeholder="Enter name of Mother" wire:model="mother_name">
                                <span class="text-danger">@error('mother_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mother's contact</label>
                                <input type="text" class="form-control" placeholder="Enter Mother's contact" wire:model="mother_contact">
                                <span class="text-danger">@error('mother_contact'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif

        {{-- STEP 5 --}}
        @if ($currentStep == 5)
            
    
        <div class="step-five">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 5/5 - Attachments</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="picture">Kindly upload your picture here</label>
                        <input type="file" class="form-control" wire:model="picture">
                        <span class="text-danger">@error('picture'){{ $message }}@enderror</span>
                    </div>
                    {{-- <div class="form-group">
                        <label for="terms" class="d-block">
                            <input type="checkbox"  id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                        </label>
                        <span class="text-danger">@error('terms'){{ $message }}@enderror</span>
                    </div> --}}
                </div>
            </div>
        </div>

        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

           @if ($currentStep == 1)
               <div></div>
           @endif

           @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
               <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
           @endif
           
           @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3|| $currentStep == 4)
               <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
           @endif
           
           @if ($currentStep == 5)
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
           @endif
               
              
        </div>

    </form>


</div>