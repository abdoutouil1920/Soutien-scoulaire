<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page enseignant</title>
    <link rel="stylesheet" href="enseignant.css">
    
</head>
<body>
    <nav>
        <ul>
            <li class="left"><a href="index.html"><img src="images/esblogo-1.jpg" alt="Logo" class="logo"></a> </li>
            <li class="center"><h1>Espace Enseignant</h1></li>
        </ul>
    </nav>
    

    <ul>
        <li>
            <a href="#cours">Cours</a>
            <section id="cours">
                <h2>Ajouter un cours</h2>
                <form action="soumettre-cours.php" method="post">
                    <label for="nom-du-cours">Nom du cours :</label>
                    <input type="text" id="nom-du-cours" name="nom-du-cours" required>
                    <label for="code-du-cours">Code du cours :</label>
                    <input type="text" id="code-du-cours" name="code-du-cours" required>
                    <button type="submit">Ajouter le cours</button>
                </form>
               
                  
                 <form action="upload-cours.php" method="post" enctype="multipart/form-data">
                        <label for="fichier-cours">Sélectionnez un fichier PDF :</label>
                        <input type="file" id="fichier-cours" name="fichier-cours" accept=".pdf" required>
                        <button type="submit">Ajouter le cours</button>
                </form>
                
                
            </section>
        </li>
        <li>
            <a href="#demandes-de-support">Demandes de support</a>
            <section id="demandes-de-support">
                <h2>Demandes de support</h2>
                <ul>
                    <li>
                        <h3>Nom de l'étudiant</h3>
                        <p>Détails de la demande de support</p>
                        <button>Résoudre la demande</button>
                    </li>
                    <li>
                        <h3>Nom de l'étudiant</h3>
                        <p>Détails de la demande de support</p>
                        <button>Résoudre la demande</button>
                    </li>
                    <li>
                        <h3>Nom de l'étudiant</h3>
                        <p>Détails de la demande de support</p>
                        <button>Résoudre la demande</button>
                    </li>
                </ul>
            </section>
        </li>
        <li>
            <a href="#gestion-de-classe">Gestion de classe</a>
            <section id="gestion-de-classe">
                <h2>Gestion de classe</h2>
                <form action="">
                <table>
                    <thead>
                        <tr>
                            <th>Nom de l'étudiant</th>
                            <th>Présence</th>
                            <th>Note</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" placeholder="Nom de l'étudiant"></td>
                            <td>absent<input type="radio" name="b" id=""><br> present <input type="radio" name="b" id=""> </td>
                            <td><input type="number" name="" id="">%</td>
                            <td>
                                <button class="modifier-btn">Modifier</button>
                                <button type="reset" class="supprimer-btn">Supprimer</button>
                                <button class="valider-btn">Valider</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Nom de l'étudiant"></td>
                            <td>absent<input type="radio" name="a" id=""><br> present <input type="radio" name="a" id=""> </td>
                            <td><input type="number" name="" id="">%</td>
                            <td>
                                <button class="modifier-btn">Modifier</button>
                                <button type="reset" class="supprimer-btn">Supprimer</button>
                                <button class="valider-btn">Valider</button>

                            </td>
                        </tr>
                    </tbody>

                </table>
                
            </form>
               
                
            </section>
          
                        
            
        </li>
    </ul>
</body>
</html>
