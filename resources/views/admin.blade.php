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
                    <a class="menu-item" href="/message">
                        <div class="menu-icon messages"></div>
                        <div class="menu-text">Messages</div>
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
            @if ($data->id!=1)
            <div class="member">
                <h1 id="namatim">Team ID {{$data->id}}</h1>
                <div class="leader">
                    <div class="biodata">
                        <h2 id="member">Leader</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->leaderName}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->leaderAddress}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->leaderBirth}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->leaderEmail}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->leaderNumber}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->leaderLine}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->leaderGithub}}</div>
                            </div>
                        </div>
                        <h2 id="member">Member 1</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Name}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Address}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Birth}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Email}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Number}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Line}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Github}}</div>
                            </div>
                        </div>
                        <h2 id="member">Member 2</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member2Name}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Address}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Birth}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Email}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Number}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Line}}</div>
                            </div>
                        </div>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$data->member1Github}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="cv-wrapper">
                        <div class="cv">
                            <h3 id="payment-status">Payment Status</h3>
                            @if($data->payment_status == null)
                            <img src="{{asset('asset/admin/Icon-14.png')}}" alt="" width="250px" height="250px" class="filecv">
                            @else
                            <img src="{{asset('asset/admin/Icon-13.png')}}" alt="" width="250px" height="250px" class="filecv">
                            @endif
                        </div>

                        @if($data->payment_image !=null)
                            <div class="cv">
                            <h3 id="payment-status">Payment Image</h3>
                            <br>
                            <img src="{{ url('/team_data/'.$data->payment_image) }}" width="250px">
                        </div>
                        <br>
                        @endif

                        @if($data->payment_image !=null && $data->payment_status!=1)
                            <div class="cv">
                            <form action="{{route('verify.payment',$data)}}" method="POST" class="deletedbutton">
                            @csrf
                            {{ method_field('PUT') }}
                            <button type="submit">Verify Payment</button>
                            </form>
                            </div>
                        <br>
                        @endif

                        <div class="cv">
                            <h3 id="payment-status">Registered On</h3>
                            <br>
                            <h5 id="register-date">{{$data->created_at}}</h5>
                        </div>
                        <br>

                        @if($data->leaderCV != null || $data->member1CV != null || $data->member2CV != null)
                            <div class="cv">
                            <h3 id="payment-status">CV</h3>
                            <br>
                            <div>
                                @if($data->leaderCV != null)
                                <form action="{{route('download.leaderCV',$data)}}" method="GET" class="deletedbutton">
                                    @csrf
                                    <button type="submit">Download Leader CV</button>
                                </form>
                                <br>
                                @endif
                                @if($data->member1CV != null)
                                <form action="{{route('download.member1CV',$data)}}" method="GET" class="deletedbutton">
                                    @csrf
                                    <button type="submit">Download Member1 CV</button>
                                </form>
                                <br>
                                @endif
                                @if($data->member2CV != null)
                                <form action="{{route('download.member2CV',$data)}}" method="GET" class="deletedbutton">
                                    @csrf
                                    <button type="submit">Download Member2 CV</button>
                                </form><br>
                                @endif
                            </div>
                            </div>
                            <br>
                        @endif

                        @if($data->leaderProject != null || $data->member1Project != null || $data->member2Project != null)
                            <div class="cv">
                            <h3 id="payment-status">Project</h3>
                            <br>
                            <div>
                                @if($data->leaderProject != null)
                                <form action="{{route('download.leaderProject',$data)}}" method="GET" class="deletedbutton">
                                    @csrf
                                    <button type="submit">Download Leader Project</button>
                                </form><br>
                                @endif
                                @if($data->member1Project != null)
                                <form action="{{route('download.member1Project',$data)}}" method="GET" class="deletedbutton">
                                    @csrf
                                    <button type="submit">Download Member1 Project</button>
                                </form><br>
                                @endif
                                @if($data->member2Project != null)
                                <form action="{{route('download.member2Project',$data)}}" method="GET" class="deletedbutton">
                                    @csrf
                                    <button type="submit">Download Member2 Project</button>
                                </form><br>
                                @endif
                            </div>
                            </div>
                            <br>
                        @endif

                        <div class="deletebutton">
                        <form action="{{route('data.destroy',$data)}}" method="POST" class="deletedbutton">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button id="delete_button"type="submit">Delete Team</button>
                        </form>
                        </div>
                    </div> 
                    
                </div>
            </div> 
       
            <br>
            @endif
            @endforeach
            
        </div>
    </div>
</body>
</html>