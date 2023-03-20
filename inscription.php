 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
                    <div class="header">
                        <h1>Inscription à la plateforme</h1>
                    </div>
                    <div >
                        <form class="form" method="post"  action="treat.php">
                                <div class="form-control">
                                    <label for="">Nom :</label>
                                    <input type=""  name="lastname" id="lastname"  requcired >
                                </div>                
                                

                                <div class="form-control">
                                    <label for="">Prenoms :</label>
                                    <input type="text"  name="firstname" id="firstname"  requcired>
                                </div>
                                

                                <div class="form-control">
                                    <label for="">Email :</label>
                                    <input type="text"  name="email" id="email"  requcired>
                                </div>
                                
                                
                                <div class="form-control">
                                    <label for="">Mot de passe :</label>
                                    <input type="text"  name="mdp" id="mdp"  requcired>
                                </div>
                                
                                
                                     <button class="form-button" type="submit"> <i class="fas fa-user-plus"></i> S'inscrire</button>      
                        </form>
                        
                    </div>
    </div>
    
   
</body>
</html>