<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Muli|Quicksand&display=swap">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Cookie|Fredoka+One|Indie+Flower|Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
  <link rel="stylesheet" href="{{asset('asset/welcome/style.css')}}">
  <link rel="icon" href="{{asset('asset/welcome/hackathon.png')}}">
  <title>BNCC Hackathon 3.0</title>
</head>
<body style="overflow: hidden;">
  <div class="loading" id="loading">
    <div class="loading-icon"></div>
  </div>

  <header class="header">
    <div class="wrapper">
      <div class="menu-hamburger" id="burger">☰</div>
      <a href="/" class="main-logo">
        <img src="{{asset('asset/welcome/hackathon.png')}}" alt="logo">
      </a>
      <ul class="nav" id="nav">
        <li class="nav-item active">
          <a href="#">Home</a>
        </li>
        <li class="nav-item">
          <a href="#aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a href="#sponsors">Sponsors</a>
        </li>
        <li class="nav-item">
          <a href="#mp">Media Partners</a>
        </li>
        <li class="nav-item">
          <a href="#faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a href="#contactus">Contact Us</a>
        </li>
      </ul>
    </div>
  </header>
  
  <div class="intro-section">
    <div class="wrapper">

      <div class="intro-desc">
        <h1>BNCC HACKATHON 3.0</h1>
        <h2>"Code Your Idea, Discover Your Future"</h2>
        <h3>26 - 28 June 2020</h3>
        <div class="countdown">
          <div class="countdown-frame">
            <span id="days">-</span>
            DAYS
          </div>
          <div class="countdown-frame">
            <span id="hours">-</span>HOURS
          </div>
          <div class="countdown-frame">
            <span id="minutes">-</span>
            MINUTES
          </div>
          <div class="countdown-frame">
            <span id="seconds">-</span>
            SECONDS
          </div>
        </div>
        <a href="#" id="register-modal-trigger" class="intro-cta">Register</a>
        <a href="#" id="login-modal-trigger" class="intro-cta">Login</a>
      </div>

      <div class="intro-illustration">
        <a class="intro-icon" href="/">
          <img src="{{asset('asset/welcome/hackathon.png')}}" alt="intro illustration" class="intro-logo">
        </a>
        <div class="intro-buttons">
          <a href="#timeline" class="intro-button">
            <img src="{{asset('asset/welcome/clock.png')}}" alt="clock">
          </a>
          <a href="#rules" class="intro-button">
            <img src="{{asset('asset/welcome/rules.png')}}" alt="rules">
          </a>
          <a href="#location" class="intro-button">
            <img src="{{asset('asset/welcome/loc.png')}}" alt="location">
          </a>
        </div>
      </div>

    </div>
  </div>

  <div class="modal modal-overflow" id="register-modal">
    <div class="modal-wrapper">
      <div class="modal-close"></div>
      <div class="modal-title">Register</div>
      <div class="modal-title">TEAM</div>
      <form method="POST" action="{{ route('register') }}">
       @csrf
       <label>Name</label>
       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder ="Group Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Group Email" name="email" value="{{ old('email') }}" required autocomplete="email">
       @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
       @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required autocomplete="new-password">
       <button type="submit" class="form-button">
                                    {{ __('Register') }}
                                </button>
      </form>
      <!-- <form action="">
        <input type="text" class="input-text" placeholder="Group Name">
        <input type="password" class="input-text" placeholder="Password">
        <input type="password" class="input-text" placeholder="Repeat Password">
      </form> -->
      <!-- <div class="modal-title">LEADER</div>
      <form action="">
        <input type="text" class="input-text" placeholder="Full Name">
        <input type="text" class="input-text" placeholder="Address">
        <input type="text" class="input-text" placeholder="Birth Place/Date">
        <input type="text" class="input-text" placeholder="Email">
        <input type="text" class="input-text" placeholder="Whatsapp Number">
        <input type="text" class="input-text" placeholder="Line ID">
        <input type="text" class="input-text" placeholder="GitHub ID">
        <input type="file" id="file">
        <label for="file" class="input-text">
          Upload CV
          <i class="fas fa-file-upload"></i>
        </label>
        <input type="file" id="file">
        <label for="file" class="input-text">
          Upload Project
          <i class="fas fa-file-upload"></i>
        </label>
      </form>
      <div class="modal-title">MEMBER 1</div>
      <form action="">
        <input type="text" class="input-text" placeholder="Full Name">
        <input type="text" class="input-text" placeholder="Address">
        <input type="text" class="input-text" placeholder="Birth Place/Date">
        <input type="text" class="input-text" placeholder="Email">
        <input type="text" class="input-text" placeholder="Whatsapp Number">
        <input type="text" class="input-text" placeholder="Line ID">
        <input type="text" class="input-text" placeholder="GitHub ID">
        <input type="file" id="file">
        <label for="file" class="input-text">
          Upload CV
          <i class="fas fa-file-upload"></i>
        </label>
        <input type="file" id="file">
        <label for="file" class="input-text">
          Upload Project
          <i class="fas fa-file-upload"></i>
        </label>
      </form>
      <div class="modal-title">MEMBER 2</div>
      <form action="">
        <input type="text" class="input-text" placeholder="Full Name">
        <input type="text" class="input-text" placeholder="Address">
        <input type="text" class="input-text" placeholder="Birth Place/Date">
        <input type="text" class="input-text" placeholder="Email">
        <input type="text" class="input-text" placeholder="Whatsapp Number">
        <input type="text" class="input-text" placeholder="Line ID">
        <input type="text" class="input-text" placeholder="GitHub ID">
        <input type="file" id="file">
        <label for="file" class="input-text">
          Upload CV
          <i class="fas fa-file-upload"></i>
        </label>
        <input type="file" id="file">
        <label for="file" class="input-text">
          Upload Project
          <i class="fas fa-file-upload"></i>
        </label>
        <button class="form-button" type="submit">Register</button>
      </form> -->
    </div>
  </div>
  
  <div class="modal" id="login-modal">
    <div class="modal-wrapper">
      <div class="modal-close"></div>
      <div class="modal-title">Login</div>
      <form method="POST" action="{{ route('login') }}">
      @csrf
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your Password" name="password" required autocomplete="current-password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
        <button type="submit" class="form-button">
                                    {{ __('Login') }}
                                </button>
      </form>
      <!-- <form action="">
        <div class="form-error">Error! Please try again!</div>
        <input type="text" class="input-text" placeholder="Group Name">
        <input type="password" class="input-text" placeholder="Password">
        <button class="form-button" type="submit">Login</button>
      </form> -->
    </div>
  </div>

  <!-- ABOUT US -->

  <div class="about-us-wrapper">
    <div class="wrapper">
      <div class="about-us" id="aboutus">
        <h1>ABOUT US</h1>
        <img src="{{asset('asset/welcome/about-us.png')}}" alt="About us illustration">
        <a class="know-more-button" href="#why">Why should you join us?</a>
      </div>
      <div class="about-us-carousel">
        <img src="{{asset('asset/welcome/carousel-1.jpeg')}}" alt="Carousel page 1">
        <img src="{{asset('asset/welcome/carousel-2.jpeg')}}" alt="Carousel page 2">
      </div>
    </div>
  </div>

  <!-- WHY SHOULD YOU JOIN -->
  <div class="why-container" id="why">
  <div class="why">
    <div class="why1">
    <h1>WHY SHOULD YOU JOIN?</h1>
  </div>
      <div class="wrapper">
      <img class="img-why" src="{{asset('asset/welcome/networkingg.png')}}" alt="">
    <div class="tulisan-why">
      <h3>Networking</h3>
      <p>Peserta akan mendapatkan koneksi dari sesama peserta, mentor, hingga juri dari BNCC Hackathon 2.0</p>
    </div>
  </div>
  </div>
  <div class="why">
    <div class="wrapper">
    <div class="tulisan-why">
      <h3>Mentoring from Experts</h3>
      <p>Kesempatan mentoring langsung tentang teknologi, design, hingga bisnis dengan experts dari perusahaan</p>
    </div>
    <img class="img-why" src="{{asset('asset/welcome/mentoringg.png')}}" alt="">
  </div>
