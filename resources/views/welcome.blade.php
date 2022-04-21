<?php include('StartPage.blade.php') ?>
<link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">
        <div class="page-heading">
            <h3>Tableau de Bord</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <a href="/Gestion-de-Quincaillerie/public/liste-categorie"  class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon purple">
                                                <i class="bi bi-grid-1x2-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Categories</h6>
                                            <h6 class="font-extrabold mb-0">{{$total_categorie}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <a href="/Gestion-de-Quincaillerie/public/liste-article"  class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="bi bi-stack"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Articles</h6>
                                            <h6 class="font-extrabold mb-0">{{$total_article}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <a href="/Gestion-de-Quincaillerie/public/liste-fournisseur" class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="bi bi-pen-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Fournisseurs</h6>
                                            <h6 class="font-extrabold mb-0">{{$total_fournisseur}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <a href="/Gestion-de-Quincaillerie/public/etat-caisse" class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="iconly-boldBookmark"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Commandes</h6>
                                            <h6 class="font-extrabold mb-0">{{$total_commande}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        @php
                            $vente = new \App\Models\Vente() ;
                        @endphp
                        <script>
                            function add(data)
                            {
                                $vente = data ;
                            }
                        </script>
                        <div class="page-heading">
                            <section class="section">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <h3 class="col-lg-10 col-md-6">Liste des Ventes</h3>
                                            <div class="col">
                                                <button type="button" class="btn btn-success"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#inlineForm">
                                                    Nouvelle Vente
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped" id="table1">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Client</th>
                                                <th>Article</th>
                                                <th>Quantité Choisie</th>
                                                <th>Prix Total</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if ($allVentes)
                                                @foreach($allVentes as $vente)
                                                    <tr>
                                                        <td>{{ $vente->date }}</td>
                                                        <td>{{ $vente->client_name }}</td>
                                                        <td>{{ $vente->article_name }}</td>
                                                        <td>{{ $vente->quantity_choiced }}</td>
                                                        <td>{{ $vente->total_price }} Fcfa</td>
                                                        <td>
                                                            <a href="" type="button"
                                                               onclick="add({{$vente}});" class="btn btn-outline-primary"
                                                               data-bs-toggle="modal" data-bs-target="#detailVente">
                                                                Detail
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </section>
                        </div>

                        <!--login form Modal -->
                        <div class="modal fade text-left" id="inlineForm" tabindex="-1"
                             role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                 role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Nouvelle Vente </h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form method="post" action="{{url('enregistrer-vente')}}">
                                        @csrf
                                        <div class="modal-body">
                                            <label>Date: </label>
                                            <div class="form-group">
                                                <input type="date"name="date"
                                                       class="form-control" required>
                                            </div>
                                            <label>Nom Complet du Client: </label>
                                            <div class="form-group">
                                                <input type="text" name="client_name"
                                                       class="form-control" required>
                                            </div>
                                            <label>Nom de l'Article: </label>
                                            <div class="form-group">
                                                <input type="text" name="article_name"
                                                       class="form-control" required>
                                            </div>
                                            <label>Quantité Choisie: </label>
                                            <div class="form-group">
                                                <input type="number" name="quantity_choiced"
                                                       class="form-control" required>
                                            </div>
                                            <label>Prix Total (En fcfa) : </label>
                                            <div class="form-group">
                                                <input type="number" name="total_price"
                                                       class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="submit" class="btn btn-success ml-1"
                                            >
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Enregistrer</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--login form Modal -->
                        <div class="modal fade text-left" id="detailVente" tabindex="-1"
                             role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                 role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Detail Vente </h4>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>Date: </label>
                                        <div class="form-group">
                                            <strong>{{ $vente->date }}</strong>
                                        </div>
                                        <label>Nom Complet du Client: </label>
                                        <div class="form-group">
                                            <strong>{{ $vente->client_name }}</strong>
                                        </div>
                                        <label>Nom de l'Article: </label>
                                        <div class="form-group">
                                            <strong>{{ $vente->article_name }}</strong>
                                        </div>
                                        <label>Quantité Choisie: </label>
                                        <div class="form-group">
                                            <strong>{{ $vente->quantity_choiced }}</strong>
                                        </div>
                                        <label>Prix Total (En fcfa) : </label>
                                        <div class="form-group">
                                            <strong>{{ $vente->total_price }}</strong>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                        <a href="supprimer-vente?id={{$vente->id}}"
                                           class="btn btn-light-danger ml-1" >
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Supprimer</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="assets/images/faces/1.jpg" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">John Duck</h5>
                                    <h6 class="text-muted mb-0">@johnducky</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Somme Total dans la Caisse : </h4>
                        </div>
                        <div class="card-body">
                            <h2> {{$total_somme_caisse}} Fcfa</h2>
                        </div>
                        <div class="text-center card-footer">
                            <button id="info"
                                    class="btn btn-outline-primary btn-lg btn-block">Details</button>
                        </div>
                    </div>
                </div>
            </section>

        </div>
<script>
    document.getElementById('info').addEventListener('click', (e) => {
        Swal.fire({
            icon: 'info',
            title: 'Total Somme Vente : {{$somme_total_vente}} Fcfa',
            text: 'Total Somme Achat : {{$somme_total_achat}} Fcfa',
            footer: 'Detail Caisse'
        })
    })
</script>
<script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
<?php include('EndPage.blade.php') ?>

