

    <nav class="nav2" >
        <input type="checkbox" id="checkk">
        <label for="checkk" class="checkbutton">
          <i class="fas fa-bars"></i>
        </label>
        <ul class="list">
        <li><a class="<?php echo $current_page == 'tableau-de-bord.php' ? 'active':NULL ?>" href="tableau-de-bord.php"><i class="fas fa-columns"></i> Tableau de bord</a></li>
              <?php if ($_SESSION['user']['role'] == 'btob' || $_SESSION['user']['role'] =="btoc"){?>

                <li><a class="<?php echo $current_page == 'departement-immobilier.php' ? 'active':NULL ?>"  href="departement-immobilier.php" ><i class="fa fa-building"></i> Département immobilier</a></li>

                             <li><a class="<?php echo $current_page == 'transfert-vers-exchange.php' ? 'active':NULL ?>"  href="transfert-vers-exchange.php" ><i class="fas fa-exchange-alt"></i> Transfert vers Exchange</a></li>


                             <li><a class="<?php echo $current_page == 'promotion-carburant-adherent.php' ? 'active':NULL ?>"  href="promotion-carburant-adherent.php" > <i class="fa fa-gas-pump"></i> Promotion carburant</a></li>


                         <li><a class="<?php echo $current_page == 'transfert-entre-adherants.php' ? 'active':NULL ?>"  href="transfert-entre-adherants.php" ><i class="fas fa-exchange-alt"></i> Transfert entre adhérents</a></li>



                 <li><a class="<?php echo $current_page == 'parrainages.php' ? 'active':NULL ?>"  href="parrainages.php" > <i class="fas fa-users"></i> Parrainages</a></li>

                 <li><a class="<?php echo $current_page == 'gestion-portefeuille.php' ? 'active':NULL ?>"  href="gestion-portefeuille.php" >  <i class="fas fa-sync-alt"></i> Conversion</a></li>


                 <li><a class="<?php echo $current_page == 'historique-adherant.php' ? 'active':NULL ?>" href="historique-adherant.php" > <i class="fas fa-history"></i> Historique</a></li>

                  <li><a class="<?php echo $current_page == 'mon-abonnement.php' ? 'active':NULL ?>" href="mon-abonnement.php" >  <i class="fas fa-user"></i> Mon abonnement</a></li>


             <?php }


              if ($_SESSION['user']['role'] == 'btob'){?>
              <li><a class="<?php echo $current_page == 'reassort.php' ? 'active':NULL ?>"  href="reassort.php" > <i class="fas fa-shopping-basket"></i> Réassort</a></li>

                <li><a class="<?php echo $current_page == 'points-fidelite-professionnels.php' ? 'active':NULL ?>"  href="points-fidelite-professionnels.php" > <i class="fas fa-exchange-alt"></i> Remises professionels</a></li>

                <li><a class="<?php echo $current_page == 'points-fidelite-particuliers.php' ? 'active':NULL ?>" href="points-fidelite-particuliers.php" > <i class="fas fa-exchange-alt"></i> Remises particuliers</a></li>

                <li><a class="<?php echo $current_page == 'inscrire-mon-ebe.php' ? 'active':NULL ?>" href="inscrire-mon-ebe.php" >  <i class="fas fa-money-check-alt"></i> Inscrire mon ebe.php</a></li>


              <?php }

  if ($_SESSION['user']['role'] == 'promoCarb'){?>

      <li><a class="<?php echo $current_page == 'gestion-promotion-carburant.php' ? 'active':NULL ?>" href="gestion-promotion-carburant.php" >
      <i class="fa fa-gas-pump"></i>Gestion promo carburant</a></li>


    <?php }

            if ($_SESSION['user']['role'] == 'admin'){?>

                   <li><a class="<?php echo $current_page == 'abonnements-en-cours.php' ? 'active':NULL ?>" href="abonnements-en-cours.php" ><i class="fas fa-search"></i> Abonnements en cours</a></li>

                 <li><a class="<?php echo $current_page == 'liste-des-points-fidelite.php' ? 'active':NULL ?>" href="liste-des-points-fidelite.php" ><i class="fas fa-search"></i> Liste des points fidélité</a></li>

                 <li><a class="<?php echo $current_page == 'actualisation-du-stock.php' ? 'active':NULL ?>" href="actualisation-du-stock.php" ><i class="fas fa-plus-circle"></i> Actualisation du stock</a></li>

                 <li><a class="<?php echo $current_page == 'historique-d-actualisation.php' ? 'active':NULL ?>" href="historique-d-actualisation.php" ><i class="fas fa-history"></i> Historique d'actualisation</a></li>

                <li><a class="<?php echo $current_page == 'transfert-aux-adherants.php' ? 'active':NULL ?>" href="transfert-aux-adherants.php" ><i class="fas fa-exchange-alt"></i> Transfert aux adherants</a></li>


                  <li><a class="<?php echo $current_page == 'liste-des-professionnels.php' ? 'active':NULL ?>" href="liste-des-professionnels.php" ><i class="fas fa-list"></i> Liste des professionnels</a></li>

                  <li><a class="<?php echo $current_page == 'liste-des-particuliers.php' ? 'active':NULL ?>" href="liste-des-particuliers.php" ><i class="fas fa-list"></i> Liste des particuliers</a></li>


                  <li><a class="<?php echo $current_page == 'prospects-en-attente.php' ? 'active':NULL ?>" href="prospects-en-attente.php" ><i class="fas fa-list"></i> Prospects en attente</a></li>


                  <li><a class="<?php echo $current_page == 'resultats-du-jeu-concours.php' ? 'active':NULL ?>" href="resultats-du-jeu-concours.php" ><i class="fas fa-list-ol"></i> Résultats trophées EBE </a></li>

                  <li><a class="<?php echo $current_page == '' ? 'active':NULL ?>" href="https://www.gnou.o2switch.net:2096/" > <i class="far fa-envelope"></i> Messagerie Fineblock </a></li>

                  <li><a class="<?php echo $current_page == '' ? 'active':NULL ?>" href="https://www.gnou.o2switch.net:2096/" > <i class="far fa-envelope"></i> Messagerie Permis </a></li>


                  <li><a class="<?php echo $current_page == 'reglements.php' ? 'active':NULL ?>" href="reglements.php" ><i class="fas fa-money-bill-wave"></i> Règlements</a></li>

                   <li><a class="<?php echo $current_page == 'newsletters.php' ? 'active':NULL ?>" href="newsletters.php" ><i class="far fa-newspaper"></i> Newsletters</a></li>




           <?php }

             if ($_SESSION['user']['role'] == 'btoc'){?>
                <li><a class="<?php echo $current_page == 'upgrader' ? 'active':NULL ?>" href="upgrader.php" ><i class="fas fa-arrow-up"></i> Upgrader</a></li>

           <?php } ?>

            <li><a class="<?php echo $current_page == 'actualites.php' ? 'active':NULL ?>" href="actualites.php" >  <i class="fas fa-newspaper"></i> Actualités </a></li>

            <li><a class="<?php echo $current_page == 'historique-newsletters.php' ? 'active':NULL ?>" href="historique-newsletters.php" >  <i class="fas fa-history"></i> Historique newsletters </a></li>


                  <li><a class="<?php echo $current_page == 'espace-personnel.php' ? 'active':NULL ?>" href="espace-personnel.php" > <i class="fas fa-store"></i> Shopping Center P... </a></li>

                  <li><a class="<?php echo $current_page == 'contact-support.php' ? 'active':NULL ?>" href="contact-support.php" >  <i class="fas fa-headset"></i> Contacter le support</a></li>


            <li><a class="<?php echo $current_page == 'parametres.php' ? 'active':NULL ?>" href="parametres.php" >  <i class="fas fa-cogs"></i> Paramètres</a></li>

        </ul>
      </nav>
      <section></section>

      <style>
    .nav2{
      height: 80px;
      margin: 60px auto;
      width: 100%;
      position: fixed;
      background-color: white;
      z-index: 99999;
      display: none;

    }

    .nav2 .list{
      float: right;
      height: 100vh;
      margin-right: 0;
      padding-top: 0;
    }

    .nav2 ul li{
      display: inline-block;
      line-height: 80px;
      margin: 0 5px;

    }

    .nav2 ul li a{
      font-size: 1.1em;
      font-weight: bold;
      border-radius: 3px;
      margin: auto 10px;
      cursor: pointer;
    }
    .checkbutton{
      font-size: 30px;
      color: white;
      float: right;
      line-height: 80px;
      margin-right: 40px;
      cursor: pointer;
      display: none;
    }
    #checkk{
      display: none;
    }
    @media (max-width: 952px){
      .nav2 ul li a{
        font-size: 16px;
      }
    }
    @media (max-width: 1279px){
      .checkbutton{
        display: block;
      }

      .checkbutton i{
        color: #D1AF52;
      }

      .checkbutton:hover i{
        z-index:  -9999;
      }

      .nav2{
          position: fixed;
          z-index: 9999;
          display: block;
          background:  #212121;
      }

      .list{
        position: fixed;
        margin: -120px auto;
        height: 100vh;
        width: 80%;
        height: auto;
        background: white;
        left: -100%;
        z-index: 999;
        text-align: center;
        transition: all .5s;
      }
      .nav2 .list li{
        display: block;
        margin: 8px 0;
        line-height: 30px;
        padding-top: 0;
        text-align: left;
      }

      .nav2 .list li a{
        font-size: 20px;
      }
      a:hover,a.active{
        background: none;
        color:  #D1AF52;
      }
      #checkk:checked ~ ul{
        left: 0;
      }
    }
    section{
      background-size: cover;
      z-index: 1;
      opacity: 1;
    }
      </style>

    </body>
  </html>