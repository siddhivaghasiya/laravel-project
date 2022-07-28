    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <link rel="icon" type="image/x-icon" href="{{asset('theme/assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('theme/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">  
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset('theme/assets/img/profile.jpg')}}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">

                    @if(isset($getaboutdata))
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    @endif

                    @if(isset($getexperience))
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    @endif

                    @if(isset($geteducation))
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    @endif

                    @if(isset($getskill))
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    @endif

                    @if(isset($getinterest))
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    @endif

                    @if(isset($getawards))
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                    @endif
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            @if(isset($getaboutdata))
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{$getaboutdata->title}}
                        <span class="text-primary"></span>
                    </h1>
                    <div class="subheading mb-5">
                        {{$getaboutdata->address}}
                        <a href="mailto:name@email.com"></a>
                    </div>
                    <p class="lead mb-5">{{$getaboutdata->description}}.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            @endif
            <hr class="m-0" />
            <!-- Experience-->
            @if(isset($getexperience))
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$getexperience->title}}</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$getexperience->position}}</h3>
                            <div class="subheading mb-3">{{$getexperience->address}}</div>
                            <p>{{$getexperience->description}}.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$getexperience->data}}</span></div>
                    
                </div>
            </section>
            @endif
            <hr class="m-0" />
            <!-- Education-->
            @if(isset($geteducation))
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$geteducation->title}}</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$geteducation->univercity}}</h3>
                            <div class="subheading mb-3">{{$geteducation->course}}</div>
                            <div>{{$geteducation->address}}</div>
                            <p></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$geteducation->date}}</span></div>
                    </div>
                    
                </div>
            </section>
            @endif
            <hr class="m-0" />
            <!-- Skills-->
             @if(isset($getskill))
            <section class="resume-section" id="skills">
                <div class="resume-section-content"> 
                    <h2 class="mb-5">{{$getskill->title}}</h2>
                    <div class="subheading mb-3">{{$getskill->tools}}</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                        <li class="list-inline-item"><i class="fab fa-less"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                        <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                    </ul>
                    <div class="subheading mb-3">{{$getskill->workflow}}</div>
                    
                </div>
            </section>
            @endif
            <hr class="m-0" />
            <!-- Interests-->
             @if(isset($getinterest))
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$getinterest->title}}</h2>
                    
                    <p class="mb-0">{{$getinterest->description}}.</p>
                </div>
            </section>
            @endif
            <hr class="m-0" />
            <!-- Awards-->
             @if(isset($getaward ))
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$getawards->title}}</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                         {{$getawards->description}}                        
                        </li>
                        
                    </ul>
                </div>
            </section>
            @endif
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('theme/js/scripts.js')}}"></script>
    </body>
</html>
