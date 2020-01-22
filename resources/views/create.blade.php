<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/create/style.css')}}">
    <link rel="icon" href="{{asset('asset/create/hackathon.png')}}">
</head>
<!-- <script>
    window.addEventListener('beforeunload',function(e){
      e.preventDefault();
      e.returnValue= "";
    });
</script> -->
<body>
<div class="intro-section">
      <div class="modal-title">LEADER</div>
      <div class="modal-subtitle">Please fill all information require before exiting the page (Uploading CV and Project is optional)</div>
      <form action="{{url('home')}}" method="POST" enctype="multipart/form-data" >
      @csrf
        <input type="text" class="form-control" placeholder="Full Name" name="leaderName" required>
        <input type="text" class="form-control" placeholder="Address" name="leaderAddress"required>
        <input type="text" class="form-control" placeholder="Birth Place/Date" name="leaderBirth"required>
        <input type="text" class="form-control" placeholder="Email" name="leaderEmail"required>
        <input type="text" class="form-control" placeholder="Whatsapp Number" name="leaderNumber"required>
        <input type="text" class="form-control" placeholder="Line ID" name="leaderLine"required>
        <input type="text" class="form-control" placeholder="GitHub ID" name="leaderGithub"required>
        <label for="file" class="form-control">Upload CV <div></div><input type="file" id="leaderCV" name="leaderCV"></label>
        <label for="file" class="form-control">Upload Project<div></div><input type="file" id="leaderProject" name="leaderProject"></label>
      <div class="modal-title">MEMBER 1</div>
        <input type="text" class="form-control" placeholder="Full Name" name="member1Name"required>
        <input type="text" class="form-control" placeholder="Address" name="member1Address"required>
        <input type="text" class="form-control" placeholder="Birth Place/Date" name="member1Birth"required>
        <input type="text" class="form-control" placeholder="Email" name="member1Email"required>
        <input type="text" class="form-control" placeholder="Whatsapp Number" name="member1Number"required>
        <input type="text" class="form-control" placeholder="Line ID" name="member1Line"required>
        <input type="text" class="form-control" placeholder="GitHub ID" name="member1Github"required>
        <label for="file" class="form-control">Upload CV<div></div><input type="file" id="member1CV" name='member1CV'></label>
        <label for="file" class="form-control">Upload Project<div></div><input type="file" id="member1Project" name="member1Project"></label>
      <div class="modal-title">MEMBER 2</div>
        <input type="text" class="form-control" placeholder="Full Name" name="member2Name"required>
        <input type="text" class="form-control" placeholder="Address" name="member2Address"required>
        <input type="text" class="form-control" placeholder="Birth Place/Date" name="member2Birth"required>
        <input type="text" class="form-control" placeholder="Email" name="member2Email"required>
        <input type="text" class="form-control" placeholder="Whatsapp Number" name="member2Number"required>
        <input type="text" class="form-control" placeholder="Line ID" name="member2Line"required>
        <input type="text" class="form-control" placeholder="GitHub ID" name="member2Github"required>
        <label for="file" class="form-control">Upload CV<div></div><input type="file" id="member2CV" name="member2CV"></label>
        <label for="file" class="form-control">Upload Project <div></div><input type="file" id="member2Project" name="member2Project"></label>
        <div class="form-bar">
        <button class="form-button" type="submit">Register</button>
        </div>
      </form>
</div>
</body>
</html>