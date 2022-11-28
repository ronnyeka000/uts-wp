@extends('layouts.main')

@section('container')
    <h1> Daftar Publisher </h1>
    @forelse ($publisher as $p)
        <div class="container text-center bg-dark text-light rounded-4 mt-5" style="padding: 1rem">
            <h1>{{$p->name}}</h1>
            <h5>Address - {{$p->address}}</h5>
            <h5>Phone - {{$p->phone}}</h5>
            <h5>Email - {{$p->email}}</h5>
        </div>
        <h1> Daftar Buku </h1>

        <div class="row">

            @forelse ($book as $b)
                @if($b->publisher_id==$p->id)
                    <div class="col-lg-3 col-md-4">
                        <div class="card mt-5" style="width: 18rem;">
                            <img src="https://marketplace.canva.com/EAFFC7J8mbI/1/0/1003w/canva-putih-kuning-lanskap-minimalis-sampul-buku-novel-qBdCH1piX8E.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$b->title}}</h5>
                                <p class="card-text">{{$b->author}}</p>
                                <a href="#" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endif
            @empty

            @endforelse

        </div>
    @empty
    @endforelse
@endsection
