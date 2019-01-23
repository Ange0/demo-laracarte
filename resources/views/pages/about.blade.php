@extends('layouts.layout',["title"=>" about"])
@section('content')
       <div class="container">
            <h2>What is Laracarte ?</h2>
            <p> Laracarte is clone app of <a href="https://laracate.com" targer="_blank">Lararte.com</a></p>
            <div class="row">
                <div class="col-md-6">
                    <p class="alert alert-warning">
                        <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> this project has been bluit by @Angelo for learning purposes .</strong>
                    </p>
                </div>
            </div>
            <p>Feel free to help to improve the <a href="#">Source code.</a></p>
            <hr>
            <p>What is Laramap?</p>
            <p> Laramap is the website by which {{ config('app.name') }} was inpired :). </p>
            <p>More infos <a href="#">here</a>  .</p>
            <hr>
            <h2> Which tools and service are used in {{ config('app.name') }} ?</h2>
            <p>Basically it 's bluit on laravel &amp; bootstrap.But there 's a bunch of service used
                for email other section .
            </p>
            <ul>
                <li>Laravel</li>
                <li>bootsrap</li>
                <li>Amazon S3</li>
                <li>Mandrill</li>
                <li>Google Maps</li>
                <li>Gravatar</li>
                <li> Antony Martin' Geolocalisation Package</li>
                <li>Michel Fortin 's Markdown Perser Package</li>
                <li>Heroku</li>
            </ul>
    </div>
 @stop
