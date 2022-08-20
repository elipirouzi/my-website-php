<?php 

$name = $email = $mess = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $mess = $_POST['message'];

$myMail = 'info@elipiroozi.com';
$subjet = 'register';
$name .= ' = name <br>';
$email .= ' = email <hr>';
$name .= $email;
$name .= $mess;
mail($myMail, $subjet, $name);
echo '<script>alert("your mail is send...!")</script>';


}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elham Pirouzi | web designer</title>
    <link rel="shortcut icon" type="image/jpg" href="img/logo.png" sizes="32x32">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/normalize.css">
    <link rel="stylesheet" href="stylesheet/global.css">
    <link rel="stylesheet" href="stylesheet/local.css">
</head>

<body>
    <main class="container-fluid container-xxl">
        <div class="row col-12">
            <div class="menu col-lg-3 d-none d-lg-flex px-0 mx-0 position-fixed " style="height: 100vh; width: 300px;">
                <header class="row h-100 col-12 px-0 mx-0 bg-white">
                    <figure class="d-flex justify-content-center my-0 py-0">
                        <a class="d-flex justify-content-center" href="#">
                            <img class="d-flex justify-content-center" src="img/logo.png" alt="logo">
                        </a>
                    </figure>
                    <nav class="col-12 px-0 mx-0">
                        <ul class="px-0">
                            <li class=" mx-0"><a href="">home</a></li>
                            <li><a href="#about">about</a></li>
                            <li><a href="#skills">skills</a></li>
                            <li><a href="#projects">projects</a></li>
                            <li><a href="#contact">contact</a></li>
                            <div class="d-flex justify-content-center py-5">
                                <a href="https://www.instagram.com/eli.piroozi.web/" target="_blank"><i
                                        class="bi bi-instagram px-2 h5 text-secondary"></i></a>
                                <a href="https://github.com/elipirouzi?tab=repositories" target="_blank"><i
                                        class="bi bi-github px-2 h5 text-secondary"></i></a>
                                <a href="https://www.linkedin.com/in/elham-pirouzi-77b212231/recent-activity"
                                    target="_blank"><i class="bi bi-linkedin px-2 h5 text-secondary"></i></a>
                            </div>
                        </ul>
                    </nav>
                </header>
            </div>
            <!-- end menu -->
            <div class="d-lg-none position-fixed" style="z-index: 10;" id="hammenu">
                <header class="col-12">
                    <div class="row container-fluid container-xxl">
                        <figure class="col-3 d-flex justify-content-center">
                            <a href="#" class="d-flex h-100 w-auto">
                                <img class="h-100" src="img/logo.png" alt="logo">
                            </a>
                        </figure>
                        <nav class="mobilemenu d-lg-none col-9 d-flex justify-content-end align-items-center">
                            <span class="text-black">|||</span>
                        </nav>
                    </div>
                </header>
            </div>
            <!-- end hammenu -->
        </div>
        <div class="row">
            <div class="main col-12 w-100">
                <div class="row d-flex justify-content-center">
                    <figure class="col-12 col-md-5 col-lg-6">
                        <img src="img/mine.jpg" alt="my pic">
                    </figure>
                    <div class="row col-8 col-sm-7 col-md-7 col-lg-6">
                        <h5 class="col-11 col-lg-12 px-lg-0">welcome to my world!</h5>
                        <h1 class="col-12 col-lg-12 px-lg-0">Elham Pirouzi</h1>
                        <h4 class="col-12 col-lg-12 px-lg-0">i'm front-end developer... </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main -->
        <div class="row about py-5" id="about">
            <div class="pb-5">
                <h2 class="col-12">about me</h2>
                <p class="col-12">hi! i'm elham pirouzi, i'm junior front-end developer from tehran/iran. i'm 39
                    years old. i code
                    and create web elements for amazing people around the world.</p>
                <h3 class="my-4">Why I'm Different?</h3>
                <div class="row pb-5">
                    <div class="row py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-fingerprint col-2 col-md-1 h-90" viewBox="0 0 16 16">
                            <path
                                d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z" />
                            <path
                                d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115V7Zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z" />
                            <path
                                d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z" />
                            <path
                                d="M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z" />
                            <path
                                d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49Z" />
                        </svg>
                        <p class="col-8 h-100">i'm smart and unique</p>
                    </div>
                    <div class="row py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-person-workspace col-2 col-md-1 h-90" viewBox="0 0 16 16">
                            <path
                                d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            <path
                                d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                        </svg>
                        <p class="col-8 h-100">hard working</p>
                    </div>
                    <div class="row py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-megaphone col-2 col-md-1 h-90" viewBox="0 0 16 16">
                            <path
                                d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                        </svg>
                        <p class="col-8 h-100">easy to talk to</p>
                    </div>
                    <div class="row py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-display col-2 col-md-1 h-90" viewBox="0 0 16 16">
                            <path
                                d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                        </svg>
                        <p class="col-8 h-100">i love challenge</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->
        <div class="row skills py-4" id="skills">
            <div>
                <h2 class="col-12">my skills</h2>
                <div class="col-12 py-3">
                    <figure class="py-3"><img src="img/skills/html.png" alt="html"></figure>
                    <figure class="py-3"><img src="img/skills/css.png" alt="css"></figure>
                    <figure class="py-3"><img src="img/skills/sass.png" alt="sass"></figure>
                    <figure class="py-3"><img src="img/skills/bootstrap.png" alt="bootstrap"></figure>
                </div>
            </div>
        </div>
        <!-- end skills -->
        <div class="row projects" id="projects">
            <div class="container-fluid container-xxl py-5">
                <h2 class="col-12 py-4">my projects</h2>
                <div class="col-12 col-md-11 col-lg-10 pt-4">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-6">
                                    <figure class="row h-100">
                                        <img class="col-12 px-2 py-2" src="img/projects/3.gif" alt="pic1">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="row h-100">
                                        <img class="col-12 px-2 py-2 h-100" src="img/projects/1.jpg" alt="pic2">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-12">
                                <figure class="row h-100 my-0">
                                    <img class="col-12 h-100 px-2 py-2" src="img/projects/2.png" alt="pic3">
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <figure class="row h-100">
                                <img class="col-12 px-2 py-2 h-100" src="img/projects/4.jpg" alt="pic4">
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="row h-100 px-2 py-2">
                                <img class="col-12 px-0" src="img/projects/6.jpg" alt="pic5">
                            </figure>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="col-12">
                                <figure class="row h-100 my-0">
                                    <img class="col-12 px-2 py-2" src="img/projects/05.jpg" alt="pic6">
                                </figure>
                            </div>
                            <div class="col-12">
                                <figure class="row h-100 my-0">
                                    <img class="col-12 px-2 py-2 h-100" src="img/projects/8.gif" alt="pic7">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="row h-100">
                                <img class="col-12 px-2 py-2 h-100" src="img/projects/7.gif" alt="pic8">
                            </figure>
                        </div>
                        <div class="col-12 col-md-6">
                            <figure class="row my-0">
                                <img class="col-12 px-2 py-2" src="img/projects/009.jpg" alt="pic9">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end projects -->
        <div class="row contact py-5" id="contact">
            <div class="row">
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="col-12 col-md-6">
                    <h2 class="col-12 py-3">get in touch</h2>
                    <div class="col-12 py-3">
                        <a href="https://goo.gl/maps/bbuxQKm3bFVGb19TA" target="_blank"><i
                                class="bi bi-geo-alt"></i></a>
                        <a href="" alt="09124157860"><i class="bi bi-telephone px-4"></i></a>
                        <a href="info@elipiroozi.com" target="_blank"><i class="bi bi-envelope"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="pt-2">full name</label>
                            <input type="text" placeholder="Name" id="name" required class="col-12">

                            <label for="email" class="pt-3">email address</label>
                            <input type="email" placeholder="Enter Email" id="email" required class="col-12">

                            <label for="subject" class="pt-3">subject</label>
                            <input type="text" placeholder="subject" id="subject" class="col-12 ">

                            <label for="message" class="pt-3">message</label>
                            <textarea name="message" id="message" cols="40" rows="4" required class="col-12"></textarea>
                            <div class="col-12 d-flex justify-content-center">
                                <a href="" class="d-flex justify-content-center align-items-center btn">send message
                                    <span class="top"></span>
                                    <span class="right"></span>
                                    <span class="bottom"></span>
                                    <span class="left"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-12 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.5094160654628!2d51.357746858015645!3d35.72575537252137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e07dc685d4e2f%3A0x6b00310c962dbfd6!2z2KLZhdmI2LLYtNqv2KfZhyDZvtix2YbZitin2YY!5e0!3m2!1sen!2s!4v1660844475488!5m2!1sen!2s"
                        height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="col-12">
                    </iframe>
                </div>
            </div>
        </div>
        <!-- end contact -->
    </main>
</body>

</html>