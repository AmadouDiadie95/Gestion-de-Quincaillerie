<?php include('StartPage.blade.php') ?>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Detail d'un Article</h3>
                        <p class="text-subtitle text-muted">Informations & Details</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/Gestion-de-Quincaillerie/public">Articles</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail d'un Article
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
                                <h4 class="card-title">Detail d'un Article</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="name-column">Nom :</label>
                                                    <strong>{{ $articleDetail->name }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Description :</label>
                                                    <strong>{{ $articleDetail->description }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Prix :</label>
                                                    <strong>{{ $articleDetail->price }} Fcfa</strong>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Quantité en Stock :</label>
                                                    <strong>{{ $articleDetail->quantity }}</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Categorie :</label>
                                                <strong>{{ $articleDetail->category_name }}</strong>
                                            </div>
                                            <div class="col-12 d-flex justify-content-start mt-3">
                                                <a href="modifier-article?id={{$articleDetail->id}}"
                                                        class="btn btn-outline-primary me-3 mb-3">Modifier</a>
                                                <a href="supprimer-article?id={{$articleDetail->id}}"
                                                        class="btn btn-outline-danger me-1 mb-3">Supprimer</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic multiple Column Form section end -->
        </div>
<?php include('EndPage.blade.php') ?>

