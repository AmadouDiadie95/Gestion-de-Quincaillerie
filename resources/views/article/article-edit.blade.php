<?php include('StartPage.blade.php') ?>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Modifier un Article</h3>
                        <p class="text-subtitle text-muted">Utiliser cet Formulaire pour Modifier un Article</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/Gestion-de-Quincaillerie/public">Articles</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifier un Article
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
                                <h4 class="card-title">Modifier Article</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" method="post" action="{{url('update-article?id='.$articleDetail->id)}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label for="name-column">Nom :</label>
                                                    <input type="text" id="name-column" class="form-control"
                                                           name="name" value="{{$articleDetail->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Description :</label>
                                                    <textarea class="form-control" name="description"
                                                              rows="3"> {{$articleDetail->description}} </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Prix :</label>
                                                    <input type="number" class="form-control"
                                                           name="price" min="0" value="{{$articleDetail->price}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Quantité en Stock :</label>
                                                    <input type="number" class="form-control"
                                                           name="quantity" min="1" value="{{$articleDetail->quantity}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Categorie :</label>
                                                <select class="choices form-select" name="category_id">
                                                    @if ($allCategories)
                                                        @foreach($allCategories as $category)
                                                            <option selected="{{$articleDetail->category_name}}" value="{{ $category->id }} ">{{ $category->name }} </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-12 d-flex justify-content-start mt-3">
                                                <button type="submit"
                                                        class="btn btn-success me-3 mb-3">Mettre a Jour</button>
                                                <button type="reset"
                                                        class="btn btn-light-danger me-1 mb-3">Reset</button>
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

