<?= $this->extend('header')?>


<?= $this->section('content')?>
    <br>
<h3>Gestion des Utilisateurs</h3>
    <br>
<div class="row">
        <form id="form-create-user-account" class="text-center">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="col">
                    <select id="inputState" class="form-control" name="user-type" required>
                        <option selected>Type d'Utilisateur</option>
                        <option value="1">Client</option>
                        <option value="2">Commercial</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Login" name="login" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success">Ajouter nouvel utilisateur</button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Type Utilisateur</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody id="list-user">

            </tbody>
        </table>
    </div>
    <br>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modification Utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-edit-user-account">
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="UserName" name="edit-username" required>
                                <input type="text" hidden name="user-id">
                            </div>
                            <div class="col">
                                <select id="inputState" class="form-control" name="edit-user-type" required>
                                    <option value="1">Client</option>
                                    <option value="2">Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Login" name="edit-login" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Password" name="edit-password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>



<?= $this->section("script") ?>
    <script src="/js/admin-script.js"></script>
<?= $this->endSection() ?>