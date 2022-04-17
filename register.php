<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Ecoit</title>
</head>
<body>
    <header>
        <?php include('inc/header.php'); ?>
    </header>
    
    <main>

    <?php

        if(!empty($_POST)){

            $errors = array();

            if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
                $errors['username'] = "Veuillez saisir un pseudo";
            }
            if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Votre email n'est pas valide";
            }

            if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
                $errors['password'] = "Vous devez rentrer un mot de passe valide";
            }
            debug($errors);
        }
    ?>

    <div class="container mx-auto m-5 col-md-6 border shadow p-3 mb-5 bg-body rounded ">
       <h2 class="text-center">S'inscrire à une formation</h2>

       <form action="" method="POST">
           <div class="form-group mt-3">
               <label for="">Pseudo</label>
               <input type="text" name="username" class="form-control" placeholder="Pseudo">
               <span id="passwordHelpInline" class="form-text">
                    Ne peut contenir que des lettres, chiffres ou underscore(_).
                </span>
           </div>
           <div class="form-group mt-3">
               <label for="">Email</label>
               <input type="text" name="email" class="form-control" placeholder="Email">
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

    </main>

    <footer>
        <?php include('inc/footer.php'); ?>
    </footer>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>