@extends('layouts.masters')

@section('content')
        @foreach($products as $product)
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                      <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h6 class="mb-0"> {{$product->title}}</h6>
                        <div class="mb-1 text-muted">{{date('d/m/Y', strtotime($product->created_at))}}</div>
                        <p class="mb-auto">{{$product->subtitle}}</p>
                        <strong class="mb-auto"> {{number_format($product->price, 2, ',', ' ').'FCFA'}} </strong>
                        <a href="{{route('products.show', $product->slug)}}" class="stretched-link btn btn-primary">Voir l'article</a>
                      </div>
                      <div class="col-auto d-none d-lg-block">
                        <img src=" {{$product->image}} " alt=""> 
                        <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

                      </div>
                </div>
            </div>
        @endforeach
@endsection