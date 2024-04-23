@extends('layout')
@section('title','Site web de présentation de GAKOSSO AICHA')
@section('content')
    <section class="bg-blue_dusky">
        <div class="container p-4">
            <div class="row align-items-center">
            <div class="offset-lg-1 col-lg-4 p-4 mt-3">
                <h1 class="title text-pink_fair"><strong>Aïcha GAKOSSO</strong></h1>
                <p class="text-white">
                    <small>Etudiante en master 1 en gestion financière et administrative d'entreprise à <strong>l'ESGEA</strong> au Congo-Brazzaville et fondatrice de <strong>Pretty cosmetics</strong>.</small>
                </p>
                <a href="#contact" class="btn btn-pink_fair text-white p-3">Contactez-moi <i class="bi bi-arrow-right"></i></a>
                <P class="p-2">
                    <a href="#rien"><i class="bi bi-instagram text-white fs-3 me-2"></i></a>
                    <a href="#rien"><i class="bi bi-tiktok text-white fs-3"></i></a>
                </P>
            </div>
            <div class="offset-lg-2 col-lg p-4">
                <img src="{{url('assets/shasha_presentation1.png')}}" alt="photo d'Aïcha" title="Présentation visuel d'Aïcha" class="img-fluid" />
            </div>
            </div>
        </div>
    </section>
    <section class="mt-3 container">
        <h1 class="text-pink_fair align text-center"><strong>Mes actualités</strong></h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="">
                    <video></video>
                </div>
                <div class="">
                    <h6>Marathon</h6>
                    <i class="bi bi-heart text-pink_fair"></i>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
                    <p>Mardi 17 Septembre 2024</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6"></div>
            <div class="col-lg-4 col-md-6"></div>
        </div>
    </section>
        <h1 class="text-pink_fair text-center">Contactez-moi</h1>
    <section class="bg-blue_dusky">
        <div class="container p-3 text-white">
            <div class="row">
                <form action="{{route('contactez_moi')}}" method="POST" class="row p-2 g-3 col-md-6">
                    @csrf
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input name="nom" id="nom" type="text" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input name="prenom" id="prenom" type="text" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <label for="numero" class="form-label">Numéro de téléphone</label>
                        <select name="codePays" class="form-select">
                            <option value="+242">+242</option>
                            <option value="+243">+243</option>
                        </select>
                        <!-- <i class="bi bi-arrows-expand-vertical"></i> -->
                        <!-- <input name="numero" type="text" id="numero" class="col form-control"/> -->
                    </div>
                    <div class="col-md-6">
                        <label for="mail" class="form-label">Mail</label>
                        <input name="mail" type="email" id="mail" class="form-control"/> 
                    </div>
                    <div class="">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="10"></textarea>
                    </div>
                        <input type="submit" value="Envoyer" class="btn btn-pink_fair p-2 text-white mt-2 fs-5"/>
                </form>
                <div class="col-md-6">
                    <img src="{{url('assets/shasha_presentation1.png')}}" alt="photo d'Aïcha" title="Présentation visuel d'Aïcha" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
@endsection