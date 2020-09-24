<?php
/**
*
* Codebox Plus extension for the phpBB Forum Software package [German]
*
* @copyright (c) 2014 o0johntam0o
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'CODEBOX_PLUS_GESHI'						=> 'GeSHi',
	'CODEBOX_PLUS_TITLE'						=> 'Codebox Plus Extension',
	'CODEBOX_PLUS_TITLE_SETTINGS'				=> 'Einstellungen',
	'CODEBOX_PLUS_WARNING'						=> 'ÄNDERE DEN BB-CODE [CODEBOX=] NICHT!',
	'CODEBOX_PLUS_SYNTAX_HIGHLIGHTING'			=> 'Aktiviere syntax highlighting',
	'CODEBOX_PLUS_SYNTAX_HIGHLIGHTING_EXPLAIN'	=> '',
        'CODEBOX_PLUS_EXPANDED'                          => 'Erweitert darstellen',
        'CODEBOX_PLUS_EXPANDED_EXPLAIN'          => '',
	'CODEBOX_PLUS_ENABLE_DOWNLOAD'				=> 'Download Funktion aktivieren',
	'CODEBOX_PLUS_ENABLE_DOWNLOAD_EXPLAIN'		=> '',
	'CODEBOX_PLUS_LOGIN_REQUIRED'				=> 'Benötigt Login zum Download',
	'CODEBOX_PLUS_LOGIN_REQUIRED_EXPLAIN'		=> '',
	'CODEBOX_PLUS_PREVENT_BOTS'					=> 'Bots verhindern',
	'CODEBOX_PLUS_PREVENT_BOTS_EXPLAIN'			=> 'Verhindert das Bots Code downloaden können.',
	'CODEBOX_PLUS_CAPTCHA'						=> 'CAPTCHA aktivieren',
	'CODEBOX_PLUS_CAPTCHA_EXPLAIN'				=> 'Automatisches ausfüllen von Formularen durch Spambots blockieren(Es muss ein CAPTCHA konfiguriert sein)',
	'CODEBOX_PLUS_MAX_ATTEMPT'					=> 'Max versuche',
	'CODEBOX_PLUS_MAX_ATTEMPT_EXPLAIN'			=> 'Anzahl der Versuche die ein Benutzer hat um das CAPTCHA zu lösen bevor er für die Session gesperrt wird.',
	'CODEBOX_PLUS_SAVED'						=> 'Codebox Plus Einstellungen aktualisiert',
	'CODEBOX_PLUS_LOG_MSG'						=> '<strong>Erweitere Codebox Plus Einstellungen</strong>',

	'CODEBOX_PLUS_ERROR_GENERAL'				=> 'Allgemeiner Fehler',
	'CODEBOX_PLUS_ERROR_POST_NOT_FOUND'			=> 'Beitrag nicht gefunden',
	'CODEBOX_PLUS_ERROR_FILE_EMPTY'				=> 'Die Datei ist leer',
	'CODEBOX_PLUS_ERROR_CODE_NOT_FOUND'			=> 'Code Inhalt nicht gefunden',
	'CODEBOX_PLUS_ERROR_LOGIN_REQUIRED'			=> 'Bitte melde dich an um die Datei runter zu laden',
	'CODEBOX_PLUS_ERROR_CONFIRM'				=> 'Du hast die maximale Anzahl der Versuche zur Einreichung für diese Sitzung überschritten. Bitte versuche es später noch einmal.',
	'CODEBOX_PLUS_ERROR_CODEBOX_PLUS_DISABLED'	=> 'Codebox Plus MOD wurde vom Administrator deaktiviert',
	'CODEBOX_PLUS_ERROR_DOWNLOAD_DISABLED'		=> 'Die Download Funktion wurde vom Administrator deaktiviert',
	'CODEBOX_PLUS_ERROR_NO_PERMISSION'			=> 'Du hast nicht die nötigen Rechte um die Aktion abzuschließen',
	'CODEBOX_PLUS_CONFIRM'						=> 'Bitte gib den Bestätigungscode ein um die Datei runter zu laden',
	'CODEBOX_PLUS_CODE'							=> 'Code',
	'CODEBOX_PLUS_DOWNLOAD'						=> 'Download',
	'CODEBOX_PLUS_EXPAND'						=> 'Erweitern',
	'CODEBOX_PLUS_COLLAPSE'						=> 'Minimieren',
	'CODEBOX_PLUS_SELECT'						=> 'Code auswählen',
	'CODEBOX_PLUS_DEFAULT_FILENAME'				=> 'Unbenannt',
	'CODEBOX_PLUS_NO_PREVIEW'					=> 'Die Vorschau ist nicht verfügbar',
	// SELECT BOX
	'CODEBOX_PLUS_SYNTAX_JAVASCRIPT'			=> 'UOX3 JavaScript',
	'CODEBOX_PLUS_SYNTAX_UOX3DFN'				=> 'UOX3 DFN',
	'CODEBOX_PLUS_SYNTAX_CPP'					=> 'CPP (C++)',
	'CODEBOX_PLUS_SYNTAX_C'						=> 'C',
	'CODEBOX_PLUS_SYNTAX_TEXT'					=> 'TXT (Text)',
	'CODEBOX_PLUS_SYNTAX_BASH'					=> 'BSH (Bash)',
	'CODEBOX_PLUS_SYNTAX_CMAKE'					=> 'CMAKE',
	'CODEBOX_PLUS_SYNTAX_MAKE'					=> 'MAKE',
	'CODEBOX_PLUS_SYNTAX_ROBOTS'				=> 'TXT (Robots.txt)',
	'CODEBOX_PLUS_SYNTAX_ASM'					=> 'ASM (Assembly)',
	'CODEBOX_PLUS_SYNTAX_ASP'					=> 'ASP',
	'CODEBOX_PLUS_SYNTAX_AUTOIT'				=> 'AU3 (AutoIT)',
	'CODEBOX_PLUS_SYNTAX_DOS'					=> 'BAT (DOS)',
	'CODEBOX_PLUS_SYNTAX_COBOL'					=> 'CBL (COBOL)',
	'CODEBOX_PLUS_SYNTAX_CSHARP'				=> 'CS (C#)',
	'CODEBOX_PLUS_SYNTAX_CSS'					=> 'CSS',
	'CODEBOX_PLUS_SYNTAX_HTML4STRICT'			=> 'HTML (HTML4)',
	'CODEBOX_PLUS_SYNTAX_HTML5'					=> 'HTML (HTML5)',
	'CODEBOX_PLUS_SYNTAX_INI'					=> 'INI',
	'CODEBOX_PLUS_SYNTAX_JAVA'					=> 'JAVA (Java)',
	'CODEBOX_PLUS_SYNTAX_JAVA5'					=> 'JAVA (Java 5)',
	'CODEBOX_PLUS_SYNTAX_JQUERY'				=> 'JS (jQuery)',
	'CODEBOX_PLUS_SYNTAX_LUA'					=> 'LUA',
	'CODEBOX_PLUS_SYNTAX_MATLAB'				=> 'M (MatLab)',
	'CODEBOX_PLUS_SYNTAX_NSIS'					=> 'NSI (NSIS)',
	'CODEBOX_PLUS_SYNTAX_DELPHI'				=> 'PAS (Delphi)',
	'CODEBOX_PLUS_SYNTAX_PASCAL'				=> 'PAS (Pascal)',
	'CODEBOX_PLUS_SYNTAX_PHP'					=> 'PHP',
	'CODEBOX_PLUS_SYNTAX_PHPBRIEF'				=> 'PHP (Brief)',
	'CODEBOX_PLUS_SYNTAX_PERL'					=> 'PL (Perl)',
	'CODEBOX_PLUS_SYNTAX_PERL6'					=> 'PL (Perl 6)',
	'CODEBOX_PLUS_SYNTAX_PCRE'					=> 'PL (PCRE)',
	'CODEBOX_PLUS_SYNTAX_POWERSHELL'			=> 'PS1 (PowerShell)',
	'CODEBOX_PLUS_SYNTAX_PYTHON'				=> 'PY (Python)',
	'CODEBOX_PLUS_SYNTAX_RUBY'					=> 'RB (Ruby)',
	'CODEBOX_PLUS_SYNTAX_REG'					=> 'REG (Registry)',
	'CODEBOX_PLUS_SYNTAX_MYSQL'					=> 'SQL (MySQL)',
	'CODEBOX_PLUS_SYNTAX_ORACLE8'				=> 'SQL (Oracle 8)',
	'CODEBOX_PLUS_SYNTAX_ORACLE11'				=> 'SQL (Oracle 11)',
	'CODEBOX_PLUS_SYNTAX_POSTGRESQL'			=> 'SQL (PostgreSQL)',
	'CODEBOX_PLUS_SYNTAX_SQL'					=> 'SQL (SQL)',
	'CODEBOX_PLUS_SYNTAX_LATEX'					=> 'TEX (LaTeX)',
	'CODEBOX_PLUS_SYNTAX_VERILOG'				=> 'V (Verilog)',
	'CODEBOX_PLUS_SYNTAX_VBNET'					=> 'VB (VB.NET)',
	'CODEBOX_PLUS_SYNTAX_VB'					=> 'VB (VisualBasic)',
	'CODEBOX_PLUS_SYNTAX_XML'					=> 'XML',
	'CODEBOX_PLUS_SYNTAX_YAML'					=> 'YML (YAML)',
	'CODEBOX_PLUS_SYNTAX_G09'					=> '--------- [0-9] ---------',
	'CODEBOX_PLUS_SYNTAX_4CS'					=> 'GADV 4CS',
	'CODEBOX_PLUS_SYNTAX_6502ACME'				=> 'ACME Cross Assembler',
	'CODEBOX_PLUS_SYNTAX_6502KICKASS'			=> 'Kick Assembler',
	'CODEBOX_PLUS_SYNTAX_6502TASM'				=> 'TASM/64TASS',
	'CODEBOX_PLUS_SYNTAX_68000DEVPAC'			=> 'Motorola 68000',
	'CODEBOX_PLUS_SYNTAX_GABC'					=> '---------- [A-B-C] ----------',
	'CODEBOX_PLUS_SYNTAX_ABAP'					=> 'ABAP',
	'CODEBOX_PLUS_SYNTAX_ACTIONSCRIPT'			=> 'ActionScript',
	'CODEBOX_PLUS_SYNTAX_ACTIONSCRIPT3'			=> 'ActionScript3',
	'CODEBOX_PLUS_SYNTAX_ADA'					=> 'ADA',
	'CODEBOX_PLUS_SYNTAX_ALGOL68'				=> 'ALGOL 68',
	'CODEBOX_PLUS_SYNTAX_APACHE'				=> 'Apache',
	'CODEBOX_PLUS_SYNTAX_APPLESCRIPT'			=> 'AppleScript',
	'CODEBOX_PLUS_SYNTAX_APT_SOURCES'			=> 'Apt Sources',
	'CODEBOX_PLUS_SYNTAX_ARM'					=> 'ARM Assembler',
	'CODEBOX_PLUS_SYNTAX_ASYMPTOTE'				=> 'Asymptote',
	'CODEBOX_PLUS_SYNTAX_AUTOCONF'				=> 'AutoConf',
	'CODEBOX_PLUS_SYNTAX_AUTOHOTKEY'			=> 'AutoHotKey',
	'CODEBOX_PLUS_SYNTAX_AVISYNTH'				=> 'AviSynth',
	'CODEBOX_PLUS_SYNTAX_AWK'					=> 'Awk',
	'CODEBOX_PLUS_SYNTAX_BASCOMAVR'				=> 'Bascom AVR',
	'CODEBOX_PLUS_SYNTAX_BASIC4GL'				=> 'Basic4GL',
	'CODEBOX_PLUS_SYNTAX_BF'					=> 'Brainfuck',
	'CODEBOX_PLUS_SYNTAX_BIBTEX'				=> 'BibTeX',
	'CODEBOX_PLUS_SYNTAX_BLITZBASIC'			=> 'BlitzBasic',
	'CODEBOX_PLUS_SYNTAX_BNF'					=> 'Backus-Naur Form',
	'CODEBOX_PLUS_SYNTAX_BOO'					=> 'Boo',
	'CODEBOX_PLUS_SYNTAX_C_LOADRUNNER'			=> 'C For LoadRunner',
	'CODEBOX_PLUS_SYNTAX_C_MAC'					=> 'C For MAC',
	'CODEBOX_PLUS_SYNTAX_CADDCL'				=> 'CAD DCL',
	'CODEBOX_PLUS_SYNTAX_CADLISP'				=> 'CAD Lisp',
	'CODEBOX_PLUS_SYNTAX_CFDG'					=> 'CFDG',
	'CODEBOX_PLUS_SYNTAX_CFM'					=> 'ColdFusion',
	'CODEBOX_PLUS_SYNTAX_CHAISCRIPT'			=> 'ChaiScript',
	'CODEBOX_PLUS_SYNTAX_CIL'					=> 'CIL',
	'CODEBOX_PLUS_SYNTAX_CLOJURE'				=> 'Clojure',
	'CODEBOX_PLUS_SYNTAX_COFFEESCRIPT'			=> 'CoffeeScript',
	'CODEBOX_PLUS_SYNTAX_CPPQT'					=> 'CPP-QT',
	'CODEBOX_PLUS_SYNTAX_CUESHEET'				=> 'Cuesheet',
	'CODEBOX_PLUS_SYNTAX_GDEF'					=> '---------- [D-E-F] ----------',
	'CODEBOX_PLUS_SYNTAX_D'						=> 'D',
	'CODEBOX_PLUS_SYNTAX_DCL'					=> 'DCL',
	'CODEBOX_PLUS_SYNTAX_DCPU16'				=> 'DCPU/16 Assembly',
	'CODEBOX_PLUS_SYNTAX_DCS'					=> 'DCS',
	'CODEBOX_PLUS_SYNTAX_DIFF'					=> 'DIFF',
	'CODEBOX_PLUS_SYNTAX_DIV'					=> 'DIV',
	'CODEBOX_PLUS_SYNTAX_DOT'					=> 'Dot',
	'CODEBOX_PLUS_SYNTAX_E'						=> 'E',
	'CODEBOX_PLUS_SYNTAX_ECMASCRIPT'			=> 'ECMAScript',
	'CODEBOX_PLUS_SYNTAX_EIFFEL'				=> 'Eiffel',
	'CODEBOX_PLUS_SYNTAX_EMAIL'					=> 'Email',
	'CODEBOX_PLUS_SYNTAX_EPC'					=> 'Enerscript',
	'CODEBOX_PLUS_SYNTAX_ERLANG'				=> 'Erlang',
	'CODEBOX_PLUS_SYNTAX_EUPHORIA'				=> 'Euphoria',
	'CODEBOX_PLUS_SYNTAX_F1'					=> 'Formula One',
	'CODEBOX_PLUS_SYNTAX_FALCON'				=> 'Falcon',
	'CODEBOX_PLUS_SYNTAX_FO'					=> 'Abas-ERP',
	'CODEBOX_PLUS_SYNTAX_FORTRAN'				=> 'Fortran',
	'CODEBOX_PLUS_SYNTAX_FREEBASIC'				=> 'FreeBasic',
	'CODEBOX_PLUS_SYNTAX_FREESWITCH'			=> 'FreeSWITCH',
	'CODEBOX_PLUS_SYNTAX_FSHARP'				=> 'FSharp',
	'CODEBOX_PLUS_SYNTAX_GGHI'					=> '---------- [G-H-I] ----------',
	'CODEBOX_PLUS_SYNTAX_GAMBAS'				=> 'Gambas',
	'CODEBOX_PLUS_SYNTAX_GDB'					=> 'GDB',
	'CODEBOX_PLUS_SYNTAX_GENERO'				=> 'FOURJs Genero 4GL',
	'CODEBOX_PLUS_SYNTAX_GENIE'					=> 'Genie',
	'CODEBOX_PLUS_SYNTAX_GETTEXT'				=> 'GNU Gettext',
	'CODEBOX_PLUS_SYNTAX_GLSL'					=> 'glSlang',
	'CODEBOX_PLUS_SYNTAX_GML'					=> 'GML',
	'CODEBOX_PLUS_SYNTAX_GNUPLOT'				=> 'Gnuplot',
	'CODEBOX_PLUS_SYNTAX_GO'					=> 'Go',
	'CODEBOX_PLUS_SYNTAX_GROOVY'				=> 'Groovy',
	'CODEBOX_PLUS_SYNTAX_GWBASIC'				=> 'GwBasic',
	'CODEBOX_PLUS_SYNTAX_HASKELL'				=> 'Haskell',
	'CODEBOX_PLUS_SYNTAX_HAXE'					=> 'Haxe',
	'CODEBOX_PLUS_SYNTAX_HICEST'				=> 'HicEst',
	'CODEBOX_PLUS_SYNTAX_HQ9PLUS'				=> 'HQ9+',
	'CODEBOX_PLUS_SYNTAX_INNO'					=> 'Inno',
	'CODEBOX_PLUS_SYNTAX_ICON'					=> 'Icon',
	'CODEBOX_PLUS_SYNTAX_IDL'					=> 'Uno Idl',
	'CODEBOX_PLUS_SYNTAX_IO'					=> 'Io',
	'CODEBOX_PLUS_SYNTAX_GJKL'					=> '---------- [J-K-L] ----------',
	'CODEBOX_PLUS_SYNTAX_J'						=> 'J',
	'CODEBOX_PLUS_SYNTAX_KIXTART'				=> 'Kixtart',
	'CODEBOX_PLUS_SYNTAX_KLONEC'				=> 'KLone C',
	'CODEBOX_PLUS_SYNTAX_KLONECPP'				=> 'KLone C++',
	'CODEBOX_PLUS_SYNTAX_LB'					=> 'Liberty BASIC',
	'CODEBOX_PLUS_SYNTAX_LDIF'					=> 'LDIF',
	'CODEBOX_PLUS_SYNTAX_LISP'					=> 'Generic Lisp',
	'CODEBOX_PLUS_SYNTAX_LLVM'					=> 'LLVM',
	'CODEBOX_PLUS_SYNTAX_LOCOBASIC'				=> 'Locomotive Basic',
	'CODEBOX_PLUS_SYNTAX_LOGTALK'				=> 'Logtalk',
	'CODEBOX_PLUS_SYNTAX_LOLCODE'				=> 'LOLcode',
	'CODEBOX_PLUS_SYNTAX_LOTUSFORMULAS'			=> 'Lotus Notes @Formulas',
	'CODEBOX_PLUS_SYNTAX_LOTUSSCRIPT'			=> 'LotusScript',
	'CODEBOX_PLUS_SYNTAX_LSCRIPT'				=> 'LScript',
	'CODEBOX_PLUS_SYNTAX_LSL2'					=> 'LSL2',
	'CODEBOX_PLUS_SYNTAX_GMNO'					=> '---------- [M-N-O] ----------',
	'CODEBOX_PLUS_SYNTAX_M68K'					=> 'Motorola 68000 Assembler',
	'CODEBOX_PLUS_SYNTAX_MAGIKSF'				=> 'MagikSF',
	'CODEBOX_PLUS_SYNTAX_MAPBASIC'				=> 'MapBasic',
	'CODEBOX_PLUS_SYNTAX_MIRC'					=> 'mIRC',
	'CODEBOX_PLUS_SYNTAX_MMIX'					=> 'MMIX',
	'CODEBOX_PLUS_SYNTAX_MODULA2'				=> 'Modula-2',
	'CODEBOX_PLUS_SYNTAX_MODULA3'				=> 'Modula-3',
	'CODEBOX_PLUS_SYNTAX_MPASM'					=> 'Microchip Assembler',
	'CODEBOX_PLUS_SYNTAX_MXML'					=> 'MXML',
	'CODEBOX_PLUS_SYNTAX_NAGIOS'				=> 'Nagios',
	'CODEBOX_PLUS_SYNTAX_NETREXX'				=> 'NetRexx',
	'CODEBOX_PLUS_SYNTAX_NEWLISP'				=> 'newLISP',
	'CODEBOX_PLUS_SYNTAX_OBERON2'				=> 'Oberon-2',
	'CODEBOX_PLUS_SYNTAX_OBJC'					=> 'Objective-C',
	'CODEBOX_PLUS_SYNTAX_OBJECK'				=> 'Objeck',
	'CODEBOX_PLUS_SYNTAX_OCAML'					=> 'OCaml',
	'CODEBOX_PLUS_SYNTAX_OCAMLBRIEF'			=> 'OCaml (Brief)',
	'CODEBOX_PLUS_SYNTAX_OCTAVE'				=> 'GNU Octave',
	'CODEBOX_PLUS_SYNTAX_OOBAS'					=> 'OpenOffice.org Basic',
	'CODEBOX_PLUS_SYNTAX_OOREXX'				=> 'ooRexx',
	'CODEBOX_PLUS_SYNTAX_OXYGENE'				=> 'Oxygene (Delphi Prism)',
	'CODEBOX_PLUS_SYNTAX_OZ'					=> 'Oz',
	'CODEBOX_PLUS_SYNTAX_GPQRS'					=> '--------- [P-Q-R-S] ---------',
	'CODEBOX_PLUS_SYNTAX_PARASAIL'				=> 'ParaSail',
	'CODEBOX_PLUS_SYNTAX_PARIGP'				=> 'PARI/GP',
	'CODEBOX_PLUS_SYNTAX_PER'					=> 'Per',
	'CODEBOX_PLUS_SYNTAX_PF'					=> 'OpenBSD Packet Filter',
	'CODEBOX_PLUS_SYNTAX_PIC16'					=> 'PIC16',
	'CODEBOX_PLUS_SYNTAX_PIKE'					=> 'Pike',
	'CODEBOX_PLUS_SYNTAX_PIXELBENDER'			=> 'Pixel Bender 1.0',
	'CODEBOX_PLUS_SYNTAX_PLI'					=> 'PL/I',
	'CODEBOX_PLUS_SYNTAX_PLSQL'					=> 'PL/SQL',
	'CODEBOX_PLUS_SYNTAX_POVRAY'				=> 'Povray',
	'CODEBOX_PLUS_SYNTAX_POWERBUILDER'			=> 'PowerBuilder',
	'CODEBOX_PLUS_SYNTAX_PROFTPD'				=> 'ProFTPd',
	'CODEBOX_PLUS_SYNTAX_PROGRESS'				=> 'Progress',
	'CODEBOX_PLUS_SYNTAX_PROLOG'				=> 'Prolog',
	'CODEBOX_PLUS_SYNTAX_PROPERTIES'			=> 'PROPERTIES',
	'CODEBOX_PLUS_SYNTAX_PROVIDEX'				=> 'ProvideX',
	'CODEBOX_PLUS_SYNTAX_PUREBASIC'				=> 'PureBasic',
	'CODEBOX_PLUS_SYNTAX_PYCON'					=> 'Python (console mode)',
	'CODEBOX_PLUS_SYNTAX_PYS60'					=> 'Python for S60',
	'CODEBOX_PLUS_SYNTAX_Q'						=> 'Q/Kdb+',
	'CODEBOX_PLUS_SYNTAX_QBASIC'				=> 'QBasic/QuickBASIC',
	'CODEBOX_PLUS_SYNTAX_RAILS'					=> 'Rails',
	'CODEBOX_PLUS_SYNTAX_REBOL'					=> 'Rebol',
	'CODEBOX_PLUS_SYNTAX_REXX'					=> 'Rexx',
	'CODEBOX_PLUS_SYNTAX_RPMSPEC'				=> 'RPM Specification',
	'CODEBOX_PLUS_SYNTAX_RSPLUS'				=> 'R',
	'CODEBOX_PLUS_SYNTAX_SAS'					=> 'SAS',
	'CODEBOX_PLUS_SYNTAX_SCALA'					=> 'Scala',
	'CODEBOX_PLUS_SYNTAX_SCHEME'				=> 'Scheme',
	'CODEBOX_PLUS_SYNTAX_SCILAB'				=> 'SciLab',
	'CODEBOX_PLUS_SYNTAX_SDLBASIC'				=> 'sdlBasic',
	'CODEBOX_PLUS_SYNTAX_SMALLTALK'				=> 'SmallTalk',
	'CODEBOX_PLUS_SYNTAX_SMARTY'				=> 'Smarty',
	'CODEBOX_PLUS_SYNTAX_SPARK'					=> 'SPARK',
	'CODEBOX_PLUS_SYNTAX_SPARQL'				=> 'SPARQL',
	'CODEBOX_PLUS_SYNTAX_STONESCRIPT'			=> 'StoneScript',
	'CODEBOX_PLUS_SYNTAX_SYSTEMVERILOG'			=> 'SystemVerilog',
	'CODEBOX_PLUS_SYNTAX_GTUV'					=> '---------- [T-U-V] ----------',
	'CODEBOX_PLUS_SYNTAX_TCL'					=> 'TCL/iTCL',
	'CODEBOX_PLUS_SYNTAX_TERATERM'				=> 'Tera Term Macro',
	'CODEBOX_PLUS_SYNTAX_THINBASIC'				=> 'thinBasic',
	'CODEBOX_PLUS_SYNTAX_TSQL'					=> 'T-SQL',
	'CODEBOX_PLUS_SYNTAX_TYPOSCRIPT'			=> 'TypoScript',
	'CODEBOX_PLUS_SYNTAX_UNICON'				=> 'Unicon',
	'CODEBOX_PLUS_SYNTAX_UPC'					=> 'UPC',
	'CODEBOX_PLUS_SYNTAX_URBI'					=> 'Urbi',
	'CODEBOX_PLUS_SYNTAX_USCRIPT'				=> 'UnrealScript',
	'CODEBOX_PLUS_SYNTAX_VALA'					=> 'Vala',
	'CODEBOX_PLUS_SYNTAX_VEDIT'					=> 'Vedit',
	'CODEBOX_PLUS_SYNTAX_VHDL'					=> 'VHSIC',
	'CODEBOX_PLUS_SYNTAX_VIM'					=> 'Vim Script',
	'CODEBOX_PLUS_SYNTAX_VISUALFOXPRO'			=> 'Visual FoxPro',
	'CODEBOX_PLUS_SYNTAX_VISUALPROLOG'			=> 'Visual Prolog',
	'CODEBOX_PLUS_SYNTAX_GWXYZ'					=> '--------- [W-X-Y-Z] ---------',
	'CODEBOX_PLUS_SYNTAX_WHITESPACE'			=> 'Whitespace',
	'CODEBOX_PLUS_SYNTAX_WHOIS'					=> 'Whois (RPSL format)',
	'CODEBOX_PLUS_SYNTAX_WINBATCH'				=> 'WinBatch',
	'CODEBOX_PLUS_SYNTAX_XBASIC'				=> 'XBasic',
	'CODEBOX_PLUS_SYNTAX_XORG_CONF'				=> 'Xorg configuration',
	'CODEBOX_PLUS_SYNTAX_XPP'					=> 'X++',
	'CODEBOX_PLUS_SYNTAX_Z80'					=> 'ZiLOG Z80 Assembler',
	'CODEBOX_PLUS_SYNTAX_ZXBASIC'				=> 'ZXBasic',
	// SELECT BOX - EXPLAIN
	'CODEBOX_PLUS_SYNTAX_JAVASCRIPT_EXPLAIN'	=> 'UOX3 JavaScript Scripts',
	'CODEBOX_PLUS_SYNTAX_UOX3DFN_EXPLAIN'		=> 'UOX3 Definition Files',
	'CODEBOX_PLUS_SYNTAX_CPP_EXPLAIN'			=> 'C++',
	'CODEBOX_PLUS_SYNTAX_C_EXPLAIN'				=> 'C',
	'CODEBOX_PLUS_SYNTAX_TEXT_EXPLAIN'			=> 'Plain Text',
	'CODEBOX_PLUS_SYNTAX_BASH_EXPLAIN'			=> 'UNIX Bash',
	'CODEBOX_PLUS_SYNTAX_CMAKE_EXPLAIN'			=> 'CMakeFile',
	'CODEBOX_PLUS_SYNTAX_MAKE_EXPLAIN'			=> 'MakeFile',
	'CODEBOX_PLUS_SYNTAX_ROBOTS_EXPLAIN'		=> 'Robots.txt',
	'CODEBOX_PLUS_SYNTAX_ASM_EXPLAIN'			=> 'Assembly',
	'CODEBOX_PLUS_SYNTAX_ASP_EXPLAIN'			=> 'Active Server Pages',
	'CODEBOX_PLUS_SYNTAX_AUTOIT_EXPLAIN'		=> 'AutoIT',
	'CODEBOX_PLUS_SYNTAX_DOS_EXPLAIN'			=> 'DOS',
	'CODEBOX_PLUS_SYNTAX_COBOL_EXPLAIN'			=> 'COmmon Business Oriented Language',
	'CODEBOX_PLUS_SYNTAX_CSHARP_EXPLAIN'		=> 'C#',
	'CODEBOX_PLUS_SYNTAX_CSS_EXPLAIN'			=> 'Cascade Style Sheets',
	'CODEBOX_PLUS_SYNTAX_HTML4STRICT_EXPLAIN'	=> 'HTML4 Strict',
	'CODEBOX_PLUS_SYNTAX_HTML5_EXPLAIN'			=> 'HTML5',
	'CODEBOX_PLUS_SYNTAX_INI_EXPLAIN'			=> 'Windows Initialization',
	'CODEBOX_PLUS_SYNTAX_JAVA_EXPLAIN'			=> 'Java',
	'CODEBOX_PLUS_SYNTAX_JAVA5_EXPLAIN'			=> 'Java 5',
	'CODEBOX_PLUS_SYNTAX_JQUERY_EXPLAIN'		=> 'jQuery',
	'CODEBOX_PLUS_SYNTAX_LUA_EXPLAIN'			=> 'Lua',
	'CODEBOX_PLUS_SYNTAX_MATLAB_EXPLAIN'		=> 'MATrix LABoratory',
	'CODEBOX_PLUS_SYNTAX_NSIS_EXPLAIN'			=> 'Nullsoft Scriptable Install System',
	'CODEBOX_PLUS_SYNTAX_DELPHI_EXPLAIN'		=> 'Delphi',
	'CODEBOX_PLUS_SYNTAX_PASCAL_EXPLAIN'		=> 'Pascal',
	'CODEBOX_PLUS_SYNTAX_PHP_EXPLAIN'			=> 'PHP Hypertext Preprocessor',
	'CODEBOX_PLUS_SYNTAX_PHPBRIEF_EXPLAIN'		=> 'PHP Hypertext Preprocessor',
	'CODEBOX_PLUS_SYNTAX_PERL_EXPLAIN'			=> 'Perl',
	'CODEBOX_PLUS_SYNTAX_PERL6_EXPLAIN'			=> 'Perl 6',
	'CODEBOX_PLUS_SYNTAX_PCRE_EXPLAIN'			=> 'PCRE - Perl Compatible Regular Expressions',
	'CODEBOX_PLUS_SYNTAX_POWERSHELL_EXPLAIN'	=> 'Windows PowerShell',
	'CODEBOX_PLUS_SYNTAX_PYTHON_EXPLAIN'		=> 'Python',
	'CODEBOX_PLUS_SYNTAX_RUBY_EXPLAIN'			=> 'Ruby',
	'CODEBOX_PLUS_SYNTAX_REG_EXPLAIN'			=> 'Windows Registry',
	'CODEBOX_PLUS_SYNTAX_MYSQL_EXPLAIN'			=> 'MySQL',
	'CODEBOX_PLUS_SYNTAX_ORACLE8_EXPLAIN'		=> 'Oracle 8',
	'CODEBOX_PLUS_SYNTAX_ORACLE11_EXPLAIN'		=> 'Oracle 11',
	'CODEBOX_PLUS_SYNTAX_POSTGRESQL_EXPLAIN'	=> 'PostgreSQL',
	'CODEBOX_PLUS_SYNTAX_SQL_EXPLAIN'			=> 'Structured Query Language',
	'CODEBOX_PLUS_SYNTAX_LATEX_EXPLAIN'			=> 'LaTeX',
	'CODEBOX_PLUS_SYNTAX_VERILOG_EXPLAIN'		=> 'Verilog',
	'CODEBOX_PLUS_SYNTAX_VBNET_EXPLAIN'			=> 'VB.NET',
	'CODEBOX_PLUS_SYNTAX_VB_EXPLAIN'			=> 'Visual Basic',
	'CODEBOX_PLUS_SYNTAX_XML_EXPLAIN'			=> 'eXtensible Markup Language',
	'CODEBOX_PLUS_SYNTAX_YAML_EXPLAIN'			=> 'YAML Aint Markup Language',
	'CODEBOX_PLUS_SYNTAX_G09_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_4CS_EXPLAIN'			=> 'GADV 4CS',
	'CODEBOX_PLUS_SYNTAX_6502ACME_EXPLAIN'		=> 'MOS 6502 (6510) ACME Cross Assembler 0.93',
	'CODEBOX_PLUS_SYNTAX_6502KICKASS_EXPLAIN'	=> 'MOS 6502 (6510) Kick Assembler 3.13',
	'CODEBOX_PLUS_SYNTAX_6502TASM_EXPLAIN'		=> 'MOS 6502 (6510) TASM/64TASS 1.46 Assembler',
	'CODEBOX_PLUS_SYNTAX_68000DEVPAC_EXPLAIN'	=> 'Motorola 68000 - HiSoft Devpac ST 2 Assembler',
	'CODEBOX_PLUS_SYNTAX_GABC_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_ABAP_EXPLAIN'			=> 'ABAP',
	'CODEBOX_PLUS_SYNTAX_ACTIONSCRIPT_EXPLAIN'	=> 'Flash ActionScript',
	'CODEBOX_PLUS_SYNTAX_ACTIONSCRIPT3_EXPLAIN'	=> 'Flash ActionScript 3',
	'CODEBOX_PLUS_SYNTAX_ADA_EXPLAIN'			=> 'Ada',
	'CODEBOX_PLUS_SYNTAX_ALGOL68_EXPLAIN'		=> 'ALGOL 68',
	'CODEBOX_PLUS_SYNTAX_APACHE_EXPLAIN'		=> 'Apache (HTACCESS)',
	'CODEBOX_PLUS_SYNTAX_APPLESCRIPT_EXPLAIN'	=> 'AppleScript',
	'CODEBOX_PLUS_SYNTAX_APT_SOURCES_EXPLAIN'	=> 'Apt Sources',
	'CODEBOX_PLUS_SYNTAX_ARM_EXPLAIN'			=> 'ARM Assembler',
	'CODEBOX_PLUS_SYNTAX_ASYMPTOTE_EXPLAIN'		=> 'Asymptote',
	'CODEBOX_PLUS_SYNTAX_AUTOCONF_EXPLAIN'		=> 'AutoConf',
	'CODEBOX_PLUS_SYNTAX_AUTOHOTKEY_EXPLAIN'	=> 'AutoHotKey',
	'CODEBOX_PLUS_SYNTAX_AVISYNTH_EXPLAIN'		=> 'AviSynth',
	'CODEBOX_PLUS_SYNTAX_AWK_EXPLAIN'			=> 'Awk',
	'CODEBOX_PLUS_SYNTAX_BASCOMAVR_EXPLAIN'		=> 'Bascom AVR',
	'CODEBOX_PLUS_SYNTAX_BASIC4GL_EXPLAIN'		=> 'Basic4GL',
	'CODEBOX_PLUS_SYNTAX_BF_EXPLAIN'			=> 'Brainfuck',
	'CODEBOX_PLUS_SYNTAX_BIBTEX_EXPLAIN'		=> 'BibTeX',
	'CODEBOX_PLUS_SYNTAX_BLITZBASIC_EXPLAIN'	=> 'BlitzBasic',
	'CODEBOX_PLUS_SYNTAX_BNF_EXPLAIN'			=> 'BNF (Backus-Naur Form)',
	'CODEBOX_PLUS_SYNTAX_BOO_EXPLAIN'			=> 'Boo',
	'CODEBOX_PLUS_SYNTAX_C_LOADRUNNER_EXPLAIN'	=> 'C For LoadRunner',
	'CODEBOX_PLUS_SYNTAX_C_MAC_EXPLAIN'			=> 'C For Mac',
	'CODEBOX_PLUS_SYNTAX_CADDCL_EXPLAIN'		=> 'CAD DCL (Dialog Control Language)',
	'CODEBOX_PLUS_SYNTAX_CADLISP_EXPLAIN'		=> 'AutoCAD/IntelliCAD Lisp',
	'CODEBOX_PLUS_SYNTAX_CFDG_EXPLAIN'			=> 'CFDG',
	'CODEBOX_PLUS_SYNTAX_CFM_EXPLAIN'			=> 'ColdFusion',
	'CODEBOX_PLUS_SYNTAX_CHAISCRIPT_EXPLAIN'	=> 'ChaiScript',
	'CODEBOX_PLUS_SYNTAX_CIL_EXPLAIN'			=> 'CIL (Common Intermediate Language)',
	'CODEBOX_PLUS_SYNTAX_CLOJURE_EXPLAIN'		=> 'Clojure',
	'CODEBOX_PLUS_SYNTAX_COFFEESCRIPT_EXPLAIN'	=> 'CoffeeScript',
	'CODEBOX_PLUS_SYNTAX_CPPQT_EXPLAIN'			=> 'C++ (With Qt extensions)',
	'CODEBOX_PLUS_SYNTAX_CUESHEET_EXPLAIN'		=> 'Cuesheet',
	'CODEBOX_PLUS_SYNTAX_GDEF_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_D_EXPLAIN'				=> 'D',
	'CODEBOX_PLUS_SYNTAX_DCL_EXPLAIN'			=> 'DCL',
	'CODEBOX_PLUS_SYNTAX_DCPU16_EXPLAIN'		=> 'DCPU/16 Assembly',
	'CODEBOX_PLUS_SYNTAX_DCS_EXPLAIN'			=> 'DCS',
	'CODEBOX_PLUS_SYNTAX_DIFF_EXPLAIN'			=> 'Diff',
	'CODEBOX_PLUS_SYNTAX_DIV_EXPLAIN'			=> 'DIV',
	'CODEBOX_PLUS_SYNTAX_DOT_EXPLAIN'			=> 'Dot',
	'CODEBOX_PLUS_SYNTAX_E_EXPLAIN'				=> 'E',
	'CODEBOX_PLUS_SYNTAX_ECMASCRIPT_EXPLAIN'	=> 'ECMAScript',
	'CODEBOX_PLUS_SYNTAX_EIFFEL_EXPLAIN'		=> 'Eiffel',
	'CODEBOX_PLUS_SYNTAX_EMAIL_EXPLAIN'			=> 'Email (mbox\eml\RFC)',
	'CODEBOX_PLUS_SYNTAX_EPC_EXPLAIN'			=> 'Enerscript',
	'CODEBOX_PLUS_SYNTAX_ERLANG_EXPLAIN'		=> 'Erlang',
	'CODEBOX_PLUS_SYNTAX_EUPHORIA_EXPLAIN'		=> 'Euphoria',
	'CODEBOX_PLUS_SYNTAX_F1_EXPLAIN'			=> 'Formula One',
	'CODEBOX_PLUS_SYNTAX_FALCON_EXPLAIN'		=> 'Falcon',
	'CODEBOX_PLUS_SYNTAX_FO_EXPLAIN'			=> 'FO (Abas-ERP)',
	'CODEBOX_PLUS_SYNTAX_FORTRAN_EXPLAIN'		=> 'Fortran',
	'CODEBOX_PLUS_SYNTAX_FREEBASIC_EXPLAIN'		=> 'FreeBasic',
	'CODEBOX_PLUS_SYNTAX_FREESWITCH_EXPLAIN'	=> 'FreeSWITCH',
	'CODEBOX_PLUS_SYNTAX_FSHARP_EXPLAIN'		=> 'F#',
	'CODEBOX_PLUS_SYNTAX_GGHI_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_GAMBAS_EXPLAIN'		=> 'Gambas',
	'CODEBOX_PLUS_SYNTAX_GDB_EXPLAIN'			=> 'GDB',
	'CODEBOX_PLUS_SYNTAX_GENERO_EXPLAIN'		=> 'Genero (FOURJs Genero 4GL)',
	'CODEBOX_PLUS_SYNTAX_GENIE_EXPLAIN'			=> 'Genie',
	'CODEBOX_PLUS_SYNTAX_GETTEXT_EXPLAIN'		=> 'GNU Gettext',
	'CODEBOX_PLUS_SYNTAX_GLSL_EXPLAIN'			=> 'glSlang',
	'CODEBOX_PLUS_SYNTAX_GML_EXPLAIN'			=> 'GML',
	'CODEBOX_PLUS_SYNTAX_GNUPLOT_EXPLAIN'		=> 'Gnuplot',
	'CODEBOX_PLUS_SYNTAX_GO_EXPLAIN'			=> 'Go',
	'CODEBOX_PLUS_SYNTAX_GROOVY_EXPLAIN'		=> 'Groovy',
	'CODEBOX_PLUS_SYNTAX_GWBASIC_EXPLAIN'		=> 'GwBasic',
	'CODEBOX_PLUS_SYNTAX_HASKELL_EXPLAIN'		=> 'Haskell',
	'CODEBOX_PLUS_SYNTAX_HAXE_EXPLAIN'			=> 'Haxe',
	'CODEBOX_PLUS_SYNTAX_HICEST_EXPLAIN'		=> 'HicEst',
	'CODEBOX_PLUS_SYNTAX_HQ9PLUS_EXPLAIN'		=> 'HQ9+',
	'CODEBOX_PLUS_SYNTAX_INNO_EXPLAIN'			=> 'Inno Setup Script',
	'CODEBOX_PLUS_SYNTAX_ICON_EXPLAIN'			=> 'Icon',
	'CODEBOX_PLUS_SYNTAX_IDL_EXPLAIN'			=> 'Uno Idl',
	'CODEBOX_PLUS_SYNTAX_IO_EXPLAIN'			=> 'Io',
	'CODEBOX_PLUS_SYNTAX_GJKL_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_J_EXPLAIN'				=> 'J',
	'CODEBOX_PLUS_SYNTAX_KIXTART_EXPLAIN'		=> 'Kixtart',
	'CODEBOX_PLUS_SYNTAX_KLONEC_EXPLAIN'		=> 'KLone with C',
	'CODEBOX_PLUS_SYNTAX_KLONECPP_EXPLAIN'		=> 'KLone with C++',
	'CODEBOX_PLUS_SYNTAX_LB_EXPLAIN'			=> 'Liberty BASIC',
	'CODEBOX_PLUS_SYNTAX_LDIF_EXPLAIN'			=> 'LDIF',
	'CODEBOX_PLUS_SYNTAX_LISP_EXPLAIN'			=> 'Generic Lisp',
	'CODEBOX_PLUS_SYNTAX_LLVM_EXPLAIN'			=> 'LLVM Intermediate Representation',
	'CODEBOX_PLUS_SYNTAX_LOCOBASIC_EXPLAIN'		=> 'Locomotive Basic (Amstrad CPC series)',
	'CODEBOX_PLUS_SYNTAX_LOGTALK_EXPLAIN'		=> 'Logtalk',
	'CODEBOX_PLUS_SYNTAX_LOLCODE_EXPLAIN'		=> 'LOLcode',
	'CODEBOX_PLUS_SYNTAX_LOTUSFORMULAS_EXPLAIN'	=> 'Lotus Notes @Formulas',
	'CODEBOX_PLUS_SYNTAX_LOTUSSCRIPT_EXPLAIN'	=> 'LotusScript',
	'CODEBOX_PLUS_SYNTAX_LSCRIPT_EXPLAIN'		=> 'Lightwave Script',
	'CODEBOX_PLUS_SYNTAX_LSL2_EXPLAIN'			=> 'Linden Scripting Language (LSL2)',
	'CODEBOX_PLUS_SYNTAX_GMNO_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_M68K_EXPLAIN'			=> 'Motorola 68000 Assembler',
	'CODEBOX_PLUS_SYNTAX_MAGIKSF_EXPLAIN'		=> 'MagikSF',
	'CODEBOX_PLUS_SYNTAX_MAPBASIC_EXPLAIN'		=> 'MapBasic',
	'CODEBOX_PLUS_SYNTAX_MIRC_EXPLAIN'			=> 'mIRC Scripting',
	'CODEBOX_PLUS_SYNTAX_MMIX_EXPLAIN'			=> 'MMIX Assembler',
	'CODEBOX_PLUS_SYNTAX_MODULA2_EXPLAIN'		=> 'Modula-2',
	'CODEBOX_PLUS_SYNTAX_MODULA3_EXPLAIN'		=> 'Modula-3',
	'CODEBOX_PLUS_SYNTAX_MPASM_EXPLAIN'			=> 'Microchip Assembler',
	'CODEBOX_PLUS_SYNTAX_MXML_EXPLAIN'			=> 'MXML',
	'CODEBOX_PLUS_SYNTAX_NAGIOS_EXPLAIN'		=> 'Nagios',
	'CODEBOX_PLUS_SYNTAX_NETREXX_EXPLAIN'		=> 'NetRexx',
	'CODEBOX_PLUS_SYNTAX_NEWLISP_EXPLAIN'		=> 'newLISP',
	'CODEBOX_PLUS_SYNTAX_OBERON2_EXPLAIN'		=> 'Oberon-2',
	'CODEBOX_PLUS_SYNTAX_OBJC_EXPLAIN'			=> 'Objective-C',
	'CODEBOX_PLUS_SYNTAX_OBJECK_EXPLAIN'		=> 'Objeck',
	'CODEBOX_PLUS_SYNTAX_OCAML_EXPLAIN'			=> 'OCaml (Objective Caml)',
	'CODEBOX_PLUS_SYNTAX_OCAMLBRIEF_EXPLAIN'	=> 'OCaml (Objective Caml)',
	'CODEBOX_PLUS_SYNTAX_OCTAVE_EXPLAIN'		=> 'GNU Octave M-file',
	'CODEBOX_PLUS_SYNTAX_OOBAS_EXPLAIN'			=> 'OpenOffice.org Basic',
	'CODEBOX_PLUS_SYNTAX_OOREXX_EXPLAIN'		=> 'ooRexx',
	'CODEBOX_PLUS_SYNTAX_OXYGENE_EXPLAIN'		=> 'Oxygene (Delphi Prism)',
	'CODEBOX_PLUS_SYNTAX_OZ_EXPLAIN'			=> 'Oz',
	'CODEBOX_PLUS_SYNTAX_GPQRS_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_PARASAIL_EXPLAIN'		=> 'ParaSail',
	'CODEBOX_PLUS_SYNTAX_PARIGP_EXPLAIN'		=> 'PARI/GP',
	'CODEBOX_PLUS_SYNTAX_PER_EXPLAIN'			=> 'Per (forms) (FOURJs Genero 4GL)',
	'CODEBOX_PLUS_SYNTAX_PF_EXPLAIN'			=> 'OpenBSD Packet Filter',
	'CODEBOX_PLUS_SYNTAX_PIC16_EXPLAIN'			=> 'PIC16 Assembler',
	'CODEBOX_PLUS_SYNTAX_PIKE_EXPLAIN'			=> 'Pike',
	'CODEBOX_PLUS_SYNTAX_PIXELBENDER_EXPLAIN'	=> 'Pixel Bender 1.0',
	'CODEBOX_PLUS_SYNTAX_PLI_EXPLAIN'			=> 'PL/I',
	'CODEBOX_PLUS_SYNTAX_PLSQL_EXPLAIN'			=> 'Oracle 9.2 PL/SQL',
	'CODEBOX_PLUS_SYNTAX_POVRAY_EXPLAIN'		=> 'Povray',
	'CODEBOX_PLUS_SYNTAX_POWERBUILDER_EXPLAIN'	=> 'PowerBuilder (PowerScript)',
	'CODEBOX_PLUS_SYNTAX_PROFTPD_EXPLAIN'		=> 'ProFTPd configuration',
	'CODEBOX_PLUS_SYNTAX_PROGRESS_EXPLAIN'		=> 'Progress',
	'CODEBOX_PLUS_SYNTAX_PROLOG_EXPLAIN'		=> 'Prolog',
	'CODEBOX_PLUS_SYNTAX_PROPERTIES_EXPLAIN'	=> 'Properties',
	'CODEBOX_PLUS_SYNTAX_PROVIDEX_EXPLAIN'		=> 'ProvideX',
	'CODEBOX_PLUS_SYNTAX_PUREBASIC_EXPLAIN'		=> 'PureBasic',
	'CODEBOX_PLUS_SYNTAX_PYCON_EXPLAIN'			=> 'Python (console mode)',
	'CODEBOX_PLUS_SYNTAX_PYS60_EXPLAIN'			=> 'Python for S60',
	'CODEBOX_PLUS_SYNTAX_Q_EXPLAIN'				=> 'Q/Kdb+',
	'CODEBOX_PLUS_SYNTAX_QBASIC_EXPLAIN'		=> 'QBasic/QuickBASIC',
	'CODEBOX_PLUS_SYNTAX_RAILS_EXPLAIN'			=> 'Ruby (with Ruby on Rails Framework)',
	'CODEBOX_PLUS_SYNTAX_REBOL_EXPLAIN'			=> 'Rebol',
	'CODEBOX_PLUS_SYNTAX_REXX_EXPLAIN'			=> 'Rexx',
	'CODEBOX_PLUS_SYNTAX_RPMSPEC_EXPLAIN'		=> 'RPM Specification File',
	'CODEBOX_PLUS_SYNTAX_RSPLUS_EXPLAIN'		=> 'R/S+',
	'CODEBOX_PLUS_SYNTAX_SAS_EXPLAIN'			=> 'SAS',
	'CODEBOX_PLUS_SYNTAX_SCALA_EXPLAIN'			=> 'Scala',
	'CODEBOX_PLUS_SYNTAX_SCHEME_EXPLAIN'		=> 'Scheme',
	'CODEBOX_PLUS_SYNTAX_SCILAB_EXPLAIN'		=> 'SciLab',
	'CODEBOX_PLUS_SYNTAX_SDLBASIC_EXPLAIN'		=> 'sdlBasic',
	'CODEBOX_PLUS_SYNTAX_SMALLTALK_EXPLAIN'		=> 'SmallTalk',
	'CODEBOX_PLUS_SYNTAX_SMARTY_EXPLAIN'		=> 'Smarty',
	'CODEBOX_PLUS_SYNTAX_SPARK_EXPLAIN'			=> 'SPARK',
	'CODEBOX_PLUS_SYNTAX_SPARQL_EXPLAIN'		=> 'SPARQL',
	'CODEBOX_PLUS_SYNTAX_STONESCRIPT_EXPLAIN'	=> 'StoneScript',
	'CODEBOX_PLUS_SYNTAX_SYSTEMVERILOG_EXPLAIN'	=> 'SystemVerilog IEEE 1800-2009(draft8)',
	'CODEBOX_PLUS_SYNTAX_GTUV_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_TCL_EXPLAIN'			=> 'TCL/iTCL',
	'CODEBOX_PLUS_SYNTAX_TERATERM_EXPLAIN'		=> 'Tera Term Macro',
	'CODEBOX_PLUS_SYNTAX_THINBASIC_EXPLAIN'		=> 'thinBasic',
	'CODEBOX_PLUS_SYNTAX_TSQL_EXPLAIN'			=> 'T-SQL',
	'CODEBOX_PLUS_SYNTAX_TYPOSCRIPT_EXPLAIN'	=> 'TypoScript',
	'CODEBOX_PLUS_SYNTAX_UNICON_EXPLAIN'		=> 'Unicon (Unified Extended Dialect of Icon)',
	'CODEBOX_PLUS_SYNTAX_UPC_EXPLAIN'			=> 'UPC',
	'CODEBOX_PLUS_SYNTAX_URBI_EXPLAIN'			=> 'Urbi',
	'CODEBOX_PLUS_SYNTAX_USCRIPT_EXPLAIN'		=> 'Unreal Script',
	'CODEBOX_PLUS_SYNTAX_VALA_EXPLAIN'			=> 'Vala',
	'CODEBOX_PLUS_SYNTAX_VEDIT_EXPLAIN'			=> 'Vedit macro',
	'CODEBOX_PLUS_SYNTAX_VHDL_EXPLAIN'			=> 'VHSIC Hardware Description Language',
	'CODEBOX_PLUS_SYNTAX_VIM_EXPLAIN'			=> 'Vim Script',
	'CODEBOX_PLUS_SYNTAX_VISUALFOXPRO_EXPLAIN'	=> 'Visual FoxPro',
	'CODEBOX_PLUS_SYNTAX_VISUALPROLOG_EXPLAIN'	=> 'Visual Prolog',
	'CODEBOX_PLUS_SYNTAX_GWXYZ_EXPLAIN'			=> '',
	'CODEBOX_PLUS_SYNTAX_WHITESPACE_EXPLAIN'	=> 'Whitespace',
	'CODEBOX_PLUS_SYNTAX_WHOIS_EXPLAIN'			=> 'Whois response (RPSL format)',
	'CODEBOX_PLUS_SYNTAX_WINBATCH_EXPLAIN'		=> 'WinBatch',
	'CODEBOX_PLUS_SYNTAX_XBASIC_EXPLAIN'		=> 'XBasic',
	'CODEBOX_PLUS_SYNTAX_XORG_CONF_EXPLAIN'		=> 'Xorg configuration (xorg.conf)',
	'CODEBOX_PLUS_SYNTAX_XPP_EXPLAIN'			=> 'Axapta/Dynamics Ax X++',
	'CODEBOX_PLUS_SYNTAX_Z80_EXPLAIN'			=> 'ZiLOG Z80 Assembler',
	'CODEBOX_PLUS_SYNTAX_ZXBASIC_EXPLAIN'		=> 'ZXBasic',
));
