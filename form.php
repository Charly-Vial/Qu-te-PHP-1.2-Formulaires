<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>




    <div>
        <form action="thanks.php" method="POST">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom"></span><br><br>
            </div>

            <div>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom"></span><br><br>
            </div>

            <div>
                <label for="email">email :</label> 
                <input type="email" id="email" name="email"></span><br><br>
            </div>

            <div>
                <label for="telephone">Telephone :</label>
                <input type="tel" id="telephone" name="telephone"></span><br><br>
            </div> 
                
            <div>
                <label for="sujet">Sujet :</label>
                <select name="sujet" id="sujet">
                    <option value=""></option>
                    <option value="choix1">Sujet 1</option>
                    <option value="choix2">Sujet 2</option>
                    <option value="choix3">Sujet 3</option>
                </select><br><br>
            </div>

            <div>
                <label for="message">Message :</label></span><br>
                <textarea name="message" id="message" cols="30" rows="10"></textarea><br><br>
            </div>

            <div  class="button">
                <button  type="submit" >Valider</button>
            </div><br>


        </form>
    </div>
</body>
</html>