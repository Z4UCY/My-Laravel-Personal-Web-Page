@extends('layouts.default')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
<header>
    <div class="user">
        <h3 class="name">Algem Garolacan</h3>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home"> Home </a></li>
            <li><a href="#about"> About </a></li>
            <li><a href="#laraveltopic"> Laravel </a></li>
            <li><a href="#favlecture"> CS 202 Lecture </a></li>
            <li><a href="#years"> 6 Years from now</a></li>
            <li><a href="#contact"> Contact </a></li>
        </ul>
    </nav>

</header>

<div id="menu" class="fas fa-bars"></div>

<!--HOME PAGE-->
<section class="home" id="home">
    <h3>HI THERE !</h3>
    <h1>I'm <span>Algem Garolacan</span></h1>
    <p>Motivate Yourself Everyday!
    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
</section>

<!--ABOUT ON THE USER-->
<section class="about" id="about">
<h1 class="heading"> <span>About</span> Me </h1>
<div class="row">
    <div class="info">
        <h3> <span> Name : </span> Algem Garolacan </h3>
        <h3> <span> Age : </span> 21 </h3>
        <h3> <span> School : </span> Pamantasan ng Lungsod ng Pasig </h3>
        <h3> <span> Course : </span> BS Computer Science </h3>
        <h3> <span> Year : </span> 3rd Year </h3>
        <h3> <span> Hobbies : </span> Computer & Mobile Games, Watching Anime & Movies, Reading Manga, Biking, Designing </h3>
    </div>
</section>


<!--LARAVEL TOPIC-->
<section class="laraveltopic" id="laraveltopic">
    <h1 class="heading"> What is <span> Laravel? </span> </h1>
    <div class="box-container">
        <h1 class="titletopic">Laravel Philosophy</h1>
        <img class="imglaravel" src="data:image/png;base64,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" alt="">
        <p class="laraveldescription">
            Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching. <br><br>

            Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra. <br><br>

            Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked. <br><br>

            FOR MORE INFO: https://laravel.com/docs/4.2/introduction
        </p>
    </div>

<!--FAVORITE LECTURE IN CS202-->
<section class="favlecture" id="favlecture">
<h1 class="heading"> Favorite <span> CS 202 Lecture </span> </h1>
<div class="box-container">
    <h1 class="firsttitle"> ASYNCHRONOUS & SYNCHRONOUS COMPUTATION</h1> <br> <br> <br>
    <p class="secondtitle"> Asynchronous vs Synchronous Programming</p> <br> <br>
    <p class="topicdescription"> In programming, synchronous operations
        block instructions until the task is
        completed, while asynchronous operations
        can execute without blocking other
        operations. <br> <br>
        
        Asynchronous operations are generally
        completed by firing an event or by calling
        a provided callback function. <br> <br> </p>
    <img class="imgtopic"src="https://i0.wp.com/www.differencebetween.com/wp-content/uploads/2018/05/Difference-Between-Synchronous-and-Asynchronous-Transmission-Comparison-Summary.jpg?resize=499%2C371&ssl=1" alt="">
    
</div>

    
<!--AUTHOR FROM 6 YEARS NOW-->
</section>
<section class="years" id="years">

<h1 class="heading"> Myself <span> in 6 years </span> </h1>

<div class="image-container">

    <div class="image">
        <img class="image__img" src="https://www.txstate.edu/cached71544c81d0845ddb42ab95420a50bf5/imagehandler/scaler/gato-docs.its.txstate.edu/jcr:d26a68bd-e861-485b-ac2d-73a6ab886981/full-stack-developer-ges375.jpg?mode=fit&width=1400" alt="">
        <div class="image__overlay image__overlay--primary">
            <div class="image__title">Game Developer & Designer</div>
            <p class="image__description">
                In six years, I will be working in the gaming industry as a game developer.
            </p>
        </div>
    </div>

    <div class="image">
        <img class="image__img" src="https://jacobmmurdock.files.wordpress.com/2013/01/couple-picture.jpg" alt="">
        <div class="image__overlay image__overlay--primary">
            <div class="image__title">Having a Lover</div>
            <p class="image__description">
                In 6 years, I will have a lover and live a happy life.
            </p>
        </div>
    </div>

    <div class="image">
        <img class="image__img" src="https://www.camella.com.ph/wp-content/uploads/2021/07/image.png"  alt="">
        <div class="image__overlay image__overlay--primary">
            <div class="image__title">Having a House & Car with my Fam</div>
            <p class="image__description">
                I've had my own house and car for 6 years.
            </p>
        </div>
    </div>

    <div class="image">
        <img class="image__img" src="https://www.commonwealthfund.org/sites/default/files/styles/countries_hero_desktop/public/country_image_Japan.jpg?h=fcdfd899&itok=bPWz69YA"  alt="">
        <div class="image__overlay image__overlay--primary">
            <div class="image__title">Traveling to Japan</div>
            <p class="image__description">
                Japan is one of my dream destinations, so I plan to visit there in six years.
            </p>
        </div>
    </div>
