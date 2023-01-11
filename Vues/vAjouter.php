<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<br>
<H1 style="width: 60%; margin: auto">Ajouter un Gateau</H1> <br><br>
<form style="width: 60%; margin: auto" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nom produit</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Nom" name="nom">
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text " for="inputGroupSelect01">Catégorie</label>
            </div>
            <select class="custom-select " id="inputGroupSelect01" name="categ">
                    <option value="">Choisir...</option>';
                    <option value="1">Entremets Individuels</option>';
                    <option value="2">Gâteaux à partager</option>';
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="">Prix</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Prix" name="prix">
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="inputAddress">Description</label>
        <textarea name="description" id="" cols="30" rows="10"  class="form-control" id="inputAddress" placeholder="Description "></textarea>
<!--        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">-->
    </div>
    <br>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Image</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="URL image" name="image">
    </div>


    <button type="submit" class="btn btn-primary" >Ajouter</button>
</form>
</div>
</div>
</body>

</html>

