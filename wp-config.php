<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ybpzdowjbolnet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'ybpzdowjbolnet' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'exXzJW5jm8YDnfF' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'ybpzdowjbolnet.mysql.db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TmY|Hy kUEK>4>6*33R@qjzDI3C*gA0_7LcM(ni/Jc5XoTNE.|E[Mqz$H6lh-I]G' );
define( 'SECURE_AUTH_KEY',  'F$ZN938Ap^|e)C]!)%iC:tjgND5-oU:NtgPA?S%gZ;Kuxt)x>34JD$9A1iaY[Ek7' );
define( 'LOGGED_IN_KEY',    '[1tA{Qv`Zg9ZjeFW#Lz>Z-jMVI:4^09Z^YlzNr>ciVG{l;6ou4<m5`.$qx]i]xm}' );
define( 'NONCE_KEY',        '^xEVe[|f|%qva<G[^sRdx^K:dlPtA@O9j^vIxH5Mdk7zeQeRC<R{)SNwIxSHet`g' );
define( 'AUTH_SALT',        'Y6aG`9YtTT&v(*LInhQDWM;$AHcf#qJ.d+F!EuxiHD9(v~<!-xV^U[pGEgyvV#Xz' );
define( 'SECURE_AUTH_SALT', '[mif&;(2#54N%!9R[{%w&hU7t%l;3kb8[ldu#]JY.KSf#3 <RZ /t@VALW_?:Vo{' );
define( 'LOGGED_IN_SALT',   '-mj:Ecj=-1w=nCLT($!5vs#_0-_4UYefu>|11SH!E8Xlvn3t~Sm}vs|[NQr!},TF' );
define( 'NONCE_SALT',       ')=^lVWa}]l,5%|<- O~:Iw&QCny5tGe&adwL:v3.F-d4gUtG(MJ_Y0,)U3(hje.3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
