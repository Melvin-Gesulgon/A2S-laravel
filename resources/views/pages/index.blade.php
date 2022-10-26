@extends('layout.app')

@section('content')
    {{-- <h1>Home</h1>
    <a href="/search" class="btn btn-success">Find Work</a> --}}

    <div class="container"id="slogan">
        <div class="row">
            <div class="col-md-6">
                <h5 class="tagline">Access</h5>
                <h5 class="tagline-sm">your
                    <span class="tagline">Success</span>
                </h5>
                <div>
                    <span>
                        <a href="/search" class="orangebutton large nl">Find Work</a>
                        <a href='/search' class="greenbutton large nl">Find Talent</a>
                    </span>
                    
                </div>  
            </div id="slogan-btn">
            <div class="col-md-6 image">
                <img src="{{asset('build/assets/images/banner.svg')}}" alt="" width="100%">
            </div>
        </div>   
    </div>

    <div class="container" id="categories">
        <h2>Search by Category</h2>
        <div id="categoryCards">
            <div class="card">
                <h4>IT & Development</h4>
            </div>
            <div class="card">
               <h4>Design & Creative</h4>
            </div>
            <div class="card">
                <h4>Sales and Marketing<h4>
            </div>
            <div class="card">
                <h4>Writing & Translation<h4>
            </div>
            <div class="card">
                <h4>Admin & Support<h4>
            </div>
            <div class="card">
                <h4>Finance & Accounting<h4>
            </div>
            <div class="card">
                <h4>Engineering & Architecture<h4>
            </div>
            <div class="card">
                <h4>Legal<h4>
            </div>
        </div>
    </div>

    <div class="container" id="news">
        <div class="row">
            <div class="col-md-6" id="caption">
                <h3>Sample Article Title</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos quidem, esse repellendus amet cupiditate libero explicabo cumque ipsum fuga assumenda maiores quas eveniet, blanditiis mollitia nulla magnam consequatur delectus incidunt.</p>
                <button class="greenbutton regular">Learn More</button>
            </div>
            <div class="col-md-6" id="image">
                <img src="{{asset('build/assets/images/logo.png')}}" alt="" width="100%">
            </div>
            
        </div>
    </div>

    {{-- <footer class="footer">
        <div class="footer container">
            <div class="footer-row">
                <div class="footer-items">
                    <ul>
                        <h4>Find Talent</h4>
                        <li><a href="#">How to Hire</a></li>
                        <li><a href="#">Limitation</a></li>
                        <li><a href="#">Report Talent</a></li>
                    </ul>
                </div>
                <div class="footer-items"> 
                    <ul>
                        <h4>Find Work</h4>
                        <li><a href="#">How to find work</a></li>
                        <li><a href="#">Tips</a></li>
                        <li><a href="#">Report Client</a></li>
                    </ul>
                </div>
                <div class="footer-items">
                    <ul>
                        <h4>Resources</h4>
                        <li><a href="#">Help and Support</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div>
                <div class="footer-items">
                    <ul>
                        <li><h4>Company</h4></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul> 
                </div>
            </div>
            <div class="social-links">
                <h4>Social Handles: </h4>
                <span>
                    <a href="www.facebook.com"><i class="bi bi-facebook fs-1 text-success ms-4"></i></a>
                    <a href="www.github.com"><i class="bi bi-github fs-1 text-success ms-4"></i></a>
                    <a href="www.linkedin.com"><i class="bi bi-linkedin fs-1 text-success ms-4"></i></a>
                    <a href="www.facebook.com"><i class="bi bi-messenger fs-1 text-success ms-4"></i></a>
                    <a href="www.twitter.com"><i class="bi bi-twitter fs-1 text-success ms-4"></i></a>
                </span>
            </div>
        </div>
    </footer> --}}
@endsection