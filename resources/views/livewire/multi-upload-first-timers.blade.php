<div>
    
    <form wire:submit.prevent="register">

        {{-- STEP 1 --}}

        @if ($currentStep == 1)
            
     
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 1/3 - First Timer Details</div>
                <div class="card-body text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="text" class="form-control" id="myDatepicker" placeholder="select date" wire:model="date">
                               <span class="text-danger">@error('date'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" wire:model="name">
                               <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" class="form-control" placeholder="Enter email address" wire:model="email">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Contact</label>
                                <input type="text" class="form-control" placeholder="contact" wire:model="phone_number">
                                <span class="text-danger">@error('phone_number'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Alternative Contact</label>
                                <input type="text" class="form-control" placeholder="alternative contact" wire:model="alt_phone_number">
                                <span class="text-danger">@error('alt_phone_number'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Any Relative Contact</label>
                                <input type="text" class="form-control" placeholder="any relative contact" wire:model="relative_phone_number">
                                <span class="text-danger">@error('relative_phone_number'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address/Residence</label>
                                <input type="text" class="form-control" placeholder="address/residence" wire:model="address">
                                <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Occupation</label>
                                <input type="text" class="form-control" placeholder="occupation" wire:model="occupation">
                                <span class="text-danger">@error('occupation'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Marital Status</label>
                                <select  class="form-control" wire:model="marital_status">
                                    <option value="" selected>Select</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widow(er)">Widow(er)</option>
                                </select>
                                <span class="text-danger">@error('marital_status'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="text" class="form-control" placeholder="Age" wire:model="age">
                            <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- <div class="col-md-1"></div> --}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select  class="form-control" wire:model="gender">
                                    <option value="" selected>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                            </div>
                           </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Are you born again?</label>
                                <select  class="form-control" wire:model="salvation_status">
                                    <option value="" selected>Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger">@error('salvation_status'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">If yes</label>
                                <input type="text" class="form-control" placeholder="when?" wire:model="date_of_salvation">
                                <span class="text-danger">@error('date_of_salvation'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Water baptism by immersion</label>
                                <select  class="form-control" wire:model="baptism_status">
                                    <option value="" selected>Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <span class="text-danger">@error('baptism_status'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        {{-- <div class="col-md-1"></div> --}}
                    </div>
                </div>
            </div>
        </div>
        @endif

        
        {{-- STEP 2 --}}

        @if ($currentStep == 2)
            
    
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 2/3 - Invitation Platform</div>
                <div class="card-body">
                    {{-- <div class="row"> --}}
                        <h5><b>Who invited you?</b></h5>
                        <div class="frameworks d-flex flex-column align-items-left mt-2">
                            <label for="i_came_on_my_own">
                                <input type="checkbox" id="i_came_on_my_own" value="i_came_on_my_own" wire:model="invitation_medium"> I came on my own
                            </label>
                            <label for="tv_ministry">
                            <input type="checkbox" id="tv_ministry" value="tv_ministry" wire:model="invitation_medium"> TV Ministry
                        </label>
                        <label for="someone_visited_me">
                            <input type="checkbox" id="someone_invited_me" value="someone_invited_me" wire:model="invitation_medium"> Someone invited me
                        </label>
                        <label for="rhapsody_of_realities">
                            <input type="checkbox" id="rhapsody_of_realities" value="rhapsody_of_realities" wire:model="invitation_medium"> Rhapsody of Realities
                        </label>
                        </div>
                        <span class="text-danger">@error('invitation_medium'){{ $message }}@enderror</span>
                    {{-- </div> --}}
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Soul winner's Name</label>
                                <input type="text" class="form-control" placeholder="name" wire:model="name_of_inviter">
                               <span class="text-danger">@error('name_of_inviter'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Soul winner's Contact</label>
                                <input type="text" class="form-control" placeholder="contact" wire:model="contact_of_inviter">
                               <span class="text-danger">@error('contact_of_inviter'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Soul winner's fellowship</label>
                                <input type="text" class="form-control" placeholder="fellowship" wire:model="fellowship_of_inviter">
                               <span class="text-danger">@error('fellowship_of_inviter'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Select Zonal Church</label>
                                <select  class="form-control" wire:model="zonal_church">
                                    <option value="" selected>Select</option>
                                    <option value="Zonal Church Avenor">Zonal Church Avenor</option>
                                    <option value="Zonal Church LAA">Zonal Church LAA</option>
                                </select>
                                <span class="text-danger">@error('zonal_church'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Type of Service</label>
                                <select  class="form-control" wire:model="service_type">
                                    <option value="" selected>Select</option>
                                    <option value="Sunday Service">Sunday Service</option>
                                    <option value="Wednesday Service">Wednesday Service</option>
                                    <option value="Friday Service">Friday Service</option>
                                </select>
                                <span class="text-danger">@error('service_type'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">State for other service</label>
                                <input type="text" class="form-control" placeholder="state service" wire:model="other_service_type">
                               <span class="text-danger">@error('other_service_type'){{ $message }}@enderror</span>
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
                <div class="card-header bg-secondary text-white">STEP 3/3 - Prayer Request</div>
                <div class="card-body">
                    {{-- <div class="row"> --}}
                        <div class="form-group">
                            <label for="">Prayer Request(s), if any</label>
                            <textarea class="form-control" cols="2" rows="5" wire:model="prayer_requests" autofocus></textarea>
                            <span class="text-danger">@error('prayer_requests'){{ $message }}@enderror</span>
                        </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>

        @endif


        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

           @if ($currentStep == 1)
               <div></div>
           @endif

           @if ($currentStep == 2 || $currentStep == 3)
               <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
           @endif
           
           @if ($currentStep == 1 || $currentStep == 2)
               <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
           @endif
           
           @if ($currentStep == 3)
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
           @endif
               
              
        </div>

    </form>


</div>