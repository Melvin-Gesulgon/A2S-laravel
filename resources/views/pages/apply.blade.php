@extends('layout.app')

@section('content')


<div class="container" id="apply">
    <div class="row">
        <div class="col-md-6">
            <div id="apply-job">
                <h2>Position</h2>
                <h3>Company XYZ</h3>
                <br>
                <p>National Capital Region</p>
                <p>PHP 25, 000 - PHP 30, 000</p>
                <div id="line-break"></div>
                <h4><i class="fa-solid fa-briefcase"></i> Min. 1 year exp</h4>
                <h4><i class="fa-solid fa-book-open"></i> Bachelor/College Degree in Engineering</h4>
            </div>
            <div>
                <img src="{{asset('build/assets/images/apply.svg')}}" alt="" width="90%">
            </div>
            
        </div>
        <div class="col-md-6">
            <div id="apply-profile">
                <h2>Juan Dela Cruz</h2>
                <h3>Engineer</h3>
                <br>
                <p>juandelacruz@gmail.com</p>
                <p>0919-876-54321</p>
                <div id="line-break"></div>
                <h4>Resume/Curriculum Vitae</h4>
                <a href="#" class="jobs-link">juandelacruz.pdf</a><br>
            </div>
            <div id="apply-write">
                <h4>Write additional information for the employer.</h4>
                <textarea name="write" id="" cols="30" rows="10"></textarea>
            </div>
            <div id="apply-button">
                <button class="graybutton regular" onclick="window.history.go(-1); return false;">back</button>
                <button class="graybutton regular"><a class="nl"href="/talent-account-page">review profile</a></button>
                <button class="orangebutton regular" onclick="submit()">Submit Application</button>
            </div> 
        </div>
    </div>
</div>


@endsection