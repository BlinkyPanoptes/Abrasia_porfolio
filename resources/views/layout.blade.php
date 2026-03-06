<!DOCTYPE html>
<html lang="en">

<head>
<title>My Portfolio</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

    body{
        background:#000;
        min-height:100vh;
        display:flex;
        flex-direction:column;
    }

    /* NAVIGATION */

    .nav-link{
        color:white;
    }

    .nav-link:hover{
        color:#11999E;
    }

    /* EMAIL */

    .email{
        color:#11999E;
        text-decoration:none;
    }

    /* TEXT WIDTH */

    .about-text{
        max-width:700px;
        line-height:1.8;
    }

    /* HERO SECTION */

    .hero{
        background:#11999E;
        color:white;
        text-align:center;
        padding:40px 20px;

        flex:1;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    /* ABOUT SECTION */

    .section{
        padding:25px 20px;
        color:white;
    }

    /* FOOTER */

    footer{
        background:#11999E;
        color:white;
        text-align:center;
        padding:12px;
    }

    /* Skills */

    .skills-section{
        flex:1;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    .skill-circle{
        width:140px;
        height:140px;
        border-radius:50%;
        display:flex;
        align-items:center;
        justify-content:center;
        margin:auto;
        font-size:22px;
        font-weight:bold;
        color:white;
        position:relative;
    }

    .skill-circle::after{
        content:'';
        width:95px;
        height:95px;
        background:#000;
        border-radius:50%;
        position:absolute;
    }

    .skill-circle span{
        position:relative;
        z-index:2;
    }

    /* Projects */

    .projects-section{
        flex:1;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    .project-card{
        background:#111;
        border-radius:10px;
        padding:20px;
        transition:0.3s;
        max-width:400px;
        margin:auto;
    }

    .project-card:hover{
        transform:translateY(-5px);
        box-shadow:0 0 15px rgba(17,153,158,0.6);
    }

    /* EXPERIENCE */

    .experience-section{
        flex:1;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    .timeline{
        max-width:700px;
        margin:auto;
    }

    .timeline-item{
        border-left:3px solid #11999E;
        padding:20px 20px 20px 25px;
        margin-bottom:25px;
        position:relative;
    }

    .timeline-item::before{
        content:'';
        width:12px;
        height:12px;
        background:#11999E;
        border-radius:50%;
        position:absolute;
        left:-7px;
        top:25px;
    }

    .timeline-duration{
        display:block;
        color:#11999E;
        font-size:14px;
        margin-bottom:6px;
    }

    /* CONTACT */

    .contact-section{
        flex:1;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

    .contact-box{
        width:100%;
        max-width:500px;
        margin:auto;
        background:#111;
        padding:30px;
        border-radius:10px;
    }

    .contact-info{
        margin-bottom:15px;
    }

    .contact-textarea{
        background:#ffffff;
        border:1px solid #ffffff;
        color:white;
    }

    .contact-textarea:focus{
        border-color:#11999E;
        box-shadow:none;
    }

    .contact-btn{
        background:#11999E;
        border:none;
        color:white;
        padding:10px 25px;
        border-radius:6px;
        transition:0.3s;
    }

    .contact-btn:hover{
        background:#0f7f84;
    }

</style>

</head>


<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="/">Portfolio</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/skills">Skills</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/projects">Projects</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/experience">Experience</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/contact">Contact</a>
</li>

</ul>

</div>

</div>

</nav>

@yield('content')

<footer>

© {{ date('Y') }} My Portfolio

</footer>


</body>
</html>