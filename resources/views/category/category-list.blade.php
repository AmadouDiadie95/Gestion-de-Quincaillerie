<?php include('StartPage.blade.php') ?>


        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Liste des Categories</h3>
                        <p class="text-subtitle text-muted">liste de toutes les categories d'Articles</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste des Categories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Simple Datatable
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Nombre d'Article</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if ($allCategories)
                                @foreach($allCategories as $category)
                                    <tr>
                                        <td> <a href="detail-categorie?id={{$category->id}}" > {{ $category->name }} </a> </td>
                                        <td>{{ $category->description }}</td>
                                        <td>{{ $category->number_of_article }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>


<?php include('EndPage.blade.php') ?>

