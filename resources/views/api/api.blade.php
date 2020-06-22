
@extends('layouts.app')

@section('content')
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>Guide d'utilisation API</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>
<body>



    <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Guide d'utilisation API</h1>
        <p class="lead">     
            Ici l’API token renseigné est fourni à titre d’exemple.
            Il faudra renseigner votre API Token dans l'URL
</p>
        <ul class="list-unstyled">
          <li>            Lien permettant d’accéder à la liste des entreprises :
              http://127.0.0.1:8000/api/entreprisesapi/1/detail?api_token=dcf85b46-17ae-4dd6-80bb-6b61fe67ddcb (exemple)</li>
            <br>
          <li>   Lien permettant d’accéder aux informations d’une entreprise (ici l’id fourni est 1, il faudra spécifié l’id de l’entreprise recherchée) :
              http://127.0.0.1:8000/api/entreprisesapi/1/detail?api_token=dcf85b46-17ae-4dd6-80bb-6b61fe67ddcb  (exemple)</li>
            <br>
            <li> Lien permettant d’accéder aux informations d’un user (ici l’id fourni est 10, il faudra spécifié l’id de l'user recherché) :
                http://127.0.0.1:8000/api/entreprisesapi/10/user?api_token=dcf85b46-17ae-4dd6-80bb-6b61fe67ddcb  (exemple)</li>





                Consulter votre API TOKEN : <button type="button" class="btn btn-dark"> <a href="/users">Users</a> </button>



        </div>
        </p>
        </ul>
      </div>
    </div>
  </div>




  
    </div>

</main>



    </div>
</div>

@endsection

</body>
</html>