<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/admin/style.css')}}">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="sidebar-container">
            <a class="logo" href="index.html">
                <img src="{{asset('asset/admin/hackathon.png')}}" alt="logo">
            </a>
            <div class="welcome-container">
                <div class="welcome-text">Welcome,</div>
                <div class="welcome-name">Admin EEO</div>
            </div> <br>
            <ul class="menu">
                <li>
                    <a class="menu-item active" href="#">
                        <div class="menu-icon home"></div>
                        <div class="menu-text">Home</div>
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
            <div class="copyright-container">
                &copy;2019 by Bina Nusantara Computer Club
            </div>
        </div>
        <div class="content-container">
            @foreach($datas as $data)
            <div class="member">
                <h1 id="namatim">{{$data->id}}</h1>
                <div class="leader">
                    <div class="biodata">
                        <h2 id="member">Leader</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->leaderName}}</div>
                            </div>
                        </div>
                        <h2 id="member">Member</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Name}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member2Name}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="cv">
                        <h3 id="payment-status">Payment Status</h3>
                        <img src="{{asset('asset/admin/Icon-13.png')}}" alt="" width="250px" height="250px" class="filecv">
                    </div>
                </div>
            </div> <br>
            @endforeach
            
        </div>
    </div>
</body>
</html>