<div>
    <form wire:submit.prevent="support">
        @if($currentStep == 1)
        <!-- Step One -->
        <div class="step-one">
            <div class="card">
                <div class="card-header">1/3 Personal Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">First name</label>
                            <input type="text" class="form-control" wire:model="first_name">
                            <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" class="form-control" wire:model="last_name">
                            <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" class="form-control" wire:model="phone">
                            <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" wire:model="address">
                            <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Step One -->
        @endif

        <!-- Step Two -->
        @if($currentStep == 2)
        <div class="step-two">
            <div class="card">
                <div class="card-header">2/3 Question</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        <span class="text-danger">@error('question_one'){{ $message }}@enderror</span>
                            <label for="inputFirst" class="form-label">Are you over 18?</label>
                            <div class="row">
                               <div class="col-md-12">
                                   
                                <div class="form-check">
                                
                                    <input class="form-check-input" type="radio"wire:model="question_one" value="Yes">
                                    <label class="form-check-label" >
                                    1.Yes, I am 18 years or over
                                    </label>
                                </div>
                                <div class="form-check">
                                
                                    <input class="form-check-input" type="radio" wire:model="question_one" value="No">
                                    <label class="form-check-label" >2. No, my guardian will be the account holder
                                    </label>
                                </div>

                               </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                        <span class="text-danger">@error('question_two'){{ $message }}@enderror</span>
                            <label for="inputFirst" class="form-label">What type of support do you want?</label>
                            <div class="row">
                               <div class="col-md-12">
                                <div class="form-check">
                                        <input class="form-check-input" type="radio"wire:model="question_two" value="Disability support">
                                        <label class="form-check-label" >
                                        1. Disability support
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" wire:model="question_two" value="Aged care">
                                        <label class="form-check-label" >2. Aged care
                                        </label>
                                    </div>

                               </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                        <span class="text-danger">@error('question_three'){{ $message }}@enderror</span>
                            <label for="inputFirst" class="form-label">What kind of support do you want?</label>
                            <div class="row">
                               <div class="col-md-12">

                               <div class="form-check">
                                        <input class="form-check-input" type="radio"wire:model="question_three" value="Full support">
                                        <label class="form-check-label" >
                                        1. Full support
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" wire:model="question_three" value="Partial support">
                                        <label class="form-check-label" >2. Partial support
                                        </label>
                                    </div>

                               </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                        <span class="text-danger">@error('question_four'){{ $message }}@enderror</span>
                            <label for="inputFirst" class="form-label">Support Time</label>
                            <div class="row">
                               <div class="col-md-12">

                               <div class="form-check">
                                        <input class="form-check-input" type="radio"wire:model="question_four" value="Morning shift">
                                        <label class="form-check-label" >
                                        1. Morning shift
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" wire:model="question_four" value="Day Shift">
                                        <label class="form-check-label" >2. Day Shift
                                        </label>
                                    </div>

                               </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endif
        <!--  End Step Two -->

         <!-- Step Three -->
         @if($currentStep == 3)
         <div class="step-two">
            <div class="card">
                <div class="card-header sections-bg">2/3 Your CV</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Upload Your CV</label>
                            <input class="form-control" type="file" wire:model="cv">
                            <span class="text-danger">@error('cv'){{ $message }}@enderror</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endif
        <!--  End Step Three -->

        <div class="action-btn d-flex justify-content-between mt-4">
            @if($currentStep == 1)
                <div></div>
            @endif

            @if($currentStep == 2 || $currentStep == 3)
            <button type="button" class="btn btn-secondary" wire:click="decreaseStep()">Back</button>
           
            @endif

            @if($currentStep == 1 || $currentStep == 2)
            <button type="button" class="btn btn-primary" wire:click="increaseStep()">Next</button>
            @endif
            @if($currentStep == 3)
            <button type="submit" class="btn btn-success">Submit</button>
            @endif

        </div>
        
            
    </form>
</div>
