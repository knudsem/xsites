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
define( 'DB_NAME', 'xsites' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{n;}#9xd!zOgi0o9yrO=yscoXoqJtJzL)}^~0bM9%/(3n/nk/*;8U%}!f!H~7Z+Z' );
define( 'SECURE_AUTH_KEY',  'NvGuuOGy(D/qG@Eu_l=wo8NsC5ZvD/$[Y^NK/m&.TBel`uP5BVk.~:ae{8f1T@3(' );
define( 'LOGGED_IN_KEY',    '$iQRWoS[X(/~8hUeGltR&,_okX%/DC2EM?Myx$3Tt=<##J?tPjrqW1jier/>bcq5' );
define( 'NONCE_KEY',        'OOP5DR0rt} HSm-c@t0m@Qop//|?$L )_ZG}wa3,ci)n/>Z2fxjoQeT8Am]IrAQ3' );
define( 'AUTH_SALT',        'J77`q3%K$g)S!eF~ZXQ}?9Z--35v2m2FRhvaLz_O5 Ov(_X&K+{G`J/E0<0dye)b' );
define( 'SECURE_AUTH_SALT', '15[8*Ab]O_Kl>zB:6ZP/?Vd67|[ao{sn[gJk 6>-5T5#h+^xc|pDD@!@QH2O/cV2' );
define( 'LOGGED_IN_SALT',   'oV`@3TTe1.UY%jmu&iIKW;u*x5E76];RWQ(2)y?Wap0xmnDH!SH`f,t{.Cw}&s}G' );
define( 'NONCE_SALT',       'LA(mr?;2#JSJ%TByLwDX3q 9T`>/r1&#v0t%$2+=$6NR|l@CZ&FJJjn0g>sGNo8U' );
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
