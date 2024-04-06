@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Modifier un produit</div>
  <div class="card-body">

      <form action="{{ url('chambre/' .$chambres->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$chambres->id}}" id="id" />
        <label>Nom*</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{$chambres->name}}" id="name"></br>
        <label>Description du produit*</label></br>
        <input type="text" name="description" id="description" class="form-control" value="{{$chambres->description}}" id="description"></br>
        <label>Catégorie du produit*</label></br>
        <input type="text" name="category" id="category" class="form-control" value="{{$chambres->category}}" id="category"></br>
        <label>Prix*</label></br>
        <input type="text" name="price" id="price" class="form-control" value="{{$chambres->price}}" id="price"></br>
        <label>Quantité en stock*</label></br>
        <input type="text" name="quantity" id="quantity" class="form-control" value="{{$chambres->quantity}}" id="quantity"></br>
        <label>Date de livraison du produit*</label></br>
        <input type="text" name="date" id="date" class="form-control" value="{{$chambres->date}}" id="date"></br>
        <label>Statut*</label></br>
        <select name="statut" id="statut" class="form-control" value="{{$chambres->statut}}" id="statut">
            <option value="">Selectionner</option>
            <option value="disponible">Actif</option>
            <option value="non_disponible">En rupture de stock</option>
        </select> <br>
        <input type="submit" value="Mettre a jour" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
