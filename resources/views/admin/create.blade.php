<form action="{{ route("admin.create.post") }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}


    <input type="text" name="model" placeholder="Modèle">
    <input type="text" name="brand" placeholder="Marque">
    <input type="text" name="powerful" placeholder="Puissance">
    <input type="text" name="years" placeholder="Année">
    <input type="text" name="finishing" placeholder="Finition">
    <input type="text" name="desc" placeholder="Description">
    <input type="file" name="image" src="" alt="image">
    <input type="text" name="price" placeholder="Prix de vente">
    <input type="submit" value="Ajouter le véhicule">
</form>
