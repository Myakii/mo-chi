<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mo-chi!' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost/mo-chi!' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         ' v6?*d>VY#;)ogo&VF|LSK40K`IsbGc.`#rOa`X}v%kbm<R16z[DboH+e3]|hdgc' );
define( 'SECURE_AUTH_KEY',  'D}$dmI}/4Ru$ik/z1TpPJ$(GD<XOC;X:x,Nrs%O:^.&J5Kk:Rkb|[g%Vs`E]i1H<' );
define( 'LOGGED_IN_KEY',    '&q2!f})z>qtFOn@[ysmm+&iQwK98G.7>>z`L `4B9]J):A[5|<SANV5PCF5K&v}#' );
define( 'NONCE_KEY',        '>Q> Ngshn/}{ =D24=@2Gni7Fs.BH$9XkId?:1=L]{7AyQ&|;#N)Pnd|%H<l09wf' );
define( 'AUTH_SALT',        'r;r]7) Y,=]b{n_+lP >_qR2T_reFY.:qQAG8DkLB|]S;d7Gpm=,S!5mrw0hafG!' );
define( 'SECURE_AUTH_SALT', 'd&,,28mM8flZ}f7~H(<a&:EQ5Fyzy=$.xvD!z{8T&|}~*Q@fH-uO.onWK1Pj1y:7' );
define( 'LOGGED_IN_SALT',   'K|oIO.<}Djcs!xi)YU$vfsvd(ec42-/,s_Hh2r}NxFYHx-n0Cc/ep8o/N_[zUrp8' );
define( 'NONCE_SALT',       'Xa.W~$X3/I]YrQhx$fNy]Hs(+i~u/?la<2de[,q$vgY*yud^HnVY4|;47`9/vG;=' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mochi';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
