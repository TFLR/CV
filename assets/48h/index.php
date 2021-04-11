<!DOCTYPE html>
<html lang="{{ strreplace('', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
      <div class="starter-template">
          <form method="post" action="">
              <div class="form-group">

                  <div>
						<label>Nom Image :<input type="text" name="Name" placeholder="Nom de l'image" /></label><br />

						<label for="titre">Choisir une image :</label>

						<input type="file" id="img" name="img" accept="image/png, image/jpeg">
					</div>

					<div>
						<label> Type d'image : </label>

						<select name="Type" id="Type">
							<option value="valeur1">PassionFroid</option>
							<option value="valeur2" selected>Fournisseur</option>
							<option value="valeur3">Logo</option>
						</select> <br />

					</div>

					<div>
						<p>Photo avec produit:</p>

						<select name="Product" id="Product">
							<option value="valeur1">Oui</option>
							<option value="valeur2" selected>Non</option>

						</select> <br />

					</div>

					<div>
						<p>Photo avec humain:</p>

						<select name="Human" id="Human">
							<option value="valeur1">Oui</option>
							<option value="valeur2" selected>Non</option>

						</select> <br />

					</div>

					<div>
						<p>Photo institutionnelle:</p>

						<select name="institutional" id="institutional">
							<option value="valeur1">Oui</option>
							<option value="valeur2" selected>Non</option>

						</select> <br />

					</div>
					<div>
						<label> Format : </label>
						<select name="Format" id="Format">
							<option value="valeur1">Vertical</option>
							<option value="valeur2" selected>Horizontal</option>

						</select> <br /><br />

					</div>

					<div>
						<label>Crédits : <input type="text" name="Crédit" /></label><br />
					</div>

					<div>
						<p>Droits d’utilisation limités :</p>

						<select name="Rights" id="Rights">
							<option value="valeur1">oui</option>
							<option value="valeur2" selected>non</option>

						</select> <br />
					</div>

					<div>
						<label>Copyright : <input type="text" name="Copyright" /></label><br />
					</div>

					<div>
						<label for="start">Date de fin d’utilisation :</label>

						<input type="date" id="end" name="end_date" value="2018-07-22" min="2018-01-01"
							max="2022-12-31"><br />

						<input type="submit" name="soumission" value="valider">
					</div>

              <!-- <button type="submit" class="btn btn-primary">Enregister</button> -->

          </form>
          <?php


          if (!empty($_POST)) {
              //*** /
              // Insertion
              $pdo1 = new PDO("mysql:host=localhost;dbname=data_image", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
              $_POST["name1"] = htmlentities($_POST["name"], ENT_QUOTES);
              $_POST["tag1"] = htmlentities($_POST["tag"], ENT_QUOTES);
              $_POST["img1"] = htmlentities($_POST["img"], ENT_QUOTES);
              $pdo1->exec("INSERT INTO image (name, tag, link) VALUES ('$_POST[name]', '$_POST[tag]', 'Img/$_POST[img]');");

              echo "Donnée(s) Enregister";
              header('Refresh: 0');
              //** */
          }


          ?>
    </body>
</html>