<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/payment/stylenotverified.css')}}">
    <link rel="icon" href="{{asset('asset/payment/hackathon.png')}}">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="sidebar-container">
            <a class="logo" href="index.html">
                <img src="{{asset('asset/payment/hackathon.png')}}" alt="logo">
            </a>
            <div class="welcome-container">
                <div class="welcome-text">Welcome,</div>
                <div class="welcome-name">xxx team</div>
            </div> <br>
            <ul class="menu">
                <li>
                    <a class="menu-item active" href="#">
                        <div class="menu-icon home"></div>
                        <div class="menu-text">Home</div>
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="#">
                        <div class="menu-icon payment"></div>
                        <div class="menu-text">Payment</div>
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="#">
                        <div class="menu-icon logout"></div>
                        <div class="menu-text">Logout</div>
                    </a>
                </li>
            </ul>
            <div class="copyright-container">
                &copy;2019 by Bina Nusantara Computer Club
            </div>
        </div>
        <div class="content-container">
            <h1 id="paymentmethod">PAYMENT METHOD</h1> <br>
            <div class="subpayment">
                <div class="method">
                    <h2 id="payment">Payment Method Instruction</h2> <br>
                    <p> 1. Pembayaran sebesar Rp200.000,00 per tim dilakukan secara transfer
                        ke rekening BCA 1234567898 a/n Carissa Christie. <br><br>
                        2. Setelah melakukan pembayaran, setiap tim wajib meng-<i>upload</i> bukti
                        pembayarannya di <i>dashboard</i> masing-masing. <br><br>
                        File bukti pembayaran di-<i>rename</i> dengan format berikut.
                        [nama tim]_BNCC Hackathon 3.0 <br>
                        Jenis file yang di-<i>upload</i> hanya .jpg, .jpeg, .png, atau .pdf dengan
                        ukuran maksimal 2 mb. <br><br>
                        3. Setelah di-<i>upload</i>, silakan menunggu beberapa hari untuk verifikasi
                        bukti pembayaran.
                    </p>
                </div>
                <div>
                    <div id="notverified">
                        <h3>You haven't done any payment!</h3>
                    </div>
                    <div id="infopayment">
                        <p>Please do payment before the deadline payment!<br>
                            See the deadline payment 
                            <a href="../../Home/index.html"><i id="hyperlink">here</i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>