<!DOCTYPE html>
<html lang="fr">

<!--HEAD-->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ARCADIA-Zoo</title>
    <link rel="stylesheet" href="/CSS/styles.connexion.css" />
    <link rel="PhPSheet" href="/PHP/page_connexion.php" />

</head>



<!--BODY-->
<body>
    <section>
        <header class="header2">
            <img class="img_logo_zoo" src="/Image/Arcadia2.png" alt="Logo_Zoo" />  
            <nav class="nav">
                <li><a href="index">Accueil</a></li>
            </nav>       
        </header>
        <div class="landing-page">
                <div class="Creation_du_compte">
                    <div class="div_Titre_Creation">
                        <h5 class="CreationCompte">Création compte</h5>   
                    </div>   
                    <div class="div_creation">
                        <div> 
                          <label class="username">Identifiant:</label>                                              
                          <input type="Identifiant" id="identifiant" name="identifiant" />  
                        </div> 
                        <div>
                          <label class="pass">Mot de passe:</label>  
                          <input type="Mot_de_passe" id="pass" name="Mot_de_passe" />  
                        </div>  
                          <label class="Role">Rôle: </label>
                                                      
                            <select name="choix_role">
                                <option>Administrateur </option>
                                <option>Vétérinaire</option>
                                <option>Employé</option>
                            </select>
                        <div class="Validation">
                            <input class="btn_validation" type="submit" value="Valider">  
                        </div>
                    </div>
                        <div class="div_retour">
                            <button class="btn_retour"><a href="index.html">Retour</a></button>
                        </div>
                        <div class="btn_mdp_oublie">
                            <button class="Mdp_oubli">Mot de passe oublié</button>
                        </div>
                </div>
        </div>                     


 






    </section>
</body>
</html>
    