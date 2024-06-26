@extends('layouts.template')

@section('content')
<div class="container">
  <div id="wizard">
    <h3>Step 1 Title</h3>
    <section>
     <h5 class="bd-wizard-step-title">Step 1</h5>
     <h2 class="section-heading">Select business type </h2>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
     <div class="purpose-radios-wrapper">
        <div class="purpose-radio">
            <input type="radio" name="purpose" id="branding" class="purpose-radio-input" value="Branding" checked>
           <label for="branding" class="purpose-radio-label">
             <span class="label-icon">
               <img src="{{asset('landing/assets/images/icon_branding.svg')}}" alt="branding" class="label-icon-default">
               <img src="{{asset('landing/assets/images/icon_branding_green.svg')}}" alt="branding" class="label-icon-active">
             </span>
             <span class="label-text">Branding</span>
           </label>
          </div>
          <div class="purpose-radio">
             <input type="radio" name="purpose" id="mobile-design" class="purpose-radio-input" value="Moile Design">
            <label for="mobile-design" class="purpose-radio-label">
              <span class="label-icon">
                <img src="{{asset('landing/assets/images/icon_mobile_design.svg')}}" alt="branding" class="label-icon-default">
                <img src="{{asset('landing/assets/images/icon_mobile_design_green.svg')}}" alt="branding" class="label-icon-active">
              </span>
              <span class="label-text">Moile Design</span>
            </label>
           </div>
           <div class="purpose-radio">
               <input type="radio" name="purpose" id="web-design" class="purpose-radio-input" value="Web Design">
              <label for="web-design" class="purpose-radio-label">
                <span class="label-icon">
                  <img src="{{asset('landing/assets/images/icon_web_design.svg')}}" alt="branding" class="label-icon-default">
                  <img src="{{asset('landing/assets/images/icon_web_design_green.svg')}}" alt="branding" class="label-icon-active">
                </span>
                <span class="label-text">Web Design</span>
              </label>
             </div>
     </div>
    </section>
    <h3>Step 2 Title</h3>
    <section>
      <h5 class="bd-wizard-step-title">Step 2</h5>
      <h2 class="section-heading">Enter your Account Details</h2>
      <div class="form-group">
        <label for="firstName" class="sr-only">First Name</label>
        <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
      </div>
      <div class="form-group">
        <label for="lastName" class="sr-only">Last Name</label>
        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
      </div>
      <div class="form-group">
        <label for="phoneNumber" class="sr-only">Phone Number</label>
        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Phone Number">
      </div>
      <div class="form-group">
        <label for="emailAddress" class="sr-only">Email Address</label>
        <input type="email" name="emailAddress" id="emailAddress" class="form-control" placeholder="Email Address">
      </div>
    </section>
    <h3>Step 3 Title</h3>
    <section>
        <h5 class="bd-wizard-step-title">Step 3</h5>
        <h2 class="section-heading mb-5">Review your Details and Submit</h2>
        <h6 class="font-weight-bold">Select business type</h6>
        <p class="mb-4" id="business-type">Branding</p>
        <h6 class="font-weight-bold">Enter your Account Details</h6>
        <p class="mb-4"><span id="enteredFirstName">Cha</span> <span id="enteredLastName">Ji-Hun C</span> <br>
            Phone: <span id="enteredPhoneNumber">+230-582-6609</span> <br>
            Email: <span id="enteredEmailAddress">willms_abby@gmail.com</span></p>
    </section>
  </div>
</div>
@endsection