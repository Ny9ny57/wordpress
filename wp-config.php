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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mot_de_passe' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'x99|9$7yo[^lU[G|#a/l^}~cESufiOr419)G/!wV,b&b{BF`fPeVo)d.Br Z}~*I' );
define( 'SECURE_AUTH_KEY',  'V%h79!iA,$jm!Uh!i M*}{f{L;`}LzOsdp&Iw3wdf6{VSfmK)MJv.l/b*%5?~Ghn' );
define( 'LOGGED_IN_KEY',    '0F7^zBiG1!r#{`KqK]#n+**5C~vHH$%E6ht=ZDir.M(<`MjM,TQLsQVOkOcp(<%0' );
define( 'NONCE_KEY',        '-;}KohknYKE$(|dsVTPOjNSl*S4zM_S$~n7z_m#1D<tA_+Rg9hrY0dW0L?m} 72P' );
define( 'AUTH_SALT',        '*kH`XTn%6U9&wn2CP3}wjd}DlB$e.$XJr-/dAfPdG-ay2BjAvH@H@%Q[-`8D}J26' );
define( 'SECURE_AUTH_SALT', 'l@s4DHd]>1F^dUD[t%$=mSt!`% 70~IKg~&<{&UgmVrf`U#^XipD?+.Y$h~$DkiN' );
define( 'LOGGED_IN_SALT',   '3DY{kxEuOQr!9ke*<0wlXkkhKf70fR3&h7`WR=MRS1z,{Du;p}2QF<*0N;G5E4<-' );
define( 'NONCE_SALT',       'oXz/]0<}]tQuc3%#gwkO~yT-(Gm|=]OfAgeFB@!d,f,QF?2HlAeoLC}+q!z,G`X)' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