</div>
  <div class="why">
  <div class="wrapper">
  <img class="img-why" src="{{asset('asset/welcome/intervieww.png')}}" alt="">
  <div class="tulisan-why">
  <h3>Chance of Job Interview</h3>
  <p>CV dari pemenang dan peserta hackathon akan disalurkan langsung ke perusahaan sponsor BNCC Hackathon 2.0</p>
</div><div></div>
</div>
</div>
</div>

<!-- TIMELINE -->

<div class="timeline-bg">
<div class="timeline" id="timeline">
  <div class="timeline-title">
  </div>
  <div class="timeline-container left">
      <div class="timeline-content">
          <h2>01 June 2020</h2>
          <p>Opening Registration</p>
      </div>
  </div>
  
  <div class="timeline-container right">
      <div class="timeline-content">
          <h2>08 June 2019</h2>
          <p>Closing Registration</p>
      </div>
  </div>
  
  <div class="timeline-container left">
      <div class="timeline-content">
          <h2>10 June 2019</h2>
          <p>Technical Meeting</p>
      </div>
  </div>
  
  <div class="timeline-container right">
      <div class="timeline-content">
          <h2>26-28 June 2020</h2>
          <p>Hackathon Competition</p>
      </div>
  </div>
  
  </div>

</div>

<!-- RULES -->

