<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <div class="modal-title">LEADER</div>
      <form action="{{url('home')}}" method="POST">
      @csrf
        <input type="text" class="input-text" placeholder="Full Name" name="leaderName">
        <input type="text" class="input-text" placeholder="Address" name="leaderAddress">
        <input type="text" class="input-text" placeholder="Birth Place/Date" name="leaderBirth">
        <input type="text" class="input-text" placeholder="Email" name="leaderEmail">
        <input type="text" class="input-text" placeholder="Whatsapp Number" name="leaderNumber">
        <input type="text" class="input-text" placeholder="Line ID" name="leaderLine">
        <input type="text" class="input-text" placeholder="GitHub ID" name="leaderGithub">
        <input type="file" id="file" name="leaderCV">
        <label for="file" class="input-text">
          Upload CV
          <i class="fas fa-file-upload"></i>
        </label>
        <input type="file" id="file" name="leaderProject">
        <label for="file" class="input-text">
          Upload Project
          <i class="fas fa-file-upload"></i>
        </label>
      <div class="modal-title">MEMBER 1</div>
        <input type="text" class="input-text" placeholder="Full Name" name="member1Name">
        <input type="text" class="input-text" placeholder="Address" name="member1Address">
        <input type="text" class="input-text" placeholder="Birth Place/Date" name="member1Birth">
        <input type="text" class="input-text" placeholder="Email" name="member1Email">
        <input type="text" class="input-text" placeholder="Whatsapp Number" name="member1Number">
        <input type="text" class="input-text" placeholder="Line ID" name="member1Line">
        <input type="text" class="input-text" placeholder="GitHub ID" name="member1Github">
        <input type="file" id="file" name="member1CV">
        <label for="file" class="input-text">
          Upload CV
          <i class="fas fa-file-upload"></i>
        </label>
        <input type="file" id="file" name="member1Project">
        <label for="file" class="input-text">
          Upload Project
          <i class="fas fa-file-upload"></i>
        </label>
      <div class="modal-title">MEMBER 2</div>
        <input type="text" class="input-text" placeholder="Full Name" name="member2Name">
        <input type="text" class="input-text" placeholder="Address" name="member2Address">
        <input type="text" class="input-text" placeholder="Birth Place/Date" name="member2Birth">
        <input type="text" class="input-text" placeholder="Email" name="member2Email">
        <input type="text" class="input-text" placeholder="Whatsapp Number" name="member2Number">
        <input type="text" class="input-text" placeholder="Line ID" name="member2Line">
        <input type="text" class="input-text" placeholder="GitHub ID" name="member2Github">
        <input type="file" id="file" name="member2CV">
        <label for="file" class="input-text">
          Upload CV
          <i class="fas fa-file-upload"></i>
        </label>
        <input type="file" id="file" name="member2Project">
        <label for="file" class="input-text">
          Upload Project
          <i class="fas fa-file-upload"></i>
        </label>
        <button class="form-button" type="submit">Register</button>
      </form>
</body>
</html>