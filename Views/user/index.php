<!-- CONTENU  -->
<div class="main">
    <h3>Liste des utilisateurs</h3>

    <?php
    // var_dump($users);
    // die;
    ?>

    <!-- AFFICHAGE-->
    <div id="tableau-user">
        <table class="L1000">
            <thead>
                <tr>
                    <th colspan="5">
                        <h3 style="color: #ffffff; text-align: center;">Utilisateurs</h3>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th colspan="4">
                        <?php
                        // ALERTE
                        if (!empty($_SESSION['alerte'])) {
                            echo ' <div class="erreurMessage">' . $_SESSION['alerte'] . '</div>';
                            $_SESSION['alerte'] = "";
                        }
                        ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $users) : ?>
                    <tr>
                        <td><a href="user/lire/<?= $users->id ?>"><?= $users->cv . " " . $users->nom . " " . $users->prenom ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</div>