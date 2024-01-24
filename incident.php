<?php include('code.php'); ?>

<div class="container mt-4 ">
    <h2>Ajouter un incident </h2>
    <form>
        <div class="form-group">
            <label for="itemName">Titre</label>
            <input type="text" class="form-control" id="itemName" placeholder="entrer un nom">
        </div>
        <div class="form-group">
            <label for="category">Criticité</label>
            <select class="form-control" id="category">
                <option value="0">P0</option>
                <option value="1">P1</option>
                <option value="2">P2</option>
                <option value="3">P3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="businessLine">Business Line</label>
            <select class="form-control" id="businessLine">
                <option value="1">Canaux et conformité</option>
                <option value="2">ENGAGEMENTS</option>
                <option value="3">CASH MANAGEMENT</option>
                <option value="4">MONETIQUE</option>
            </select>
        </div>

        <div class="form-group">
            <label for="itemDescription">Ajouter la cause de l'incident</label>
            <textarea class="form-control" id="itemDescription" rows="3" placeholder="Entrer la description de l'incident"></textarea>
        </div>
        <div class="form-group">
            <label for="datepicker">Sélectionner une date</label>
            <input type="date" class="form-control" id="datepicker">
        </div>
        <button type="submit" class="btn btn-danger">Ajouter l'incident</button>
    </form>
</div>
