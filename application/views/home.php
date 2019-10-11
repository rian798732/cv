<?php
    include("_partials/header.php");
?>
<body>
		
    <div class="fh5co-loader"></div>

    <div id="page">	
    <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(assets/images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" style="height: 100%;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t js-fullheight" style="height:100%!important;">
                        <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn" style="height: 985px!important;">
                            <div class="profile-thumb animated zoomInDown" style="background: url(<?= base_url("assets/images/biodata/") . $biografi['foto'] ?>); animation-delay: 0.9s;"></div>
                            
                            <h1 class="animated bounceInLeft" style="animation-delay: 1.2s;"><span><?php echo $biografi['nama_panggilan'] ?></span></h1>
                            <h3 class="animated bounceInRight" style="animation-delay: 1.3s;"><span><?php echo $biografi['pekerjaan'] ?></span></h3>
                            <p>
                                <ul class="fh5co-social-icons">
                                    <li class="animated bounceInRight" style="animation-delay: 1s;"><a href="#"><i class="icon-twitter2"></i></a></li>
                                    <li class="animated bounceInRight" style="animation-delay: 1.1s;"><a href="#"><i class="icon-facebook2"></i></a></li>
                                    <li class="animated bounceInRight" style="animation-delay: 1.2s;"><a href="#"><i class="icon-linkedin2"></i></a></li>
                                    <li class="animated bounceInRight" style="animation-delay: 1.2s;"><a href="https://www.instagram.com/rian798732/"><i class="icon-instagram2"></i></a></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-about" class="animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/images/sidebar-4.jpg" width="90%" style="height: 600px;">
                </div>
                <div class="col-md-7">
                    <h2>Hi Guys!</h2>
                    <p><?php echo $biografi['deskripsi'] ?></p>
                    <ul class="info">
                        <li><span class="first-block">Nama Lengkap</span><span class="second-block">:&nbsp;<?php echo $biografi['nama_lengkap'] ?></span></li>
                        <li><span class="first-block">Tempat, Tanggal Lahir</span><span class="second-block">:&nbsp;<?php echo $biografi['ttl'] ?></span></li>
                        <li><span class="first-block">Jenis Kelamin</span><span class="second-block">:&nbsp;<?php echo $biografi['jenis_kelamin'] ?></span></li>
                        <li><span class="first-block">Alamat</span><span class="second-block">:&nbsp;<?php echo $biografi['alamat'] ?></span></li>
                        <li><span class="first-block">No. Whatsapp</span><span class="second-block">:&nbsp;+6288992820089</span></li>
                        <li><span class="first-block">Email</span><span class="second-block">:&nbsp;zainulfebrian70@gmail.com</span></li>
                        <li><span class="first-block">Hobi</span><span class="second-block">:&nbsp;<?php echo $biografi['hobi'] ?></span></li>
                    </ul>
                    <ul class="fh5co-social-icons">
                        <li><a href="https://www.instagram.com/rian798732/"><i class="icon-instagram2"></i></a></li>
                        <li><a href="#"><i class="icon-facebook3"></i></a></li>
                        <li><a href="#"><i class="icon-github2"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-resume" class="fh5co-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="timeline">
                        <li class="timeline-heading text-center animate-box">
                            <div><h3>Pengalaman</h3></div>
                        </li>
                        <?php $i=0; foreach ($pengalaman as $data): 
                            if ($i/2 == 0){
                                $css ="unverted";
                            }else{
                                $css ="inverted";
                            }
                            ?>
                            <li class="animate-box timeline-<?= $css;?>">
                                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title"><?php echo $data->judul ?></h3>
                                        <span class="company"><?php echo $data->perusahaan . " | " . $data->tahun_mulai . "-" . $data->tahun_akhir ?></span>
                                    </div>
                                    <div class="timeline-body">
                                        <p><?php echo $data->deskripsi?></p>
                                    </div>
                                </div>
                            </li>
                        <?php $i++; endforeach; ?>

                        <br>
                        <li class="timeline-heading text-center animate-box">
                            <div><h3>Education</h3></div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Sekolah Dasar</h3>
                                    <span class="company">SDN MOJOLANGU 1 - 2008 - 2014</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Saya mulai bersekolah disini setelah saya lulus TK</p>
                                </div>
                            </div>
                        </li>
                        <li class="animate-box timeline-unverted">
                            <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Sekolah Menengah Pertama</h3>
                                    <span class="company">Mts. Hidayatul Mubtadi'in - 2014 - 2017</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Setelah saya lulus SD saya melanjutkan sekolah disini.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Sekolah Menengah Kejuruan</h3>
                                    <span class="company">SMK NEGERI 5 MALANG - 2017 - sekarang</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Di sekolah ini saya mulai mengenal yang namanya "NGODING". Disini saya mulai belajar code pada kelas 10 menggunakan bahasa c++ kemudian dilanjutkan belajar HTML dan CSS.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="fh5co-features" class="animate-box">
        <div class="container">
            <div class="services-padding">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>My Services</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="feature-left">
                            <span class="icon animated flip">
                                <i class="icon-paintbrush"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Design</h3>
                                <p>Saya bisa membuat Desain Website, Logo, Banner, Stiker, dll.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="feature-left">
                            <span class="icon">
                                <i class="icon-code"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Front End Developer</h3>
                                <p>Saya suka bermain dan mencoba HTML dan CSS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="feature-left">
                            <span class="icon">
                                <i class="icon-bargraph"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Back End Developer</h3>
                                <p>Terkadang saya juga mengerjakan back end.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-skills" class="animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>My Skills</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="progress-wrap">
                        <h3><span class="name-left">HTML</span><span class="value-right">95%</span></h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3><span class="name-left">Design</span><span class="value-right">92%</span></h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
                            aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width:92%">
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3><span class="name-left">CSS</span><span class="value-right">90%</span></h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3><span class="name-left">WordPress</span><span class="value-right">85%</span></h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress-wrap">
                        <h3><span class="name-left">PHP</span><span class="value-right">75%</span></h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3><span class="name-left">mySQL</span><span class="value-right">70%</span></h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3><span class="name-left">Javascript</span><span class="value-right">45%</span></h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                            </div>
                        </div>
                    </div>
                    <div class="progress-wrap">
                        <h3><span class="name-left">Java</span><span class="value-right">20%</span></h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-work" class="fh5co-bg-dark">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>My Work</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center col-padding animate-box">
                    <a href="http://wkacctest.000webhostapp.com" class="work" style="background-image: url(assets/images/work1.png);">
                        <div class="desc">
                            <h3>WKACC WEBSITE</h3>
                            <span>Website</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 text-center col-padding animate-box">
                    <a href="http://denpasarcineplex.com/" class="work" style="background-image: url(assets/images/work2.png);">
                        <div class="desc">
                            <h3>Denpasar Cineplex</h3>
                            <span>Website</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg" id="fh5co-consult" style="padding: 30px; background-image:url('assets/images/full-screen-image-3.jpg')">
        <div class="col-md-6">
            <div class="fh5co-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.64207982722!2d112.6313703146322!3d-7.9323989942860935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629efbe2f09fb%3A0xa6f644d3bded23f7!2sJl.%20Ikan%20Nus%20II%20No.32%2C%20Tunjungsekar%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065142!5e0!3m2!1sid!2sid!4v1568269666956!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="col-md-6" style="padding: 0">
            <div class="animate-box">
                <h2>Contact</h2>
                <form action="#">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" id="email" class="form-control" placeholder="Your email address">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>	
            </div>
        </div>
    </div>	

    <div id="fh5co-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2019 Zainul Febrian. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
    </div>



</body>    
<?php
    include("_partials/scripts.php");
?>