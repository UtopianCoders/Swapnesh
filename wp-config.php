<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'swapnesh_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SwapDigo26' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm%9Y]a!_0CX32TGY&|cX;1 rG# QwG$}gye3-MR$k)}dma@$3hC*`Oi7h{ZhK%&3' );
define( 'SECURE_AUTH_KEY',  ':s,c>&1)=1e`=lxWN*ASFP8mLZ<!*< :?HZ-g)sLo0P|V6ibFBge/=g5v1:j,,xS' );
define( 'LOGGED_IN_KEY',    'Ui%*%l`Q!:ZveUO/Jxb<!6mS4_iX,pw%O;|^=3#0oQ,fNcCxw(%L%}!C=4$tta{H' );
define( 'NONCE_KEY',        'Ak$v P/_cW0(*-Ss#5g[CkyNK~>xIg;9.1DT?[x&4X=z&aT(]00qpp0HyRV@iMua' );
define( 'AUTH_SALT',        'O?d[~OY0|v]?|O/jF*Q=y<kkR[#uD/<1[E4/k[F.*&}vg_jL/,0io+=_ETp_>UkF' );
define( 'SECURE_AUTH_SALT', 'Va$1J_j!&sMA4`qK#-}%upf;*R:o>K%sE(7M<u&Lr$Q!B @lH+Jo|[Xmdd?@p5wu' );
define( 'LOGGED_IN_SALT',   'aQ1X?J}lj]z8vohVb@PyjL-:jf^XR_8tIn4zE?8E>n2RaZeG_=F+K*iAuC_RWDq@' );
define( 'NONCE_SALT',       '9:_}8CvV=36608&1>ez:$A.dKGz/%Fu;W|hr7G(6z/zUbG]zYn[!FiAwQw[N>_h&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
