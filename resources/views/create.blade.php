<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/create/style.css')}}">
    <link rel="icon" href="{{asset('asset/create/hackathon.png')}}">
</head>
<body>
<div class="intro-section">
      <div class="modal-title">LEADER</div>
      <div class="modal-subtitle">Please fill all information require before exiting the page (Uploading CV and Project is optional)</div>
      <form action="{{url('home')}}" method="POST" enctype="multipart/form-data" >
      @csrf
        <input type="text" class="form-control" placeholder="Full Name" name="leaderName">
        <input type="text" class="form-control" placeholder="Address" name="leaderAddress">
        <input type="text" class="form-control" placeholder="Birth Place/Date" name="leaderBirth">
        <input type="text" class="form-control" placeholder="Email" name="leaderEmail">
        <input type="text" class="form-control" placeholder="Whatsapp Number" name="leaderNumber">
        <input type="text" class="form-control" placeholder="Line ID" name="leaderLine">
        <input type="text" class="form-control" placeholder="GitHub ID" name="leaderGithub">
        <input type="file" id="leaderCV" name="leaderCV">
        <label for="file" class="form-control">Upload CV</label>
        <input type="file" id="leaderProject" name="leaderProject">
        <label for="file" class="form-control">Upload Project</label>
      <div class="modal-title">MEMBER 1</div>
        <input type="text" class="form-control" placeholder="Full Name" name="member1Name">
        <input type="text" class="form-control" placeholder="Address" name="member1Address">
        <input type="text" class="form-control" placeholder="Birth Place/Date" name="member1Birth">
        <input type="text" class="form-control" placeholder="Email" name="member1Email">
        <input type="text" class="form-control" placeholder="Whatsapp Number" name="member1Number">
        <input type="text" class="form-control" placeholder="Line ID" name="member1Line">
        <input type="text" class="form-control" placeholder="GitHub ID" name="member1Github">
        <input type="file" id="member1CV" name='member1CV'>
        <label for="file" class="form-control">Upload CV</label>
        <input type="file" id="member1Project" name="member1Project">
        <label for="file" class="form-control">Upload Project</label>
      <div class="modal-title">MEMBER 2</div>
        <input type="text" class="form-control" placeholder="Full Name" name="member2Name">
        <input type="text" class="form-control" placeholder="Address" name="member2Address">
        <input type="text" class="form-control" placeholder="Birth Place/Date" name="member2Birth">
        <input type="text" class="form-control" placeholder="Email" name="member2Email">
        <input type="text" class="form-control" placeholder="Whatsapp Number" name="member2Number">
        <input type="text" class="form-control" placeholder="Line ID" name="member2Line">
        <input type="text" class="form-control" placeholder="GitHub ID" name="member2Github">
        <input type="file" id="member2CV" name="member2CV">
        <label for="file" class="form-control">Upload CV</label>
        <input type="file" id="member2Project" name="member2Project">
        <label for="file" class="form-control">Upload Project</label>
        <div class="form-bar">
        <button class="form-button" type="submit">Register</button>
        </div>
      </form>
</div>
</body>
</html>