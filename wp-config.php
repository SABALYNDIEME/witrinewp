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
define( 'DB_NAME', 'sitevitrinewp' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&xQ{EVneyHs)J2Mp<mlb%h$u;>+il& f%cv,N-1F8#.C?o1;sB0:Ey5,IhvOiM-f' );
define( 'SECURE_AUTH_KEY',  ' <&umdJ8##.sKpFm|ut=a7lF_EyC*vs/(jZc!+:)eY>}M5g3yhPmxK+sL8>3Id`m' );
define( 'LOGGED_IN_KEY',    'v+J;^sZd%lXlSX*m}ey9U(i6*`Ci6;uCeOmQsd7w-mYmG$~Xy(o}uAHnr3.gt9|;' );
define( 'NONCE_KEY',        'G4XgbLeT~#%zMhzT0XCZ&*{cp|V^czd~TyOf`[dRM(VJ/2]@<D|N#ZAX8@aAAMQF' );
define( 'AUTH_SALT',        'XJR.gK;!@$i7Kru`oWN9Qb!f,}QxulJ*e_;jGOl kw}zd8]6tXJh;Bz=!O/vWedI' );
define( 'SECURE_AUTH_SALT', '[V@C}T-e=P>Zn/6yiBQG@W%6|)F&-77+>w2< 4|Q!]BI46Qzxm-Wxv+jGfa*E%(T' );
define( 'LOGGED_IN_SALT',   '*~KV:raha)Ir&+0x;ioZ51Fc/7jAWaytZvS%gl%6!-h7{x-9=.<ZEnELn(:p2{Yl' );
define( 'NONCE_SALT',       '<Mg5wZ]I6d^@eOya~dn1_e>0qn)pUt+D  U%D<n)RN }VkuM#mfOtPsVx|BI]nV?' );
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
