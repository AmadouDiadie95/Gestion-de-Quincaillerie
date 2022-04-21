<?php include('StartPage.blade.php') ?>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Ajouter un Fournisseur</h3>
                        <p class="text-subtitle text-muted">Utiliser cet Formulaire pour Ajouter un Nouveau Fournisseur</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/Gestion-de-Quincaillerie/public">Fournisseurs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter un Fournisseur
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nouveau Fournisseur</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" method="post" action="{{url('enregistrer-fournisseur')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label>Nom :</label>
                                                    <input type="text" class="form-control"
                                                           name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Numero de Telephone :</label>
                                                    <input type="text" class="form-control"
                                                           name="tel">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Email :</label>
                                                    <input type="email" class="form-control"
                                                           name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label>Adresse :</label>
                                                    <input type="text" class="form-control"
                                                           name="address">
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-start mt-3">
                                                <button type="submit"
                                                        class="btn btn-primary me-3 mb-3">Enregistrer</button>
                                                <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-3">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic multiple Column Form section end -->
        </div>
<?php include('EndPage.blade.php') ?>

