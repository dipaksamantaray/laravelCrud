<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{url('/update',$student->id)}}" method="post" >
        @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text"  name="name" id="" value="{{$student->name}}" placeholder="please enter your name here"/>
      
    </div>
    <div class="form-group">
        <label for="surename">SureName</label>
        <input type="text"  name="sure" id=""  value ="{{$student->surename}}" placeholder="please enter your Surename here"/>
        
      </div>

      <div class="form-group">
        <label for="fathersname">FathersName</label>
        <input type="text"  name="father" id=""  value= "{{$student->fathersname}}" placeholder="please enter your fathersNmae here"/>    
      </div>
      <button type ="submit">update</button>
    </form>
</body>
</html>