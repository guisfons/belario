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
define( 'DB_NAME', 'belario' );

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
define( 'AUTH_KEY',         '!ryn.kP058sUyo@>S9tk@c=)IupeR$TJ/nrG&[A9n9kj_#@(Bs7LP?+C4Tj.]7dX' );
define( 'SECURE_AUTH_KEY',  'xFRJG|vfh#~Uz2Hb%9s]@7>A|8|gz[OY3jjLi;|l)r1]@E[f`!ttM:EQLwQb2]KW' );
define( 'LOGGED_IN_KEY',    'KJU.(!92P_KU+F08/rQ/asi2R?2.#TDue>9`Dv4{l|=JwNQxrxKrgc#<&E?Q!EQ]' );
define( 'NONCE_KEY',        '2NSaFPf+.66vD4,K2p_;DO}-RpgGfVD&%Rh(|C.h;X%g+^DxR>f/g0F{A OtxJj}' );
define( 'AUTH_SALT',        'j-*)!&<Ly5+?]v]vWO;NH:1D~5Y5%q2u:OT)KC0hw=LrI]zmddRY$@$}+rU!|J~v' );
define( 'SECURE_AUTH_SALT', '{l;D6O@QDs6L>K?nTDi,xWtG!s#oUH&ll-%o@IM.)U]kk0F54V*?SD2=$$giZ=>s' );
define( 'LOGGED_IN_SALT',   '@v{$Oh_nIHM{vj=:015z}iNbB4Lv-}~h6!@mh0{V~@D<zjoNFK;lBI3y Pir|pq]' );
define( 'NONCE_SALT',       'B_NJ eB0BH5[ZV!20#%~6ek#{E?d}g-CRY8bd)]0Gn~Fg$IS2E`p>aq`[f<5diX3' );

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