<div class="rules1" id="rules">
<div class="rules">
  <img src="{{asset('asset/welcome/rules-40.png')}}" alt="">
  <div class="box-rules">
  <div class="text">
    <div class="title-rules">
      <h1>GENERAL RULES</h1>
    </div>
    <div class="peraturan">
    <p>
    1. Setiap tim wajib terdiri dari 3 orang.
  </div>
    <br>
    <div class="peraturan">
    <p>
    2. Batas usia peserta adalah 18-24 tahun.
  </p>
</div>
    <br>
    <div class="peraturan">
    3. Setiap peserta wajib berkewarganegaraan Indonesia.
  </div>
    <br>
    <div class="peraturan">
    4. Setiap tim wajib melakukan registrasi dan membayar uang pendaftaran sejumlah Rp 200.000,00.
  </div>
    <br>
    <div class="peraturan">
    5. Apabila tim yang mendaftar melebihi kapasitas, maka uang pendaftaran yang sudah dibayar akan dikembalikan.
    </div>
  </div>
</div>
</div>
</div>

<!-- SPONSORS -->

<div class="sponsors-container" id="sponsors">
  <div class="wrapper">
    <div class="platinum">
    <h1>THANK YOU FOR YOUR SUPPORT!</h1>
    <h2>Platinum</h2>
    <div class="sponsors-imgs">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
    </div>
    </div>
    <div class="gold">
    <h2>Gold</h2>
    <div class="sponsors-imgs">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
    </div>
  </div>
    <div class="silver">
    <h2>Silver</h2>
    <div class="sponsors-imgs">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/sponsors.jpg')}}" alt="">
  </div>
</div>
  </div>
</div>

<!-- MEDIA PARTNERS -->

<div class="mediapartner-container" id="mp">
  <div class="wrapper">
    <div class="mediapartner-bg">
    <div class="mediapartner">
    <h2>Media Partners</h2>
    <div class="sponsors-imgs">
      <img src="{{asset('asset/welcome/media.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/media.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/media.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/media.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/media.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/media.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/media.jpg')}}" alt="">
      <img src="{{asset('asset/welcome/media.jpg')}}" alt="">
    </div>
    </div>
    </div>
  </div>
  </div>

<!-- LOCATION -->

<div class="location" id="location">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.4551138499432!2d106.78301300000001!3d-6.203538!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29720d62d8b976c5!2sBina%20Nusantara%20Computer%20Club!5e0!3m2!1sen!2sid!4v1577261693333!5m2!1sen!2sid" 
  width="100%" height="800" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>