</div>


<!--AUTHOR CONTACT INFO-->
</section>
<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3 class="gmail"> <i class="fas fa-envelope"></i> algemgarolacan@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> 09684055743 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Philippines </h3>
        </div>

    </div>

    <form action="">

        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>
</section>



</body>

<style class="stylesheet">
    :root{
    --yellow:#f9ca24;
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}

*::selection{
    background:var(--yellow);
    color:#333;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

html::-webkit-scrollbar{
    width:1.4rem;
}

html::-webkit-scrollbar-track{
    background:#222;
}

html::-webkit-scrollbar-thumb{
    background:var(--yellow);
}

body{
    background:#111;
    overflow-x: hidden;
    padding-left: 35rem;
}

section{
    min-height: 100vh;
    padding:1rem;
}

.btn{
    padding:.7rem 3rem;
    background:#333;
    color:#fff;
    cursor: pointer;
    margin-top: 1rem;
    font-size: 2rem;
    border-radius: 5rem;
}

.btn i{
    padding:0 .5rem;
    font-size: 1.8rem;
}

.btn:hover{
    background:var(--yellow);
}

.heading{
    text-align: center;
    margin:0 6rem;
    font-size: 4rem;
    padding:1rem;
    border-bottom: .1rem solid #fff4;
    color:#fff;
}

.heading span{
    color:var(--yellow);
}

header{
    position: fixed;
    top:0; left:0;
    z-index: 1000;
    height:100%;
    width:35rem;
    background:#1a1a1a;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    text-align: center;
}

header .user .name{
    font-size: 3.5rem;
    color:var(--yellow);
}

header .user .post{
    font-size: 2rem;
    color:#eee;
}

header .navbar{
    width:100%;
}

header .navbar ul{
    list-style: none;
    padding:1rem 3rem;
}


header .navbar ul li a{
    display: block;
    padding:1rem;
    margin:1.5rem 0;
    background:#333;
    color:#fff;
    font-size: 2rem;
    border-radius: 5rem;
}

header .navbar ul li a:hover{
    background:var(--yellow);
}

#menu{
    position: fixed;
    top:2rem; right:2rem;
    background:#333;
    color:#fff;
    cursor: pointer;
    font-size: 2.5rem;
    padding:1rem 1.5rem;
    z-index: 1000;
    display: none;
}

/* HOME */
.home{
    display: flex;
    justify-content: center;
    flex-flow: column;
    padding:0 15rem;
}

.home h3{
    font-size: 2.5rem;
    color:#fff;
}

.home h1{
    font-size:5rem;
    color:#fff;
}

.home h1 span{
    color:var(--yellow);
}

.home p{
    font-size:2rem;
    color:#eee;
    padding: 1rem 0;
}


/* ABOUT THE AUTHOR */
.about .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:1rem 0;
}

.about .row .info{
    flex:1 1 48rem;
    padding:2rem 1rem;
    padding-left: 6rem;
}

.about .row .info h3{
    font-size: 2rem;
    color:var(--yellow);
    padding:1rem 0;
    font-weight: normal;
}

.about .row .info h3 span{
    color:#eee;
    padding:0 .5rem;
}

.about .row{
    flex:1 1 48rem;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.about .row .box{
    width:20rem;
    background:#222;
    text-align: center;
    padding: 2rem;
    margin:2rem;
}

.about .row .box span{
    font-size: 4rem;
    color:var(--yellow);
}

.about .row .box h3{
    font-size: 2rem;
    color:#fff;
}


/* LARAVEL */
.laraveltopic .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
}

.laraveltopic .box-container .titletopic{
    text-align: center;
    margin-top: 2ch;
    color:var(--yellow);
    font-size: 1cm;
    padding-bottom: 5px;
}

.laraveltopic .box-container .box{
    height: 20rem;
    width: 26rem;
    border-radius: 1rem;
    margin: 2rem;
    overflow: hidden;
    cursor: pointer;
}

