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
                    <a class="menu-item" href="/home">
                        <div class="menu-icon home"></div>
                        <div class="menu-text">Home</div>
                    </a>
                </li>
                <li>
                    <a class="menu-item active" href="#">
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
            @foreach($messagess as $messages)
            <div class="member">
                <h1 id="namatim">Messages</h1>
                <div class="leader">
                    <div class="biodata">
                        <h2 id="member">Name</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$messages->name}}</div>
                            </div>
                        </div>
                        <h2 id="member">Email</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$messages->email}}</div>
                            </div>
                        </div>
                        <h2 id="member">Subject</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$messages->subject}}</div>
                            </div>
                        </div>
                        <h2 id="member">Message</h2>
                        <div class="line-data">
                            <div class="content-data">
                                <div class="subcontent-data">{{$messages['message']}}</div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="deletebutton">
                        <form action="{{route('message.destroy',$messages)}}" method="POST" class="deletedbutton">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit">Delete Message</button>
                        </form>
                        </div>
                    </div> 
                    
                </div>
                <br>
                @endforeach
            </div> 
       
            
            
            
            
        </div>
    </div>
</body>
</html>