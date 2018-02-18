@extends('layouts.app')

@section('content')


<section id="registration" class="section registration">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 page-center">

                    <div class="text-center">
                        <img src="{{ asset('front/images/logo-white.jpg') }}" class="img-responsive logo-white" alt="">
                    </div>
                    
                    @if (session('status'))
                        <div class="alert alert-info">
                            <div class="lead">
                                <h4>Thanks for Registration</h4>
                                <p>
                                    Check your email, and save your code
                                </p> 
                            </div>
                            
                            <a href="{{ route('home') }}" class="text-primary font-weight-bold mx-2">Go to Home</a>
                            <a href="https://www.facebook.com/TEDxAzharUni/" class="text-primary font-weight-bold mx-2">
                                Facebook Page
                            </a>
                            <a href="https://www.youtube.com/playlist?list=PLbCnr-sZIpM2YnD0JkWf8bfKRT6Ct-zp0" class="text-primary font-weight-bold mx-2">
                                Youtube Channel
                            </a>
                            <a href="https://www.flickr.com/photos/tedxazharuni/" class="text-primary font-weight-bold mx-2">
                                Flickr
                            </a>
                            
                        </div> 
                    @else
                        <p class="lead text-danger mrl-10">You are free to answer in English or Arabic</p>
                        <h3 class="section-title text-danger mrl-10">Apply Now!</h3>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            
                        <form action="{{ route('application') }}" method="POST">
                                
                            {{ csrf_field() }}

                            <div class="row">
                                
                                <div class="col-md-12" id="registration-msg" style="display:none;">
                                    <div class="alert"></div>
                                </div>
                                 <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" required="required" placeholder="Full Name">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                                    <label for="age">Age</label>
                                    <input type="number" value="{{ old('age') }}" class="form-control" min="5" max="100" id="age" name="age" required="required" placeholder="Age">
                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                 <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Email</label>
                                    <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="email" required="required" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                 <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" value="{{ old('mobile') }}" class="form-control" id="mobile" name="mobile" required="required" placeholder="Mobile Number">
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label for="city">City</label>
                                    <input type="text" value="{{ old('city') }}" class="form-control" id="city" name="city" required="required" placeholder="City">
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="status">What are you ?</label>
                                    <select name="status" class="form-control" required="required">
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Graduated">Graduated</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('work') ? ' has-error' : '' }}">
                                    <label for="work">Where Do You Study/Work?</label>
                                    <input type="text" value="{{ old('work') }}" class="form-control" id="work" name="work" required="required" placeholder="Where Do You Study/Work?">
                                    @if ($errors->has('work'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('work') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('nationality') ? ' has-error' : '' }}">
                                    <label for="nationality">Your Nationality</label>
                                    <input type="text" value="{{ old('nationality') }}" class="form-control" id="nationality" name="nationality" required="required" placeholder="Your Nationality">
                                    @if ($errors->has('nationality'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nationality') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('national_id') ? ' has-error' : '' }}">
                                    <label for="national_id">Your ID/Passpor ID</label>
                                    <input type="text" value="{{ old('national_id') }}" class="form-control" id="national_id" name="national_id" required="required" placeholder="Your ID/Passpor ID">
                                    @if ($errors->has('national_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('national_id') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('prev_event') ? ' has-error' : '' }}">
                                    <label for="prev_event">Did you attend TEDx Event before?</label>
                                    <select name="prev_event" id="prev_event" class="form-control" required="required">
                                        <option value="yes">yes</option>
                                        <option value="no">no</option>
                                    </select>
                                    @if ($errors->has('prev_event'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('prev_event') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group {{ $errors->has('about_ted') ? ' has-error' : '' }}">
                                    <label for="about_ted">What do you know about TED/TEDx?</label>
                                    <textarea name="about_ted" class="form-control" 
                                     required="required" rows="5">
                                        {{ old('about_ted') }}
                                    </textarea>
                                    @if ($errors->has('about_ted'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('about_ted') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group {{ $errors->has('fav_talks') ? ' has-error' : '' }}">
                                    <label for="fav_talks">What  are your favorite 3 talks? and why?</label>
                                    <textarea name="fav_talks" class="form-control" required="required" rows="5">
                                        {{ old('prev_event') }}
                                    </textarea>
                                    @if ($errors->has('fav_talks'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fav_talks') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('why_attend') ? ' has-error' : '' }}">
                                    <label for="why_attend">Why do you want to attend TEDxAzharUniversity?</label>
                                    <textarea name="why_attend" class="form-control" required="required" rows="5">
                                        {{ old('why_attend') }}
                                    </textarea>
                                    @if ($errors->has('why_attend'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('why_attend') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('how_spread') ? ' has-error' : '' }}">
                                    <label for="how_spread">How can you spread ideas you are interested in?</label>
                                    <textarea name="how_spread" class="form-control" required="required" rows="5">
                                        {{ old('about_ted') }}
                                    </textarea>
                                    @if ($errors->has('how_spread'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('how_spread') }}</strong>
                                        </span>
                                    @endif
                                </div>
                               
                            </div>
                            <div class="text-center mt20">
                                <button type="submit" class="btn btn-primary">Apply Now!</button>
                            </div>
                        </form>

                    @endif

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
