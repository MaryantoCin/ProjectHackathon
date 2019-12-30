<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/home/style.css')}}">
    <link rel="icon" href="{{asset('asset/home/hackathon.png')}}">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="sidebar-container">
            <a class="logo" href="index.html">
                <img src="{{asset('asset/home/hackathon.png')}}" alt="logo">
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
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </a>
                </li>
            </ul>
            <div class="timeline-dashboard">
                <h3>
                    TIMELINE
                </h3>
                <h4>
                    Payment Deadline : 09 June 2020
                </h4>
                <h4>
                    Technical Meeting : 10 June 2020
                </h4>
                <h4>
                    Hackathon : 26-28 June 2020
                </h4>
            </div>
            <div class="copyright-container">
                &copy;2019 by Bina Nusantara Computer Club
            </div>
        </div>
        <div class="content-container">
            <h1 id="namatim">TEAM PAVAROTTI</h1> <br>
            <div class="member">
                <h2 id="member">Leader</h2>
                <div class="leader">
                    <div class="biodata">
                        <div class="line-data">
                            <div class="name-data">Name</div>
                            <div class="content-data">
                                <div class="subcontent-data">Carissa Christie</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Address</div>
                            <div class="content-data">
                                <div class="subcontent-data">Jln. Kebon Jeruk No. 12</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Birth Place/Date</div>
                            <div class="content-data">
                                <div class="subcontent-data">Makassar, 11 Mei 2001</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Email</div>
                            <div class="content-data">
                                <div class="subcontent-data">carissachristie@gmail.com</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">WhatsApp Number</div>
                            <div class="content-data">
                                <div class="subcontent-data">081234567890</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Line ID</div>
                            <div class="content-data">
                                <div class="subcontent-data">carissachristie12</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">GitHub ID</div>
                            <div class="content-data">
                                <div class="subcontent-data">carisschristie</div>
                            </div>
                        </div>
                    </div>
                    <div class="cv">
                        <h5 id="drop">Drop your CV here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/home/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file">
                        </div>
                        <p id="drop2">You have uploaded your CV, last updated at: <br>
                            2020-05-11 11:05:01. Check it <i id="hyperlink">here</i></p> <br>
                        <h5 id="drop">Upload your project here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/home/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file">
                        </div>
                        <p id="drop2">You have uploaded your project, last updated at: <br>
                            2020-05-11 11:05:01. Check it <i id="hyperlink">here</i></p>
                        <div class="submitdata">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div> <br>
            <div class="member">
                <h2 id="member">Member</h2>
                <div class="leader">
                    <div class="biodata">
                        <div class="line-data">
                            <div class="name-data">Name</div>
                            <div class="content-data">
                                <div class="subcontent-data">Carissa Christie</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Address</div>
                            <div class="content-data">
                                <div class="subcontent-data">Jln. Kebon Jeruk No. 12</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Birth Place/Date</div>
                            <div class="content-data">
                                <div class="subcontent-data">Makassar, 11 Mei 2001</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Email</div>
                            <div class="content-data">
                                <div class="subcontent-data">carissachristie@gmail.com</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">WhatsApp Number</div>
                            <div class="content-data">
                                <div class="subcontent-data">081234567890</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Line ID</div>
                            <div class="content-data">
                                <div class="subcontent-data">carissachristie12</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">GitHub ID</div>
                            <div class="content-data">
                                <div class="subcontent-data">carisschristie</div>
                            </div>
                        </div>
                    </div>
                    <div class="cv">
                        <h5 id="drop">Drop your CV here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/home/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file">
                        </div>
                        <p id="drop2">You have uploaded your CV, last updated at: <br>
                            2020-05-11 11:05:01. Check it <i id="hyperlink">here</i></p> <br>
                        <h5 id="drop">Upload your project here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/home/Icon-099.png')}}g" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file">
                        </div>
                        <p id="drop2">You have uploaded your project, last updated at: <br>
                            2020-05-11 11:05:01. Check it <i id="hyperlink">here</i></p>
                        <div class="submitdata">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div> <br>
            <div class="member">
                <h2 id="member">Member</h2>
                <div class="leader">
                    <div class="biodata">
                        <div class="line-data">
                            <div class="name-data">Name</div>
                            <div class="content-data">
                                <div class="subcontent-data">Carissa Christie</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Address</div>
                            <div class="content-data">
                                <div class="subcontent-data">Jln. Kebon Jeruk No. 12</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Birth Place/Date</div>
                            <div class="content-data">
                                <div class="subcontent-data">Makassar, 11 Mei 2001</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Email</div>
                            <div class="content-data">
                                <div class="subcontent-data">carissachristie@gmail.com</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">WhatsApp Number</div>
                            <div class="content-data">
                                <div class="subcontent-data">081234567890</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Line ID</div>
                            <div class="content-data">
                                <div class="subcontent-data">carissachristie12</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">GitHub ID</div>
                            <div class="content-data">
                                <div class="subcontent-data">carisschristie</div>
                            </div>
                        </div>
                    </div>
                    <div class="cv">
                        <h5 id="drop">Drop your CV here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/home/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file">
                        </div>
                        <p id="drop2">You have uploaded your CV, last updated at: <br>
                            2020-05-11 11:05:01. Check it <i id="hyperlink">here</i></p> <br>
                        <h5 id="drop">Upload your project here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/home/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file">
                        </div>
                        <p id="drop2">You have uploaded your project, last updated at: <br>
                            2020-05-11 11:05:01. Check it <i id="hyperlink">here</i></p>
                        <div class="submitdata">
                            <button>Submit</button>
                        </div>
                    </div>
                </div>
            </div> <br>
            <div class="button-edit">
                <button>Edit Group</button>
            </div>
            <div class="contact">
                
            </div>
            <div class="line-payment">
                <h5 id="payment2">Upload Payment Receipt</h5>
                <div class="uploadpayment">
                    <label for="file-input">
                    <img src="{{asset('asset/home/Icon-10.png')}}" alt="" width="70px" height="70px" class="iconpayment"></label>
                    <input id="file-input" type="file">
                </div>
            </div>
        </div>
    </div>
</body>
</html>