.laraveltopic .box-container .imglaravel{
    height: 100%;
    width: 80%;
    object-fit: cover;
}

.laraveldescription{
    margin-top: 5%;
    margin-left: 10%;
    margin-right: 10%;
    font-size: large;
    color: #eee;
    
}

/* LECTURE CS202 */
.favlecture .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
}

.favlecture .box-container .firsttitle{
    text-align: center;
    margin-top: 2ch;
    color:var(--yellow);
    font-size: 1cm;
    padding-bottom: 5px;
}

.favlecture .box-container .secondtitle{
    text-align: center;
    margin-top: 3ch;
    color:white;
    font-size: 1cm;
    padding-bottom: 5px;
}

.favlecture .box-container .topicdescription{
    margin-left: 10%;
    margin-right: 10%;
    margin-top: 5ch;
    color:white;
    font-size: 0.5cm;
    padding-bottom: 5px;
}

.favlecture .box-container .imgtopic{
    height: 70%;
    width: 50%;
    object-fit: cover;
    margin-bottom: 10%;
}




/* AUTHOR 6 YEARS FROM NOW */
.years .image-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 5rem 0;
}

.years .image-container .image{
    height: 20rem;
    width: 26rem;
    border-radius: 1rem;
    margin: 2rem;
    overflow: hidden;
    cursor: pointer;
}

.years .image-container h1{
    text-align: center;
    color: var(--yellow);
    padding-bottom: 5px;
}

.years .image-container .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    
}

.years .image-container .image:hover img{
    transform: scale(1.2);
}

.image {
    position: relative;
    width: 400px;
}

.image__img {
    display: block;
    width: 100%;
}

.image__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    color: #ffffff;
    font-family: 'Quicksand', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.25s;
}

.image__overlay--blur {
    backdrop-filter: blur(5px);
}

.image__overlay--primary {
    background: #333;
}

.image__overlay {
    transform: translateY(20px);
    transition: transform 0.25s;
}

.image__overlay:hover {
    opacity: 1;
}

.image__overlay:hover {
    transform: translateY(0);
}

.image__title {
    font-size: 2em;
    font-weight: bold;
    text-align: center;
    padding-left: 5ch;
    padding-right: 5ch;
}

.image__description {
    font-size: 1.25em;
    margin-top: 1em;
    text-align: center;
    padding-left: 5ch;
    padding-right: 5ch;
}


/* AUTHOR CONTACT INFO */
.contact .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.contact .row .content{
    flex:1 1 30rem;
    padding:4rem;
    padding-bottom: 0;
}

.contact .row form{
    flex:1 1 45rem;
    padding:2rem;
    margin:2rem;
    margin-bottom: 4rem;
}

.contact .row form .box{
    padding:1.5rem;
    margin:1rem 0;
    background:#3333;
    color:#fff;
    text-transform: none;
    font-size: 1.7rem;
    width:100%;
}

.contact .row form .box::placeholder{
    text-transform: capitalize;
}

.contact .row form .message{
    height: 15rem;
    resize: none;
}

.gmail{
    text-transform: lowercase;
}

.contact .row .content .title{
    text-transform: uppercase;
    color:#fff;
    font-size: 3rem;
    padding-bottom: 2rem;
}

.contact .row .content .info h3{
    display: flex;
    align-items: center;
    font-size: 2rem;
    color:#eee;
    padding:1rem 0;
    font-weight: normal;
}

.contact .row .content .info h3 i{
    padding-right: 1rem;
    color:var(--yellow);

}

.top{
    position: fixed;
    bottom:7.5rem; right: 2rem;
    z-index: 100;
    display: none;
}






/* QUERIES  */

@media (max-width:1200px){

    html{
        font-size: 55%;
    }

    .home{
        padding:1rem 4rem;
    }

}

@media (max-width:991px){

   header{
       left:-120%;
   }

   #menu{
       display: block;
   }

   header.toggle{
    left:0%;
   }

   body{
       padding:0;
   }

}

@media (max-width:768px){

    html{
        font-size: 50%;
    }
 
 }

@media (max-width:400px){

    header{
        width: 100vw;
    }

    .heading{
        margin:0 3rem;
    }

    .home .row .box{
        width: 100%;
    }

    .about .row .box{
        width: 100%;
    }
 
    .favlecture .box-container .box{
        width:100%;
    }

    .laraveltopic .box-container .box{
        width:100%;
    }

    .years .box-container .box{
        width:100%;
    }

    .contact .row form{
        margin:3rem 0;
    }

 }
</style>
</html>

@stop
