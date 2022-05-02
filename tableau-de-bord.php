<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>   

    <title>Rapid Note - Tableau de bord</title>
</head>
<body>
    <?php include 'header.php' ?>
    
    <main class="main">
        <div class="dashboard">
            <div class="dashboard__top">
                <div class="dashboard__top__logo">
                    <img src="public/images/logo.pneg" alt="">
                </div>

                <div class="dashboard__user">
                    <div class="dashboard__user__icon">

                    </div>

                    <p class="dashboard__user__name">
                        username
                    </p>

                    <i></i>
                </div>
            </div>

            <div class="dashboard__main">
                <div class="dashboard__main__menu">
                    <ul class="">
                        <li>
                            <a href="tableau-de-bord.php">
                                Tableau de bord
                            </a>
                        </li>    
                        <li>
                            <a href="acheter.php">
                                Acheter
                            </a>
                        </li>

                        <li>
                            <a href="vendre.php">
                                Vendre
                            </a>
                        </li>

                        <li>
                            <a href="">
                                Parrainages
                            </a>
                        </li>

                        <li>
                            <a href="">
                                Historique
                            </a>
                        </li>

                        <li>
                        <a href="">
                        Réglages
                        </a>
                        </li>

                        <li>
                            <a href="">
                                Assistance
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="dashboard__main__content">
                    <div class="infos">
                        <div class="infos__top">
                            <h2>
                                Etat du compte
                            </h2>
                        </div>

                        <div class="infos__top__curr">
                            <div class="curr-top">
                                Bitocin logo
                                <span>
                                    unit 1 USD
                                </span>
                            </div>

                            <div class="curr-top">
                                Achat:
                                <button>
                                    Achat
                                </button>
                            </div>

                            <div class="curr-top">
                                Vente
                                <span>
                                    unit 1 USD
                                </span>
                            </div>
                        </div>

                        <ul>
                            <li>
                                Total des achats: 15
                            </li>
                            <li>
                                Total des ventes: 10
                            </li>

                            <li>
                                Nombre de parrainages
                            </li>
                        </ul>


                    </div>

                    <div class="history">
                        <table>
                            <tr>
                                <th>
                                    Toutes les opérations
                                </th>
                            </tr>

                            <tr>
                                <th>
                                    Achat
                                </th>
                            </tr>

                            <tr>
                                <th>
                                    Vente
                                </th>
                            </tr>

                            <tr>
                                options
                            </tr>

                            <tr>
                                <td>
                                    Date
                                </td>
                                <td>
                                    Nature
                                </td>

                                <td>
                                    Montant
                                </td>
                            </tr>

                            
                        </table>
                    </div>
                </div>

               
            </div>
        </div>
    </main>
</body>
</html>