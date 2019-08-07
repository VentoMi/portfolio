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
define( 'DB_NAME', 'user18' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'user18' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'fK63_WVd' );

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
define( 'AUTH_KEY',         'iui.7z1R]47pyBszVvGx+CS@=dEfnq]c%xUT[HFoyLZj%}n~<ph6^1cZX?F*imks' );
define( 'SECURE_AUTH_KEY',  'E>%,BkmFFD.!$}| XDI}@78pA(2&d9hv-9iKe/<TsbziiwPTF(xXCDUlG?1X*P7!' );
define( 'LOGGED_IN_KEY',    ';0fXV HK/+z>&qs-}+1N2PsO;Wwh8u~x%9L^>sY];2)Au9`Iwsv2(^8kv_k0d< W' );
define( 'NONCE_KEY',        'SKbM?Vb*B0&6<6:b6qv=9!^K(J@h[AV:Fkq.X!!<64(uFb%xgRG?UtPfnxL306!]' );
define( 'AUTH_SALT',        '=;XpI@o,H i)7n;.d;)i^,Z1]*_P5Ni Pu_wZPbLlsF3piY*[Gd]+0HR:gE@G)@s' );
define( 'SECURE_AUTH_SALT', 'ddT=5& 3-))lM}4UH lZ*Xc&xjVnx%P<]XDPNPXwdc+OdxVO)*2XJ^^D&8 CaxbE' );
define( 'LOGGED_IN_SALT',   'V`L7%*cr1}(}uXT&{km|jbp1uH}?cupk1+}P$+E<Q0@2yJ{@T73d5P1$D~PGAK,1' );
define( 'NONCE_SALT',       'LbBE{AmT*0){]z3[{:6ch5_^*Yv&MYt/1v]Ks`.2Ge7!v2AMQAg4!VS1(X]_7TQQ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mv_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
