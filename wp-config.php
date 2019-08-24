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
define('DB_NAME', 'u963018624_ofici');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'u963018624_chopo');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '00123456');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'I$El$9tZ4RLa 6nK].jdJ:f`-=f*B)Mx.qGq=~|`o]WOp4O1l4 O`|&.% )AxlBr');
define('SECURE_AUTH_KEY',  '~_E-7B=sLMMD`sMdC4Sptr+t$( /KrdJL6^46]vdtg+SCzRy:5||E{YUV]+:Q~(8');
define('LOGGED_IN_KEY',    'f^.D4mv|#2`lBnqx2itT,/XQwu8,a%-KR<kqs<5M)%dCk^oWJ^H4DuK1r|5a*P@>');
define('NONCE_KEY',        'uOFmnb+De]J~|$Y>b<Lu`Z&4Tq/vAU/#{@Pb/.jt&r0;2XSz20+Y#:l+>$YmVCqo');
define('AUTH_SALT',        'g~=5QP7yVwOE$7KY-gsF~eQP6kkewZ^`Qb0F:9huF-V7[UfJHaR-pUNl:hCFlDjV');
define('SECURE_AUTH_SALT', '3+Kx56C..+V/fHc98`+s`Q#->hpth[Y1.:j3&x7S-Y+^wTHgRm|>Q0kETa.RIYH|');
define('LOGGED_IN_SALT',   '&|+^RhsR|x>hD34-D|--qf7Ak.qt~x2)6Z-H+#jl3_ +]L<^jSIUi2_tjtPm/IG#');
define('NONCE_SALT',       'cE&Lk962)_;3e-v=T+CO%o&f6.[#dI=rT(WlnWje(:sX}+=LQn_{O_e4ve(kZL:}');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
