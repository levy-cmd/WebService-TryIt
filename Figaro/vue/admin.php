<?php require_once '../controleur/FormController.php'; 
  $articles=$_SESSION["articles"]; 
  $users=$_SESSION["users"]; 
  $currentUser=$_SESSION["currentUser"]; 
  $categories=$_SESSION["categories"]; 
?>
<script src="//code.jquery.com/jquery-3.3.1.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Figaro Gestion des Users
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Account
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">SETTINGS</li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class="divider"></li>
                        <li>
                            <form method="post" action="../../controleur/FormController.php?logout">
                                <!-- <a href="#" name="logout">Logout</a> -->
                                <button type="submit" name="u_logout" style="margin-left:20px"> Logout </button>
                            </form>
                            
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar nav-tabs">
        <ul class="nav nav-pills nav-stacked nav-tabs">
            <li class="active"><a data-toggle="tab" href="#1">Liste des utilisateurs </a></li>
            <li><a data-toggle="tab" href="#2">Liste des articles</a></li>
            <li><a data-toggle="tab" href="#3">Liste des catégories</a></li>
            <li><a data-toggle="tab" href="#4">Ajouter utilisateurs</a></li>
            <li><a data-toggle="tab" href="#5">Ajouter articles</a></li>
            <li><a data-toggle="tab" href="#6">Ajouter categories</a></li>
        </ul>
    </div>
    <div class="col-md-10 tab-content">
        <div id="1" class="panel panel-default tab-pane fade in active">
            <div class="panel-heading">
                Liste des utilisateurs
            </div>
            <div class="panel-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Login</th>
                            <th>Password</th>
                            <th>Is Admin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user->id ?></td>
                            <td><?= $user->nom ?></td>
                            <td><?= $user->prenom ?></td>
                            <td><?= $user->login ?></td>
                            <td><?= $user->mdp ?></td>
                            <td><?= $user->admin ?></td>
                            <td> <button value=<?= $user->id ?> > <a href="deleteusers.php?id=<?= $user->id ?>" class="trash"><span class="glyphicon glyphicon-trash"></span></a></button> </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Login</th>
                            <th>Password</th>
                            <th>Is Admin</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div id="2" class="panel panel-default tab-pane ">
            <div class="panel-heading">
                Liste des articles
            </div>
            <div class="panel-body">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Texte</th>
                            <th>catégorie</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($articles as $article) : ?>
                        <tr>
                            <td><?= $article->id ?></td>
                            <td><?= $article->titre ?></td>
                            <td><?= substr($article->texte, 0, 300) . '...' ?></td>
                            <td><?= $article->categorie ?></td>
                            <td><?= $article->dateCreation ?></td>
                            <td> <button value=<?= $article->id ?> > <a href="deletearticle.php?id=<?= $article->id ?>" class="trash"><span class="glyphicon glyphicon-trash"></span></a> </button> </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Texte</th>
                            <th>catégorie</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>                
            </div>
        </div>
        <div id="3" class="panel panel-default tab-pane ">
            <div class="panel-heading">
                Liste des catégories
            </div>
            <div class="panel-body">
            <table id="example3" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Categorie</th>
                            <th>Nom</th>                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $categorie) : ?>
                        <tr>
                            <td><?= $categorie->id ?></td>
                            <td><?= $categorie->libelle ?></td>
                            <td> <button value=<?= $categorie->id ?> > <a href="deletecategorie.php?id=<?= $categorie->id ?>" class="trash"><span class="glyphicon glyphicon-trash"></span></a></button> </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Categorie</th>
                            <th>Nom</th>                            
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div id="4" class="panel panel-default tab-pane ">
            <div class="panel-heading">
                Ajouter Utilisateurs
            </div>
            <div class="panel-body">
            
            <!-- ../../controleur/FormController.php -->
            <form method="post" action="../../controleur/FormController.php" id="user_form">
                <input type="text"  name="user_nom" class="col-md-4" placeholder="Nom ">
                <input type="text"  name="user_prenom" class="col-md-offset-2 col-md-4" placeholder="Prenom">
                <input type="text"  name="user_login" class="col-md-4" placeholder="Login" style="margin-top:20px">
                <input type="password"  name="user_mdp" class="col-md-offset-2 col-md-4" placeholder="Mot de passe" style="margin-top:20px">
                <select name="user_admin" id="user_admin" class="col-md-offset-2 col-md-4" style="margin-top:20px;padding-right: 15px;padding-left: 15px;line-height: inherit;">
                    <option value="">Profil Utilisateurs</option>
                    <option value="0">Admintrateur</option>
                    <option value="1">Editeur</option>
                    <option value="2">visiteur</option>
                </select>
                <!-- <input type="number" max="1" min="0"  name="u_admin" class="col-md-offset-3 col-md-4" placeholder="Type" style="margin-top:20px"> -->
                <button type="submit" name="user_form" style="margin-left:20px"> Enregistrer </button>
            </form>
                     

            </div>
        </div>

        <div id="5" class="panel panel-default tab-pane ">
            <div class="panel-heading">
                Ajouter Articles
            </div>
            <div class="panel-body">    
            <form method="post" action="../../controleur/FormController.php" id="article_form">
                <input type="text"  name="article_titre" class="col-md-4" placeholder="Titre ">
                <select id="sel1" name="article_categorie" class="col-md-offset-2 col-md-4">
                        <?php foreach ($categories as $categorie) : ?>
                    <option value="<?= $categorie->id ?>"><?= $categorie->libelle ?></option>
                    <?php endforeach ?>
                </select>
                <textarea   name="article_texte" class=" col-md-4" style="margin-top:20px" placeholder="Votre Texte"></textarea> 
                <button type="submit" name="article_form" style="margin-left:20px"> Enregistrer </button>
            </form>                     
            </div>
        </div>

        <div id="6" class="panel panel-default tab-pane ">
            <div class="panel-heading">
                Ajouter Catégories
            </div>
            <div class="panel-body">                        
            <form method="post" action="../../controleur/FormController.php" id="categorie_form">
                <input type="text"  name="categorie_nom" class="col-md-4" placeholder="Nom ">
                <button type="submit" name="categorie_form" style="margin-left:20px"> Enregistrer </button>
            </form>                     
            </div>
        </div>



    </div>

</div>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
    $('#example2').DataTable();
    $('#example3').DataTable();
    $('#example4').DataTable();
    $('#example5').DataTable();
    $('#example6').DataTable();
} );
</script>