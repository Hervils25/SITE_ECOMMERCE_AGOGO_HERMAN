@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Ajouter un produit</div>
  <div class="card-body">

      <form action="{{ url('chambre') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom*</label></br>
        <input type="text" name="name" id="name" class="form-control" require></br>
        <label>Description du produit*</label></br>
        <input type="text" name="description" id="description" class="form-control" require></br>
        <label>Catégorie du produit*</label></br>
        <input type="text" name="category" id="category" class="form-control" require></br>
        <label>Prix*</label></br>
        <input type="text" name="price" id="price" class="form-control" require></br>
        <label>Quantité en stock*</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control" require></br>
        <label>Date de livraison du produit*</label></br>
        <input type="text" name="date" id="date" class="form-control" require></br>
        <label>Statut*</label></br>
        <select name="statut" id="statut" class="form-control" require>
            <option value="">Selectionner</option>
            <option value="disponible">Actif</option>
            <option value="non disponible">En rupture de stock</option>
        </select> <br>
        <input type="submit" value="Sauvegarder" class="btn btn-success"></br>
    </form>

  </div>
</div>
 @stop
