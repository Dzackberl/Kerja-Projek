<?php 
include("process_comment.php");
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portofolio Website</title>
    <link rel="stylesheet" href="style copy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <style>
        .error {
            color: red;
        }

        #notification {
            display: none;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body >
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><span>My Portofolio</span></a></div>
            <ul class="menu">
            <li><a href="#home" class="menu-btn nav-item">Home</a></li>
<li><a href="#about" class="menu-btn nav-item">About</a></li>
<li><a href="#services" class="menu-btn nav-item">My Portfolio</a></li>
<li><a href="#skills" class="menu-btn nav-item">Skills</a></li>
<li><a href="#contact" class="menu-btn nav-item">Contact</a></li>
<li><a href="#Feedback" class="menu-btn nav-item">Feedback</a></li>


            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <image src="jaki1.jpg"width="500" height="500"></image>
            <div class="home-content">
                <div class="text-1"></div>
                <div class="text-2"></div>
                <div class="text-3">Saya Adalah <span class="typing"></span></div>
                <div class="foto2">   
            </div>
        </div>
    </section>


<style>
    .foto2{
        margin-left: 40%;
        margin-top: 5%;
    }
</style>


    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="jaki1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Berikut Biodata Saya <span class="typing-2"></span></div>
                    <p>Saya Ahmad Dzaky Hermawan, saya lahir di Kabupaten Bekasi 10 Januari 2007, riwayat pendidikan sekolah saya,  saya lulusan SDN Kayuringin Jaya XIX(2013-2019), lalu saya berlanjut sekolah di SMPIT TIS(2019-2022), dan saya melanjutkan sekolah di SMK TELEKOMUNIKASI TELESANDI dengan jurusan RPL </p>
                </div>
            </div>
        </div>
<br><br>
    </section>

    <!-- my portofolio section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My portfolio</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box"  >
                    <img src="ft1.jpg" alt="" id="button1">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="ft2.jpg" alt="" id="button2">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="ft4.jpg" alt="" id="button3">
                    </div>
                </div>
               </div>
            </div>
        </div>


    <div class="containerImg">
        <img src="tebakangka1.jpg" alt="" srcset="">
    </div>


    <div class="containerImg2">
        <img src="pendaftaran1.jpg" alt="" srcset="">
    </div>

    <div class="containerImg3">
        <img src="kalkulator.jpg" alt="" srcset="">
    </div>
<br><br><br>

    </section>


    


    <!-- skills section start -->
    <section class="skills" id="skills" style="margin-bottom: 300px">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Skill dan pengalaman</div>
                    <p>Skill dan pengalaman Saya saat ini adalah Saya bersekolah di SMK Telekomunikasi Telesandi Bekasi, dan saya pernah tergabung dalam organisasi.</p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>65%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JAVASCRIPT</span>
                            <span>45%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title" style="padding-top:20px">Contact</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Yang berhubungan tentang saya.</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nama</div>
                                <div class="sub-title">Ahmad Dzaky Hermawan</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Alamat</div>
                                <div class="sub-title">Bekasi, Indonesia</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">ahmaddzaky@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Kontak</div>
                                <div class="sub-title">085923275193</div>
                            </div>
                        </div>
                        <div class="social-icons">
                        <a href="https://www.facebook.com/ahmad.dzaky.752861?mibextid=ZbWKwL"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="https://instagram.com/dzaky9294?igshid=OGQ5ZDc2ODk2ZA=="><i class='bx bxl-instagram-alt'></i></a>
                        <a href="https://www.tiktok.com/@ahmaddzacki?_t=8i0S3Vd1p7x&_r=1"><i class='bx bxl-tiktok'></i>
                        <a href="https://youtube.com/@ahmaddzakyhermawan9085?si=jKZPsarn9-BRMsf6"><i class='bx bxl-youtube'></i></a>
                    </div>
                    <a href="dzaky1.pdf" class="download-button" download>Download CV</a>
                </div>
            </div>
        </div>
        <br><br><br>
    </section>
    <!-- coment section start -->
    
    <section class="Feedback" id="Feedback">
    <br><br>
    <h2 class="title">Feedback</h2>
    <div class="contact-right">
        <form id="feedbackForm" action="process_comment.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" rows="4" required></textarea><br>

            <input type="submit" value="Submit Comment" onclick="submitForm()">
        </form>
    </div>
    
</section>



    </div>
    <!-- footer section start -->
    <footer>
        <span>Dibuat Oleh <a href="https://www.jakiportofolio.com">Ahmad Dzaky Hermawan</a>

    <script src="script2.js"></script>
    <script>
    // Jalankan fungsi sensor setelah halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
        var messages = document.querySelectorAll('#message');
        messages.forEach(function (message) {
            // Dapatkan teks pesan
            var teksPesan = message.innerHTML;
            
            // Sensor kata-kata kasar
            var teksSensor = sensorKataKasar(teksPesan);

            // Terapkan teks yang sudah disensor ke dalam elemen
            message.innerHTML = teksSensor;
        });
    });

    function sanitizeAndSubmit() {
        var commentInput = document.getElementById('comment');
        var comment = commentInput.value;
        var badWords = ["ajg","ancuk","anj","ancok","ajig","anjay","anjg","anjing","anying","anjir","asu","asyu","babangus","babi","bacol","bacot","bagong","bajingan","balegug","banci","bangke","bangsat","bedebah","bedegong","bego","belegug","beloon","bencong","bloon","blo'on","bodoh","boloho","buduk","budug","celeng","cibai","cibay","cocot","cocote","cok","cokil","colai","colay","coli","colmek","conge","congean","congek","congor","cuk","cukima","cukimai","cukimay","dancok","entot","entotan","ewe","ewean","gelo","genjik","germo","gigolo","goblo","goblog","goblok","hencet","henceut","heunceut","homo","idiot","itil","jancuk","jancok","jablay","jalang","jembut","jiancok","jilmek","jurig","kacung","kampang","kampret","kampungan","kehed","kenthu","kentot","kentu","keparat","kimak","kintil","kirik","kunyuk","kurap","konti","kontol","kopet","koplok","lacur","lebok","lonte","maho","meki","memek","monyet","ndas","ndasmu","ngehe","ngentot","nggateli","nyepong","ngewe","ngocok","pante","pantek","patek","pathek","peju","pejuh","pecun","pecundang","pelacur","pelakor","peler","pepek","puki","pukima","pukimae","pukimak","pukimay","sampah","sepong","sial","sialan","silit","sinting","sontoloyo","tai","taik","tempek","tempik","tete","tetek","tiembokne","titit","toket","tolol","ublag","udik","wingkeng"];
         // Ganti dengan daftar kata kasar yang ingin Anda filter

        for (var i = 0; i < badWords.length; i++) {
            var regex = new RegExp(badWords[i], 'gi');
            comment = comment.replace(regex, '***');
        }

        commentInput.value = comment;

        return true;
    }

    

    
    
    </script>
</body>
</html>