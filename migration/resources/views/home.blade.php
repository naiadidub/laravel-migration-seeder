@extends('layouts.base')

@section('pagetitle', 'home-page')
    
@section('maincontent')

<div class="container">
    <div class="row">
        @foreach ($viaggi as $item){
            <a href="{{route('detail', $item->id)}}" style="text-decoration: none">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">prezzo ${{$item->prezzo}}</h6>
                        <p>partenza:{{$item->luogo_di_partenza}}</p>
                        <p>arrivo:{{$item->luogo_di_atterraggio}}</p>
                        <p>il:{{$item->data_partenza}}</p>
                        <p>alle:{{$item->ora_partenza}}</p>
                        </div>
                    </div>
                </div>
            <a>
        }
            
        @endforeach
    </div>
</div>
@endsection