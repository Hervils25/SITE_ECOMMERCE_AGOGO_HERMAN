@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Details du produit</div>
  <div class="card-body">


        <div class="card-body">
            <p class="card-text">Nom : {{ $chambres->name }}</p>
            <p class="card-text">Description du produit : {{ $chambres->description }}</p>
            <p class="card-text">Catégorie du produit : {{ $chambres->category }}</p>
            <p class="card-text">Prix : {{ $chambres->price }}</p>
            <p class="card-text">Quantité en stock : {{ $chambres->quantity }}</p>
            <p class="card-text">Date de livraison du produit : {{ $chambres->date }}</p>
            <p class="card-text">Statut : {{ $chambres->statut }}</p>
  </div>

    </hr>

  </div>
</div>
