@extends('layouts.app')
@section('title',$viewData["title"])
@section('subtitle',$viewData["subtitle"])
@section('content')
<div class="container">
<div class="row">
<div class="col-lg-4 ms-auto">
<p class="lead">{{$viewData["description"]}}</p>
</div>
<div class="col-lg-4 me-auto">
<p class="lead">{{$viewData["author"]}} </p>
</div>
</div>
</div>
<!-- About Start -->
<div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="img/bilal 44.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Student & Web Developer</h3>
                    <p>I am student in BTECH3 Software Engineering at the University Institute of Cost and passionate about digital...</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">Nkouandou Ndam Bilal Ben</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary">28 June 2001</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">Bachelor</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">3 Years</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">+237693967162</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">nkouandou.bilalben@gmail.com</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">Akwa Douala, Cameroun</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">Available</span></h6></div>
                    </div>
                    <a href="" class="btn blue btn-outline-primary mr-4">Hire Me</a>
                    <a href="" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
 <!-- Skill Start -->
 <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
               <h1 class="position-absolute text-uppercase text-primary">My Skills</h1><br/><br/><br/><br/>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                   <div class="skill mb-4">     
                        <h6 class="font-weight-bold">HTML</h6>
                        <div class="progress">
                            <div class ="progress-bar"style="width:70%">80%</div>        
                        </div><br/>
                    <div class="skill mb-4">
                            <h6 class="font-weight-bold">CSS</h6>
                            <div class="progress">
                            <div class ="progress-bar"style="width:60%">70%</div>  
                     </div><br/>
                    <div class="skill mb-4">
                    <h6 class="font-weight-bold">PHP</h6>
                            <div class="progress">
                            <div class ="progress-bar"style="width:60%">60%</div>  
                        </div>
                    </div>
                </div></div></div>
                <div class="col-md-6">
                   <div class="skill mb-4">     
                        <h6 class="font-weight-bold">Javascript</h6>
                        <div class="progress">
                            <div class ="progress-bar"style="width:50%">50%</div>        
                        </div><br/>
                    <div class="skill mb-4">
                            <h6 class="font-weight-bold">Phyton</h6>
                            <div class="progress">
                            <div class ="progress-bar"style="width:60%">60%</div>  
                     </div><br/>
                    <div class="skill mb-4">
                    <h6 class="font-weight-bold">Wordpress</h6>
                            <div class="progress">
                            <div class ="progress-bar"style="width:70%">70%</div>  
                        </div>
                       
                    </div>
        </div>
</div></div></div></div>
    <!-- Skill End -->
    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
                <h1 class="position-absolute text-uppercase text-primary">My Services</h1><br/><br/><br/><br/>
            </div>
            <div class="row pb-3">
                <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Web Design</h4>
                    </div>
                    <p>On the Internet, a brand must meet several conditions. Websites are both sales, service and marketing
                         channels, and the needs of web users can be different from those of traditional channels.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Development</h4>
                    </div>
                    <p> Whether online or offline, you need a proven, technology-assisted sales strategy.
                        We support you in setting up a real system.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-android service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Apps Design</h4>
                    </div>
                    <p>We design the interface of your application and make them attractive and beautiful based on the information provided and our experience.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-apple service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Apps Development</h4>
                    </div>
                    <p>We manufacture your applications based on your needs, informations and also our experience in the field.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-search service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">SEO</h4>
                    </div>
                    <p>To optimize a website's technical configuration, content redevance and link popularity.  </p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-4  col-md-7 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Content Creating</h4>
                    </div>
                    <p> We ensure the creation of your content in order to properly manage It in order to
                         create a pleasant atmosphere with the community.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
            </div>
        </div>
    </div></div>
    <!-- Services End -->

@endsection
