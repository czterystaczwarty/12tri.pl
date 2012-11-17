<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy, używanej lokalizacji WordPressa
 * i ABSPATH. Więćej informacji znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'tri');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'tri');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'tri');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dzH[WsyM~sV!9Knr~/@:ehR2e@:.C=|n8t-MV[U=g*MdhW2FvTNwz!JHx1b?+#-u');
define('SECURE_AUTH_KEY',  'hA+XFLF#Ks/w+epVJL4ls*~ey?[jav_V QZtX(aW&O`j}x[hd?vU`Q=}roez<ER<');
define('LOGGED_IN_KEY',    '{culL[bU+Bt]w_[]zvPs^>;,9F6#-]4&ifT/HgC,4!sfx74x!y}$!Q974ZD&Hxw6');
define('NONCE_KEY',        'NF@4fu91Wo00=[!.]P%cfyqmtVC0}vWrByWn<$1g+0.qeAA+<-o7^L]:C89/0gs8');
define('AUTH_SALT',        'jG-%&Pd6w+*i6az}^8O`28U*6VQ?.z+-j@2NJrYrXG[<8M}jd(Ino0djEVnV|8WF');
define('SECURE_AUTH_SALT', 'U>A0!rOA;xM3_xt8va]]|`,qh7 u^acd Rd--1W^/Sd05V<m/+[,F0@TZvE7$O;f');
define('LOGGED_IN_SALT',   '/cBxY*9`Q.E^[y^m%8KYmIz(`wD2])Q[U`qXp]a:gWKWS+0ja&kKG+S}07J?c/09');
define('NONCE_SALT',       '7bion(D9ZS$r#|!<fG;iR|:lE:]lrmh`Si5+fR;CV}2w&6/mi&wrQUny8i+b^dM#');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
