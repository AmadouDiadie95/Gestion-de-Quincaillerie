<?php include('StartPage.blade.php') ?>
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
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Liste des Ventes</h3>
                        <p class="text-subtitle text-muted">liste de toutes les Ventes</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Ventes</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste des Ventes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                            Nouvelle Vente
                        </button>
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

<?php include('EndPage.blade.php') ?>

