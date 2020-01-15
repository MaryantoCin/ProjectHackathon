<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/edit/style.css')}}">
    <link rel="icon" href="{{asset('asset/edit/hackathon.png')}}">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="sidebar-container">
            <a class="logo" href="/">
                <img src="{{asset('asset/edit/hackathon.png')}}" alt="logo">
            </a>
            <div class="welcome-container">
                <div class="welcome-text">Welcome,</div>
                <div class="welcome-name">Team {{$username}}</div>
            </div> <br>
            <ul class="menu">
                <li>
                    <a class="menu-item" href="/home">
                        <div class="menu-icon home"></div>
                        <div class="menu-text">Home</div>
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="/payment">
                        <div class="menu-icon payment"></div>
                        <div class="menu-text">Payment</div>
                    </a>
                </li>
                <li>
                <a class="menu-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <div class="menu-icon logout"></div>
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
        <div>
        <form action="{{url('update/'.$datas->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        </div>
        <div class="content-container">
            <h1 id="namatim">TEAM {{$username}}</h1> <br>
            <div class="member">
                <h2 id="member">Leader</h2>
                <div class="leader">
                    <div class="biodata">
                        <div class="line-data">
                            <div class="name-data">Name</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="leaderName" value="{{$datas->leaderName}}" ></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Address</div>
                            <div class="content-data">
                               <div class="subcontent-data"><input type="text" class="editdata" name="leaderAddress" value="{{$datas->leaderAddress}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Birth Place/Date</div>
                            <div class="content-data">
                               <div class="subcontent-data"><input type="text" class="editdata" name="leaderBirth" value="{{$datas->leaderBirth}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Email</div>
                            <div class="content-data">
                                 <div class="subcontent-data"><input type="text" class="editdata" name="leaderEmail" value="{{$datas->leaderEmail}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">WhatsApp Number</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="leaderNumber" value="{{$datas->leaderNumber}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Line ID</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="leaderLine" value="{{$datas->leaderLine}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">GitHub ID</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="leaderGithub" value="{{$datas->leaderGithub}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cv">
                        <h5 id="drop">Drop your CV here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/edit/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file" name="leaderCV">
                        </div>
                        
                        <h5 id="drop">Upload your project here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/edit/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file" name="leaderProject">
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
                               <div class="subcontent-data"><input type="text" class="editdata" name="member1Name" value="{{$datas->member1Name}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Address</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member1Address" value="{{$datas->member1Address}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Birth Place/Date</div>
                            <div class="content-data">
                              <div class="subcontent-data"><input type="text" class="editdata" name="member1Birth" value="{{$datas->member1Birth}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Email</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member1Email" value="{{$datas->member1Email}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">WhatsApp Number</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member1Number" value="{{$datas->member1Number}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Line ID</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member1Line" value="{{$datas->member1Line}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">GitHub ID</div>
                            <div class="content-data">
                                 <div class="subcontent-data"><input type="text" class="editdata" name="member1Github" value="{{$datas->member1Github}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cv">
                        <h5 id="drop">Drop your CV here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/edit/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file" name="member1CV">
                    </div>
                        
                        <h5 id="drop">Upload your project here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/edit/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file" name="member1Project">
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
                                <div class="subcontent-data"><input type="text" class="editdata" name="member2Name" value="{{$datas->member2Name}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Address</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member2Address" value="{{$datas->member2Address}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Birth Place/Date</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member2Birth" value="{{$datas->member2Birth}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Email</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member2Email" value="{{$datas->member2Email}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">WhatsApp Number</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member2Number" value="{{$datas->member2Number}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">Line ID</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member2Line" value="{{$datas->member2Line}}"></div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="name-data">GitHub ID</div>
                            <div class="content-data">
                                <div class="subcontent-data"><input type="text" class="editdata" name="member2Github" value="{{$datas->member2Github}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cv">
                        <h5 id="drop">Drop your CV here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/edit/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file" name="member2CV">
                    </div>
                        
                        <h5 id="drop">Upload your project here</h5>
                        <div class="cv-line">
                            <label for="file-input">
                            <img src="{{asset('asset/edit/Icon-099.png')}}" alt="" width="150px" class="filecv"></label>
                            <input id="file-input" type="file" name="member2Project">
                        </div>
                    </div>
                </div>
            </div> <br>
            <div class="button-submit">
            <button type="submit">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>