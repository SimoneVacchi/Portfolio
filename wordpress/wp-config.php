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
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'simonevacchi' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', 'root' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yv%{[:}r5sg:b-u5TIR]Jqa+y_jspesrw625T.KxEz{!CsHU7x]9_!8I}gp$PONe' );
define( 'SECURE_AUTH_KEY',  'EvQ~ :{R.w(CGG>g.K_R]COf9u|HE#cl8s8FfTfCu@eltfc3zMUFD+ ?0VIJ96Qn' );
define( 'LOGGED_IN_KEY',    'qj{C;H/F]:%*yi@VaFU|FZb&hV}#j~an>|pH2INhxi_gWp~Gh(qF=J17l;uDHl6,' );
define( 'NONCE_KEY',        'oyP05&XC`mEuC }]U9Nm|MPSDM[b;^CuxdEuvL(%s%2<@$WFGa`/I<^2Yk+XB _B' );
define( 'AUTH_SALT',        '[W~[epgq}WcM5O,YwS8Lcz]OC`:R0hV%AqFryI:i?CJ0KH}GI-0_d `y)mb=)bv.' );
define( 'SECURE_AUTH_SALT', '=|Oi+fhFH</)12/+ Y|@E)N,O;,ce+bBu]cP-<-%:/*Im+`ALychND{,FaY%RzXS' );
define( 'LOGGED_IN_SALT',   'm:`UK#Xjc$hCsHGs84,ze(Dk=F+Nqw69Yu^PJk ltG,u{+~sR1].ng2)oC}:,F<2' );
define( 'NONCE_SALT',       'Ax)s@8,|pOb&p_e<|W;,N^`RZg_g!Oh/6|-OZ-pmhz!%[fds`6.6S{ =0E5sCOfs' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
