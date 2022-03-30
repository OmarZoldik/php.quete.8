<section>

  <form action="index.php" method="post">
  <p>Votre nom : <input type="text" name="firstname" /></p>
  <p>Votre prenom : <input type="text" name="lastname" /></p>
  <p>Votre age : <input type="text" name="agee" /></p>
  <p>Taille (cm): <input type="number" step="0.01" name="size"min="0,1" max="1,9"></p>
  <div>
    <input type="radio" name="sex" value="homme"
          checked>
    <label for="homme">homme</label>
  </div>

  <div>
    <input type="radio" name="sex" value="femme">
    <label for="femme">femme</label>
  </div>

  <div>
    <input type="radio" name="sex" value="alien">
    <label for="alien">alien</label>
  </div>

  <p><input type="submit" value="envoyer" name="submit"></p>
  </form>

</section>


