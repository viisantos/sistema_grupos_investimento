<head>
    <title>{{ $login_page_title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Paytone+One&display=swap" rel="stylesheet">
</head>

<body>

   <h1 style="align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; font-family: 'Anton', sans-serif;
   font-family: 'Paytone One', sans-serif;">Investindo</h1>
   <h3 style="align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; font-family: 'Anton', sans-serif;
   font-family: 'Paytone One', sans-serif;
   font-family: 'Raleway', sans-serif;">O nosso gerenciador de investimento</h3>

   <br>

   <div style="align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center;">

        <form action="{{ route('login.doLogin') }}" method="post">
            <label class="sr-only" for="labelUserName1">Usuario</label>
            <input type="text" style="width: 70%;" class="form-control mb-2 mr-sm-2" id="inputUserName1" placeholder="Username">

            <label class="sr-only" for="formLogin">Senha</label>
            <input type="password" style="width: 70%;" class="form-control mb-2 mr-sm-2" id="inputPasswordName1" placeholder="Password">

            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
</body>
