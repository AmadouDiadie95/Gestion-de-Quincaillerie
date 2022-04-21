<?php include('StartPage.blade.php') ?>


        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Liste des Fournisseur</h3>
                        <p class="text-subtitle text-muted">liste de tous les Fournisseur</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Fournisseurs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste des Fournisseur</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Datatable
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Tel</th>
                                <th>Adresse</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if ($allSuppliers)
                                @foreach($allSuppliers as $supplier)
                                    <tr>
                                        <td> <a href="detail-fournisseur?id={{$supplier->id}}" > {{ $supplier->name }} </a> </td>
                                        <td>{{ $supplier->email }}</td>
                                        <td>{{ $supplier->tel }}</td>
                                        <td>{{ $supplier->address }}</td>
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

