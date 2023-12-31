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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uoj3tcHRUu1BR{+Ay.-eHHjv7&VpP,3(Z8-beEKH}N}r+[eH4$/ex@r)~._{2v+<' );
define( 'SECURE_AUTH_KEY',  '6%Tvooeb0h?|.z)1us`};0GMC6=A$]{3%#.^A@lY6]cZb%M.j[TlK7MPK1**3p-+' );
define( 'LOGGED_IN_KEY',    'N]r#*S?=Zw:y~4j#B-E[PCMpM!NH;Zal9o/8,l_TtYgB@kZ$hYuE9S(z U1#1Sa6' );
define( 'NONCE_KEY',        '[+rIy+!fv]FVk @:uK%6$7.VUdH}cr,&3q?* hz;Rp*cC.ZVm]Y*qB9kTFjg`Mmb' );
define( 'AUTH_SALT',        ' 2ydyCX&$#;aagR!^2u,/iNsM<d7-uuDbmc7;+dYn1~2x[,tol|r$Ii+SgyaT5>Y' );
define( 'SECURE_AUTH_SALT', 'F+l)G%Y5DmJs?ZM/=B~O%mG:%_wu=GymQID7XE7>U,z:q3c?ro-Wm7`t_?Z/~u5W' );
define( 'LOGGED_IN_SALT',   'q{sX9tSKPbmrV`UJh{wW;V}4)a^%~A2OXoUUyn3Z=sZnmlR1O;mfS-XW,n<snq0;' );
define( 'NONCE_SALT',       'yJ;2{U{@Cm+$*$B%4%Sj29BX5,cvEch&d;1Dt9X)UHtwG71KD(H*;ZcGhs/s^4s?' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
