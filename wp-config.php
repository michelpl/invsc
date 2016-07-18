<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'invsc');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'NEW-ROOT-PASSWORD');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IS4ZjTwSUSv&[p,pA8;V!,M1.[b5weYjSHW5euMI]}pHP@[.I*swZ6T,ZFq_#wFH');
define('SECURE_AUTH_KEY',  'rab?C=~&=Y!4:l<sz8<7JyoKA-]F&-t0[b>lc/%;(,oLaqd{gDHOEdNAUb*X aeD');
define('LOGGED_IN_KEY',    'K2j (.?G!JCqHnf8#~xWwA4~^b7M*u(/[ (}{khx5y%v%mE*6*pX~WxG?L&7EzOV');
define('NONCE_KEY',        'Z,|?&eu@oT/Zjb1ZFDt#YLFfG~yG+NgI$8x]Lq_/a$g7fd&xJ(htC!WCSUzsu:y%');
define('AUTH_SALT',        '$$]2lqBcmzVrR9C%1=!8/u6H9wx-P%QczbyFH23--8n~=iq@lJZ]5tPTk?7PWxqk');
define('SECURE_AUTH_SALT', 'X B@-fyie#Rt^%`?22:Y<=KL$*RS/xCDN6)NVE<DRd>U3uRN[17mhn8[=7ijkl(a');
define('LOGGED_IN_SALT',   'vFIJG>KjM6[}Z6(rZPBfXX=NxBV}ZkL~P{k wx{EaQ0)inR/;M32 OK{7*>l4u8$');
define('NONCE_SALT',       'x@q53 v|[osvYai=CCHc[U,F%8Df:]J}DWa;VZj31|Hfz2!2<p*U#e5@/xOocZNb');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
