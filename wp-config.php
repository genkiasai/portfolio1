<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp-01' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '1025asai' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|9c$W})E=!8D8NeAjxweLAs<y@(#Aobd|7O(OC6+X?0pj~+rSp Stdm?%l&m^8zO' );
define( 'SECURE_AUTH_KEY',  'FavdevV >|5~X>u}hu4)j* 78*fyM:0hC0PvpbbH(tV$d)PUDmHf<Wk/}Zww6ENF' );
define( 'LOGGED_IN_KEY',    'Hd4Lk6N4H>+Dn`b-hsG|4uG=1*7J0^S<*3XFu4)K<4!|4ikM;wJM3&gRKwN:rSf$' );
define( 'NONCE_KEY',        ';u{6%q<#H}$KyGw <YV8c/9v%qTyb=0Q`TmdLA1xD2).p#bTa=DThf:.a)IjP|Ph' );
define( 'AUTH_SALT',        ')lw4q$PDwGW(LC~i9lR;`{U-`q(=c{-QGGao*G7nG?[X:<O!)lr$s~7>Kq%2:Due' );
define( 'SECURE_AUTH_SALT', 'wd#|R-j`.b+urh4;1t`=OhUGppi>lT/uR@#Y2QboOQ~{pewo&~-*YADc^wNl}c0b' );
define( 'LOGGED_IN_SALT',   'eblxb3/R>~Et#NR-r%(M[M~UwX L&[9EeNh.<uWDZ)BK#/yyjR}|37>vx734ttcJ' );
define( 'NONCE_SALT',       'ZS^!=K#fm;;@t.|HR>rnz]f($4)qtII:0]>pg5Uch|EU~pW=V76w>%!~zF$xp<^a' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
