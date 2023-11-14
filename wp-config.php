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
define( 'DB_NAME', 'test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'eKW!>>yFRoJvOo!9NOFdyV<WvKd9P?zP3qRL_-NWl=}vC(2wB[|>y$KuFHvq)Ta4' );
define( 'SECURE_AUTH_KEY',  '$M:a_lsA}x64~m5iZ%uAV#w:iOf^I,g#}sJ@HlEXmpp/(rWH#m{^FiO3GnMTN=]W' );
define( 'LOGGED_IN_KEY',    'WZ8nr9v+xtJ1&AV^cqf%]L%t#-R?NQqaV$`bSS4rreQse!eCt4yyn:,y75Ty qAY' );
define( 'NONCE_KEY',        't?DpoPS@lWV1RbH(q7s^gd0Ly[cGOIRIlP]x2,V!/mU,l>]8a4fi:2gu3TS6Y+`R' );
define( 'AUTH_SALT',        'jdSM5XH/;#GDh@4KPbOLX(2M~S$*@MvEI`}cZ!fjkF2$#1DG9llic#!J=K9=iA$&' );
define( 'SECURE_AUTH_SALT', 'mMEBr$Mu*g4FBj}zd2Md#(_3*W,B$1-qW .z]yM>kb<1@A/fr=+)kdw)~K;_<<[X' );
define( 'LOGGED_IN_SALT',   'Q@57K8G430K1K5&huK6o(1>MJ>;{6vE7MVXn=|l/}gZg(I<U:#@2c!?y(h./e:^z' );
define( 'NONCE_SALT',       'UYlS_f&wI/<wYVDHu?m<I.}flR;lh9nYL70x$P?8&Ifv+mcEQ/+;lS]dr<S5hOx:' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_test';

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
