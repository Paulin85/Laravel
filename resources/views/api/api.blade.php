

@section('content')
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" src="resources/sass/dist/api.scss">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        p {
           justify-items: center;
            font-family: 'Nunito', sans-serif;
            position: center;


        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<h1>Guide d'utilisation API</h1>

<main role="main" class="container">

    <div class="starter-template">

        <p class="lead">
            Ici l’API token renseigné est fourni à titre d’exemple.
            Il faudra renseigner votre API Token dans l'URL

            <br>
            Lien permettant d’accéder à la liste des entreprises :
            http://127.0.0.1:8000/api/entreprisesapi/1/detail?api_token=dcf85b46-17ae-4dd6-80bb-6b61fe67ddcb (exemple)
            <br>
            Lien permettant d’accéder aux informations d’une entreprise (ici l’id fourni est 1, il faudra spécifié l’id de l’entreprise recherchée) :
            http://127.0.0.1:8000/api/entreprisesapi/1/detail?api_token=dcf85b46-17ae-4dd6-80bb-6b61fe67ddcb  (exemple)


            <br>
            Lien permettant d’accéder aux informations d’un user (ici l’id fourni est 10, il faudra spécifié l’id de l'user recherché) :
            http://127.0.0.1:8000/api/entreprisesapi/10/user?api_token=dcf85b46-17ae-4dd6-80bb-6b61fe67ddcb  (exemple)
            <br>

        <div class="input-group input-group-lg">
            <div class="input-group-prepend">



                Consulter votre API TOKEN : <button type="button" class="btn btn-dark"> <a href="/users">Users</a> </button>


            </div>

        </div>
        </p>
    </div>

</main>



    </div>
</div>



</body>
</html>