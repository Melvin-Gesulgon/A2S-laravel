@extends('layout.app')

@section('content')

<div class="container" id="jpost">
    <div id="jpost-head">
        <h2>Position</h2>
        <h3>Company XYZ</h3>
        <br>
        <p>National Capital Region</p>
        <p>PHP 25, 000 - PHP 30, 000</p>
        <br>
        <p>Posted 3 days ago</p>
        <div id="jpost-appply">
            <a href="/apply"class="orangebutton regular nlw">Apply Now</a>
        </div>
    </div>
    <div id="line-break"></div>
    <div id="jpost-jobdes">
        <h4>Job Description</h4>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit iure inventore obcaecati aliquam consequuntur, ullam sunt laborum, quo ad quibusdam iste? Deserunt officia nesciunt ullam impedit, provident aliquid eum voluptatum!</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit iure inventore obcaecati aliquam consequuntur, ullam sunt laborum, quo ad quibusdam iste? Deserunt officia nesciunt ullam impedit, provident aliquid eum voluptatum!</p>
    </div id="jpost-company">
    <div id="line-break"></div>
    <div>
        <h4>Company Overview</h4>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit iure inventore obcaecati aliquam consequuntur, ullam sunt laborum, quo ad quibusdam iste? Deserunt officia nesciunt ullam impedit, provident aliquid eum voluptatum!</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit iure inventore obcaecati aliquam consequuntur, ullam sunt laborum, quo ad quibusdam iste? Deserunt officia nesciunt ullam impedit, provident aliquid eum voluptatum!</p>
    </div>
    <div id="line-break"></div>
    <a href="../#" class="jobs-link">More jobs from this employer</a>
    <div id="jpost-save">
        <button class="graybutton regular">Save this Post</button>
    </div>
    <a href="../#" class="jobs-link">Report this job ad</a>
</div>

@endsection