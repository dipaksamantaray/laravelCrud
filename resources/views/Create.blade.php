<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Create</title>
</head>

<body>
    <div class="mx-auto" style="width: 200px;">
        <form action="{{ url('/save') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="" placeholder="please enter your name here" />

            </div>
            <div class="form-group">
                <label for="surename">SureName</label>
                <input type="text" name="sure" id="" placeholder="please enter your Surename here" />

            </div>

            <div class="form-group">
                <label for="fathersname">FathersName</label>
                <input type="text" name="father" id="" placeholder="please enter your fathersNmae here" />
            </div>
            <button type="submit">save</button>
        </form>
    </div>




</body>

</html>
