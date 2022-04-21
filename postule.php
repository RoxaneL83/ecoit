<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <title>Ecoit</title>
</head>
<body>
    <header>
        <?php include('inc/header.php'); ?>
    </header>
    <h2 class="mt-5 text-center">Envie de partager vos connaissances</h2>
    <h3 class="text-center">Postuler pour EcoIt</h3>

       <div class="container mx-auto m-5 col-md-6 border shadow p-3 mb-5 bg-body rounded ">
       
       <h3 class="text-center">Devenez formateur</h3>

       <form action="" method="POST">
           <div class="form-group mt-3">
               <label for="">Nom</label>
               <input type="text" name="firstname" class="form-control" placeholder="Nom">
           </div>
           <div class="form-group mt-3">
               <label for="">Prénom</label>
               <input type="text" name="lastname" class="form-control" placeholder="Prénom">
           </div>
           <div class="form-group mt-3">
               <label for="">Email</label>
               <input type="text" name="email" class="form-control" placeholder="Email">
           </div>
           <div class="form-group mt-3">
               <label for="profilePicture" class="form-label">Photo de profil</label>
               <input type="file" id="profilePicture" name="profile_picture" class="form-control" />        
            </div>
           <div class="form-group mt-3">
               <label for="">Mot de passe</label>
               <input type="password" name="password" class="form-control" placeholder="Mot de passe">
           </div>
           <div class="form-group mt-3">
               <label for="">Confirmez votre mot de passe</label>
               <input type="password" name="password_confirm" class="form-control" placeholder="Confirmez votre mot de passe">
           </div>
           <div>
               <button type="submit" name="valider" class="btn btn-success mt-3">S'inscrire</button>
           </div>
       </form>
    </div>
        



    <footer>
        <?php include('inc/footer.php'); ?>
    </footer>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
    
    
    
    
    

