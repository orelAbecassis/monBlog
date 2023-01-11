<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<br>
<H1 style="width: 60%; margin: auto">Modifier un Gateau</H1> <br><br>
<form style="width: 60%; margin: auto" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nom</label>
            <input type="text" class="form-control" id="inputEmail4"  name="nom" value="<?php  echo $p['nom']; ?>">
        </div>
        <br>
        div class="form-group col-md-6">
        <label for="inputEmail4">Catégorie</label>
        <input type="text" class="form-control" id="inputEmail4"  name="categ" value="<?php  echo $p['categ']; ?>">
    </div>

        <div class="form-group col-md-6">
            <label for="">Prix</label>
            <input type="text" class="form-control" id="inputPassword4"  name="prix" value="<?php  echo $p['prix']; ?>">
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="inputAddress">Description</label>
        <textarea name="description" id="" cols="30" rows="10"  class="form-control" id="inputAddress" value="<?php  echo $p['description']; ?>"></textarea>
        <!--        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">-->
    </div>
    <br>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Image</label>
        <input type="text" class="form-control" id="inputEmail4" value="<?php  echo $p['image']; ?>">
    </div>


    <button type="submit" class="btn btn-primary" >Ajouter</button>
</form>
</div>
</div>
</body>

</html>


