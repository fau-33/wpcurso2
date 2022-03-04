<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpbanco2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(6(;CE!/NpA$r2r2R_Hl:vpjnoa< B%^+7o#F24U9>BJ[^fJ>c}N;i:Ui;?VjLP#' );
define( 'SECURE_AUTH_KEY',  'F]}p6$z}]Q<43_C#b Y{fCou.Rg)kD|CA%FX];z)n9p6Qe&F}9{3cJ5<eQQu/kl ' );
define( 'LOGGED_IN_KEY',    ']<~uK|_8LvNn=~]Ljh/;idw:OK)nod<UJeW,T*$&.L[FqkDw6.}}&9|^qkPQ7<9p' );
define( 'NONCE_KEY',        '|jAX<>Ek4O9f2Ml@Ny7$r-S>/C?ujxw,Hu<gLK?rfXq0E. d#Q[XB5d9:IV=~gTC' );
define( 'AUTH_SALT',        'cb*0,2,J(0*AS%&lo1asRjk73]~1wp0M`AuZ2O2;W8rWm=@lgG`g&{V<ZMv#k=!=' );
define( 'SECURE_AUTH_SALT', 'v>m~7zzkl2p:>r@ #CnL,k5g1zV~m4Wlye3V81a5E=)_g}Kfv0f_QHJ*/W3<xs >' );
define( 'LOGGED_IN_SALT',   'QN;&}eEY$bVC5mM$[?zUj-aChZ@jX`h/4lVKz;|e:fb*BG[p.q-o.S^yC+EB6hd2' );
define( 'NONCE_SALT',       'f{@M;p__lqna2UqK7S3qM2QzyEPNdDG94unBbv(-u0l!_v+;!5M=X*0F@%5m4N@R' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
