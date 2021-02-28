<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'udemy' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'udemy' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'udemy' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '({(;P-%S8%S!bJ?a:S[):^DcyE``61fL%8F)k%Kh9G<^&Jtk>]{/J%EpKBB0<El<' );
define( 'SECURE_AUTH_KEY',  'zK<9!<l?8]|bBZ)<B/JLzXRS><WavX4piaMC$B!^&Qk4i&LvztsxAe+jI6c7C#r[' );
define( 'LOGGED_IN_KEY',    '61T4x*`=06_3<xLJ}kRS;d^Ixzu/4C%goH}Gj:38-JlBCts0+s!]Ro?}`f8a}NHJ' );
define( 'NONCE_KEY',        '@7l|ODkvCPze-`2TNht4q&zn qV{O6f??u6nj5`##q)iS<)S!MJ&G~EoIc[>NGxA' );
define( 'AUTH_SALT',        'zI*}Qn}7k75q;AO<.D?+5Bf|S0IfRNrUyrtZPI4J#wk/hW1+4Ui3{w!y%E<7Cw3S' );
define( 'SECURE_AUTH_SALT', '~Ary gI7:Xb]5N:rsRw.t/4am6C[n?X:TST+<_~ $3YNt~E;GwJJCb*+p|:UaTt=' );
define( 'LOGGED_IN_SALT',   'shS9MED7L2t8s<;/_d5}#<9:u.8FfB1JH`6&qqn]xPmW<1]O%1{CgNr+NjM%+3N{' );
define( 'NONCE_SALT',       '(A]04joJ)q5t%L~k$?<hM)p?SeW$+GA$h/sDW6B m$)sm fmf`TdJl8^dPwOeYm(' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
