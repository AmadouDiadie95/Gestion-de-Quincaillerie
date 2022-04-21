<?php include('StartPage.blade.php') ?>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Modifier une Categorie</h3>
                        <p class="text-subtitle text-muted">Utiliser cet Formulaire pour Modifier une Catgeorie</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/Gestion-de-Quincaillerie/public">Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifier une Categorie
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
                                <h4 class="card-title">Modifier Categorie</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" method="post" action="{{url('update-categorie?id='.$categoryDetail->id)}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="name-column">Nom :</label>
                                                    <input type="text" id="name-column" class="form-control" name="name"
                                                           value="{{$categoryDetail->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                                              rows="3" >{{$categoryDetail->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-start">
                                                <button type="submit"
                                                        class="btn btn-success me-3 mb-1">Mettre a Jour</button>
                                                <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
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

