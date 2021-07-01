@extends('layout')

@section('page-content')


    <div class="container">
        <h1>Gallery Animaux</h1>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide col w-100 p-0 mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($animauxFirst as $animalFirst)
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/images/gallery/animaux/'.$animalFirst->image) }}" class="d-block w-100" alt="{{ $animalFirst->alt }}">
                        </div>
                    @endforeach
                    @foreach($animaux as $animal)
                        <div class="carousel-item">
                            <img src="{{ URL::to('/images/gallery/animaux/'.$animal->image) }}" class="d-block w-100" alt="{{ $animal->alt }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <h1>Gallery Architecture</h1>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide col w-100 p-0 mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($architectureFirst as $archiFirst)
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/images/gallery/architecture/'.$archiFirst->image) }}" class="d-block w-100" alt="{{ $archiFirst->alt }}">
                        </div>
                    @endforeach
                    @foreach($architecture as $archi)
                        <div class="carousel-item">
                            <img src="{{ URL::to('/images/gallery/architecture/'.$archi->image) }}" class="d-block w-100" alt="{{ $archi->alt }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <h1>Gallery Divers</h1>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide col w-100 p-0 mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($diversFirst as $diverFirst)
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/images/gallery/divers/'.$diverFirst->image) }}" class="d-block w-100" alt="{{ $diverFirst->alt }}">
                        </div>
                    @endforeach
                    @foreach($divers as $diver)
                        <div class="carousel-item">
                            <img src="{{ URL::to('/images/gallery/divers/'.$diver->image) }}" class="d-block w-100" alt="{{ $diver->alt }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <h1>Gallery Fleurs</h1>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide col w-100 p-0 mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($fleursFirst as $fleurFirst)
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/images/gallery/fleurs/'.$fleurFirst->image) }}" class="d-block w-100" alt="{{ $fleurFirst->alt }}">
                        </div>
                    @endforeach
                    @foreach($fleurs as $fleur)
                        <div class="carousel-item">
                            <img src="{{ URL::to('/images/gallery/fleurs/'.$fleur->image) }}" class="d-block w-100" alt="{{ $fleur->alt }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <h1>Gallery Mer</h1>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide col w-100 p-0 mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($merFirst as $meFirst)
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/images/gallery/mer/'.$meFirst->image) }}" class="d-block w-100" alt="{{ $meFirst->alt }}">
                        </div>
                    @endforeach
                    @foreach($mer as $me)
                        <div class="carousel-item">
                            <img src="{{ URL::to('/images/gallery/mer/'.$me->image) }}" class="d-block w-100" alt="{{ $me->alt }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <h1>Gallery Animaux</h1>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide col w-100 p-0 mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($natureFirst as $natuFirst)
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/images/gallery/nature/'.$natuFirst->image) }}" class="d-block w-100" alt="{{ $natuFirst->alt }}">
                        </div>
                    @endforeach
                    @foreach($nature as $natu)
                        <div class="carousel-item">
                            <img src="{{ URL::to('/images/gallery/nature/'.$natu->image) }}" class="d-block w-100" alt="{{ $natu->alt }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <h1>Gallery Motos</h1>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide col w-100 p-0 mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($motosFirst as $motoFirst)
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/images/gallery/motos/'.$motoFirst->image) }}" class="d-block w-100" alt="{{ $motoFirst->alt }}">
                        </div>
                    @endforeach
                    @foreach($motos as $moto)
                        <div class="carousel-item">
                            <img src="{{ URL::to('/images/gallery/motos/'.$moto->image) }}" class="d-block w-100" alt="{{ $moto->alt }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="container">
        <h1>Gallery Voitures</h1>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide col w-100 p-0 mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($voituresFirst as $voitureFirst)
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/images/gallery/voitures/'.$voitureFirst->image) }}" class="d-block w-100" alt="{{ $voitureFirst->alt }}">
                        </div>
                    @endforeach
                    @foreach($voitures as $voiture)
                        <div class="carousel-item">
                            <img src="{{ URL::to('/images/gallery/voitures/'.$voiture->image) }}" class="d-block w-100" alt="{{ $voiture->alt }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

@endsection
