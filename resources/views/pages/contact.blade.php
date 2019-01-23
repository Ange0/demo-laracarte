@extends('layouts.layout',["title"=>" about"])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 ">
                <h1>Get in Touch</h1>
                <p>if you having trouble with  this service ,<a href="#"> <b> ask for Help</b></a></p>
                <form action="{{ route("contact_path") }}" method="POST">
                   @csrf
                    <div class="form-group {{ $errors->has("name") ? "has-error": ""}}">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}}">
                        {!!  $errors->first("name","<span class='help-block'>:message </span>") !!}
                    </div>
                    <div class="form-group  {{ $errors->has("email") ? "has-error": ""}}">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email')}}"/>
                        {!! $errors->first("email","<span class='help-block'>:message </span>") !!}
                    </div>
                    <div class="form-group  {{ $errors->has("message") ? "has-error": ""}}">
                        <label for="Message" class=" sr-only"> Message</label>
                        <textarea name="msg" id="message" cols="10" rows="10" class="form-control">  {{ old('msg')}}</textarea>
                        {!! $errors->first("message","<span class='help-block'>:message </span>") !!}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">Submit now </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 @stop
