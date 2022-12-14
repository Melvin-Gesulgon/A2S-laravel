@extends('layout.app')

@section('content')
<div class="container talent-basic-info" style="display: flex;">
    <!-- start of main left container -->
    <div class="talent-div-1" style="background-color: #D9D9D9; padding: 20px; border-radius: 50px;">
        <div style="height: 180px; width: 180px; margin-inline: auto; flex-grow: 1; border-radius: 50px;">
          <img class="img-fluid mt-3" src="{{asset('build/assets/images/juan-dela-croix.jpg')}}" style="border-radius: 90px;" alt="">
        </div>
        <div class="text-center"style="margin-top: 100px;">
            <span class="regular" style="border-bottom: 0px"><h3>Juan Dela Cruz</h3></span>
            <span><h4>Industrial Engineer</h4></span>
            <span><p>juandelacruz@gmail.com<br>0919-8765-4321</p></span>  
        </div>
        <div id="line-break"></div>
        <br>
        <div style="border-radius: 5px; margin-left: 70px; margin-right: 70px;">
          <p class="italic">If you're looking for someone who can manage projects and teams, with an eye for design, I am your guy.</p><br>
        </div>
        <div id="line-break"></div><br>
        <div class="d-flex justify-content-between" style="margin-left:30px; margin-right:30px">
          <a href="../find_talent/talent-profile.html"class="button graybutton regular">Public View<i class="ms-3 bi bi-eye-fill"></i></a>
          <button class="button orangebutton regular">Edit profile<i class="bi bi-pencil-square ms-3"></i></button>
        </div>
        <br><br>
        
        <div style="margin-left: 20px;">
            <h3>Employment History</h3>
            <div class="d-flex justify-content-end">
                <button class="button orangebutton regular mb-3" style="margin-right:20px;"><i class="bi bi-pencil-square"></i></button>
            </div>
            <ul>
                <li><h5>Project Manager (July 2018- July 2022), <strong>Fire Industries LLC</strong></h5><span><p>Manage overall activities, members and progress of ongoing projects.</p></span></li>
                <br>
                <li><h5>Graphic Designer (July 2017- July 2018), <strong>Shinra Corporation</strong></h5><p>Plans and designs brand assets that is in line with the core values of the company.</p></li> <br>
                <!-- <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat unde ducimus sapiente voluptas iure?</li> -->
            </ul>
        </div>
        <hr>
      
        <div style="padding: 20px; border-radius: 20px;">
                <div class="d-flex justify-content-between">
                    <h3>Skills</h3>
                    <button class="button orangebutton regular"><i class="bi bi-pencil-square"></i></button>
                </div>
            <div class="mt-4">
                <button class="graybutton regular">Graphic Design</button>
                <button style="margin-left: 5px;" class="graybutton regular">Project Management</button>
                <!-- <button class="orangebutton">skill 3</button><br> -->
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-between" style="margin-right: 20px;">
          <h3 class="text-start ms-4">Portfolio</h3>
          <button class="orangebutton regular"><i class="bi bi-pencil-square"></i></button> 
        </div>
        <div style="margin: 15px; border-radius: 15px; padding: 15px;">
                
            <div style="display: flex;">
              <div>
                <div style="background-color: white;height: 205px; width: 210px; margin: 10px; border-radius: 15px; flex-grow: 1; flex-wrap: wrap; padding: 5px;">
                  <img  style="height: 200px; width: 200px;" src="{{asset('build/assets/images/graphic-design-portfolio.svg')}}" alt="">
                </div>
                <p class="text-start ms-3">Graphic Design</p>
              </div>
              <div>
                <div style="background-color: white;height: 205px; width: 210px; margin: 10px; border-radius: 15px; flex-grow: 1; flex-wrap: wrap; padding: 5px;">
                  <img  style="height: 200px; width: 200px;" src="{{asset('build/assets/images/project-management-portfolio.svg')}}" alt="">
                </div>
                <p class="text-start ms-3">Project Management</p>
              </div>
                
            </div>  
        </div>
    </div>
    <!-- end of left main container -->

    <!-- start of right main container -->
    <div style="background-color: #003865; border-radius: 20px; width: 300px; height: 880px; margin-left: 10px;" class="talent-div-2">
        <div style="margin-left: 20px; margin-top: 30px; margin-right: 10px; border-radius: 15px; background-color: white; width: 255px;">
          <h4 id="daynumber" class="text-center" style="font-size: 1.3rem; border-left: solid, 5px; margin-top: 10px;">00</h4>
            <div style="display: flex-column;">
              <h4 id="dayname" class="text-center" style="padding-left: 4px; padding: 3px;">Month</h4>
              <div class="text-center" style="margin: 5px; padding: 2px;"> 
                <span id="hour" class="" style="margin-bottom: 0px;">00</span>:
                <span id="minutes" class="" style="margin-bottom: 0px;">00</span>
                <span id="period" class="" style="margin-bottom: 0px;">AM</span>
                <h4 id="month" class="text-center" style="margin-top: 3px;">Day</h4>
              </div>
            </div>
        </div>
        
        <div style="margin-top: 20px;">
          <div class="d-flex justify-content-between me-3">
            <h5 style="color: #3CCF4E;" class="text-start ms-3">Availability</h5>
            <button class="button orangebutton regular"><i class="bi bi-pencil-square"></i></button>
          </div>
          <p style="color: #F2F2F2; padding-bottom: 5px;" class="text-start ms-3">Open for freelancing</p>
          <h5 style="color: #3CCF4E; margin-top: 15px;" class="text-start ms-3">Hours per Week</h5>
          <p style="color: #F2F2F2; padding-bottom: 5px;" class="text-start ms-3">More than 30 hours per week</p>
          <h5 style="color: #3CCF4E; margin-top: 15px;" class="text-start ms-3">Profile Visibility</h5>
          <p style="color: #F2F2F2; padding-bottom: 5px;" class="text-start ms-3">A2S users only</p>
          <h5 style="color: #3CCF4E; margin-top: 15px;" class="text-start ms-3">Hourly Rate</h5>
          <p style="color: #F2F2F2; padding-bottom: 5px;" class="text-start ms-3">PhP 250 per hour</p>
        </div>
        <hr style="color: #F2F2F2;">
        <div style="margin-top: 20px;">
            <div class="d-flex justify-content-between me-3">
                  <h5 style="color: #3CCF4E;" class="text-start ms-3">Language</h5>
                 <button class="button orangebutton regular"><i class="bi bi-pencil-square"></i></button>
            </div>
          <p style="Color: #F2F2F2; padding-bottom: 5px;" class="text-start ms-3">Filipino, English</p>
          <h5 style="color: #3CCF4E; margin-top: 15px;" class="text-start ms-3">Certification</h5>
          <p style="color: #F2F2F2; padding-bottom: 5px;" class="text-start ms-3">ISO certified</p>
          <h5 style="color: #3CCF4E; margin-top: 15px;" class="text-start ms-3">Resume/CV</h5>
          <p class="text-start ms-3"><a class="jobs-link" href="#">juandelacruz.pdf</a></p>
          <h5 style="color: #3CCF4E; margin-top: 15px;" class="text-start ms-3">Education</h5>
          <p style="Color: #F2F2F2; padding-bottom: 5px; margin-bottom: 20px;" class="text-start ms-3">Bachelor of Science in Industrial Engineering</p>
        </div>
      
        <div style="margin-top: 30px; margin-left: 2px; border-radius: 15px; background-color: #003865; width: 300px; height: 300px; padding-top: 20px;">
            <div class="d-flex justify-content-between me-3">
                <h5 style="color: #F2F2F2; margin-top: 10px;" class="ms-3">Completed Projects</h5>
                <button class="button orangebutton regular"><i class="bi bi-pencil-square"></i></button>
            </div>
            <h5 style="color: #F2F2F2;" class="ms-3 mt-5">Pending applications</h5>
            <h5 style="color: #F2F2F2;" class="ms-3 mt-5">Bookmarked job posts</h5>
            <h5 style="color: #F2F2F2;" class="ms-3 mt-5">Invitations</h5>
        </div>

     </div>
     <!-- end of right main container -->

    
   
</div>


@endsection