<div class="faq-container" id="faq">
<div class="wrapper">
  <h2>Frequently Asked Questions</h2>

  <div class="accordion">
    <div class="accordion-item">
      <a>Apa itu Hackathon?</a>
      <div class="faq-content">
        <p>Hackathon adalah sebuah kompetisi pengembangan software dimana 1 tim terdiri dari 3 orang yang dapat berperan sebagai hacker, hustler, dan hipster. 
          Seluruh tim harus merancang solusi teknologi dalam bentuk program untuk memecahkan case yang diberikan dalam waktu yang singkat yaitu 24 jam.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Saya sudah melakukan registrasi, tetapi tidak menerima pemberitahuan atau notifikasi apapun. Apakah artinya saya sudah terdaftar sebagai peserta lomba?</a>
      <div class="faq-content">
        <p>Setelah melakukan registrasi, peserta akan mendapatkan email dari panitia. Jika tidak ada email masuk, silakan dicek di bagian lain seperti important, spam, promotion dsb. 
          Apabila masih tidak ada, harap menghubungi panitia melalui contact person.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Berapa batas maksimum tim yang terdaftar?</a>
      <div class="faq-content">
        <p>Jumlah tim BNCC Hackathon 3.0 dibatasi sebanyak 25-30 tim.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Apakah saya wajib untuk menginap untuk mengikuti BNCC Hackathon 3.0?</a>
      <div class="faq-content">
        <p>Ya, peserta wajib untuk menginap.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Apa saja yang disediakan oleh panitia di BNCC Hackathon 3.0?</a>
      <div class="faq-content">
        <p>Panitia akan menyediakan wifi, port untuk charging, proyektor beserta mic dan speaker untuk presentasi, meja, dan kursi. Untuk internet, para peserta sangat disarankan untuk membawa internet portable pribadi untuk menghindari hal-hal yang tidak diinginkan.</p>
      </div>
      <div class="accordion-item">
        <a>Apakah karya yang sebelumnya pernah dilombakan boleh dilombakan lagi di lomba ini?</a>
        <div class="faq-content">
          <p>Tidak boleh, dikarenakan BNCC Hackathon ingin mencari ide-ide kreatif dan orisinil dalam perlombaan ini. Hasil dari hackathon ini akan menjadi hak milik BNCC dan sponsor event BNCC Hackathon</p>
        </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- CONTACT US -->

<div class="contactus" id="contactus">
<div class="contact-us">
  <div class="title">
    <h1>FEEL FREE TO CONTACT US!</h1>
  </div>
  <form action="{{url('message')}}" method="POST">
  @csrf
  <div class="contact-form">
    <div class="contact-form-items">
      <input type="text" class="input" placeholder="Name" name="name" required>
      <i class="fas fa-user"></i>
    </div>
    <div class="contact-form-items">
      <input type="text" class="input" placeholder="Email" name="email" required>
      <i class="fas fa-envelope"></i>
    </div>
    <div class="contact-form-items">
      <input type="text" class="input" placeholder="Subject" name="subject" required>
      <i class="fas fa-file"></i>
    </div>
    <div class="contact-form-items">
      <textarea class="input message" cols="30" rows="10" placeholder="Message....." name="message" required></textarea>
    </div>
  </div>
  <button class="btn" type="submit">
  <div class="btn">
    SUBMIT
    <i class="fas fa-arrow-right"></i>
  </div>
  </button>
  </form>

  <div class="social-icons">
    <div class="facebook">
      <a href="https://www.facebook.com/bina.nusantara.computer.club" class="facebook">
      <i class="fab fa-facebook-f"></i>
    </a>
    </div>
    <div class="line">
      <a href="http://line.me/ti/p/~@joy0117j" class="line">
      <i class="fab fa-line"></i>
      </a>
    </div>
    <div class="instagram">
    <a href="https://www.instagram.com/technoeventbncc" class="instagram">
      <i class="fab fa-instagram"></i>
    </a>
  </div>
    <div class="email">
      <a href="mailto:technoevent@bncc.net" class="email">
      <i class="fas fa-envelope"></i>
    </a>
    </div>
  </div>
</div>

  <div class="contactus-img">
    <img src="{{asset('asset/welcome/contact.png')}}" alt="">
  </div>
  
</div>

<!-- FOOTER -->

<div class="footer ">
  <div class="text-footer">
     <h1> Powered by Binus University || &copy;2019 by Bina Nusantara Computer Club</h1>
  </div>
</div>


  <script type="text/javascript" src="{{asset('asset/welcome/main.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Atas adalah untuk FAQ -->

</body>
</html>
