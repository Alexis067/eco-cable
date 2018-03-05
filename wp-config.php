<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_ecocable');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|aqAo@>Np)Pr84U8bAenDmxNvvWB~iW<|~ezsM rw)fBI87NW(%L8xKrOol-a&J0');
define('SECURE_AUTH_KEY',  'bo},Tc607xRuMypv#HddQW Uy)*]Wi{yr8W^`K)(P;h8VzIu(^U3VUya.spj#hn<');
define('LOGGED_IN_KEY',    'T_YH#<i321aj)l$poP>whx:]a=chj18G{Er8v(/xIR60Ef(..@H1P/5,Vm6z%@q_');
define('NONCE_KEY',        '}0[P0Ixgl;apY66)%~U ]Yj.JZf73_>icTSvu2oX^(3ofMM?e`8qfBi &]ZRF3)t');
define('AUTH_SALT',        'vkO:^v+4~jI-a%>y3{dcNs~t95MMhp!jrpVZk^O~)H|fteVM?,nA|/b4V?E]f.=U');
define('SECURE_AUTH_SALT', 'yxVj/ko=!q/frk[/aeD9ikxjT?J{)*o@MB`vUnYpJ]Qu@eP5SK5Z1.,j6*GG+N=U');
define('LOGGED_IN_SALT',   '$xydUYH#;q+cp0]csh{ 3)Z!uulS+-r_;a9n-,KCItJi8_:% Rh_,5N%9C<i]V+V');
define('NONCE_SALT',       '<6Yb<R:^`&$(8n*5^?5`,tNYX-;kIhy(CL.V5m*G 9DA25U*eHWsp7;6lxHrikF5');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');