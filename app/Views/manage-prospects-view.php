<?= $this->extend('header')?>
<?= $this->section('content')?>
    <br>
    <h3>Gestion des Fiches Signalétiques</h3>
    <br>
    <div class="row">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Enregistrer une Fiche</button>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Entreprise</th>
                <th scope="col">Adresse</th>
                <th scope="col">Site Web</th>
                <th scope="col">Chiffre d'Affaires</th>
            </tr>
            </thead>
            <tbody id="list-user">

            </tbody>
        </table>
    </div>
    <br>
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Créer une Fiche Signalétique</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-create-prospect">
                    <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nom de L'Entreprise" name="nom-entreprise" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Site Internet" name="site-entreprise" required>
                                </div>
                            </div>
                        <br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Adresse" name="adresse-entreprise" required>
                                </div>
                                <div class="col">
                                    <input type="tel" class="form-control" placeholder="Téléphone" name="tel-entreprise" required>
                                </div>
                            </div>
                        <br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" name="activite-entreprise" rows="3" placeholder="Activite de l'Entreprise">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Chiffre d'Affaire" name="chiffre-affaire" required>
                                </div>
                            </div>
                        <br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Environnement économique du prospect" name="env-prospect" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Dirigeant : nom, profil" name="dirigeant" required>
                                </div>
                            </div>
                        <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section("script") ?>
    <script src="/js/admin-script.js"></script>
<?= $this->endSection() ?>