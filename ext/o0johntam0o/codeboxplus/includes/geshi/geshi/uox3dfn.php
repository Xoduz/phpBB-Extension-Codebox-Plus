<?php
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

/*************************************************************************************
 * uox3dfn.php
 * --------------
 * Author: Geir Ove Alnes (xuri@xoduz.org)
 * Copyright: (c) 2012 Geir Ove Alnes (xuri@xoduz.org)
 * Release Version: 1.0.1.0
 * Date Started: 2012/01/15
 *
 * UOX3 DFN language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2020/09/23 (1.0.1)
 *  -  Updated for phpBB 3.3.1
 * 2012/01/15 (1.0.0)
 *  -  First Release
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'UOX3Dfn',
    'COMMENT_SINGLE' => array(1 => '//'),
	'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Regular Expressions
        2 => "/(?<=[\\s^])(s|tr|y)\\/(?!\*)(?!\s)(?:\\\\.|(?!\n)[^\\/\\\\])+(?<!\s)\\/(?!\s)(?:\\\\.|(?!\n)[^\\/\\\\])*(?<!\s)\\/[msixpogcde]*(?=[\\s$\\.\\;])|(?<=[\\s^(=])(m|q[qrwx]?)?\\/(?!\*)(?!\s)(?:\\\\.|(?!\n)[^\\/\\\\])+(?<!\s)\\/[msixpogc]*(?=[\\s$\\.\\,\\;\\)])/iU"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
	'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
            'ac', 'alchemy', 'amount', 'anatomy', 'animallore', 'archery', 'armslore', 'att',
            'backpack', 'begging', 'blacksmithing', 'bowcraft', 'bushido', 'camping', 'carpentry', 'cartography', 'carve',
            'chivalry', 'cold', 'colour', 'color', 'colourlist', 'colorlist', 'colourmatchhair', 'colormatchhair', 'cooking', 'corpse',
            'creator', 'customstringtag', 'custominttag', 'damage', 'elementresist', 'decay', 'def', 'detectinghidden', 'dex',
            'dexterity','dexadd', 'dx', 'dx2', 'dir', 'direction', 'dispellable', 'disabled', 'doorflag', 'dye', 'emotecolour', 'emotecolor',
            'enticement', 'evaluatingintel', 'fame', 'fencing', 'fishing', 'fleeat', 'focus', 'forensics', 'fx1', 'fx2', 'fy1', 'fy2', 'fz1',
            'food', 'get', 'glow', 'glowbc', 'glowtype', 'gold', 'good', 'haircolour', 'haircolor', 'healing', 'heat', 'herding', 'hidamage',
            'hiding', 'hp', 'hpmax', 'id', 'in', 'intelligence', 'int', 'in2', 'intadd', 'inscription', 'equipitem', 'itemid', 'karma',
            'layer', 'light', 'lightning', 'lockpicking', 'lodamage', 'loot', 'lumberjacking', 'macefighting', 'magery', 'magicresistance',
            'maxhp', 'meditation', 'mining', 'movable', 'more', 'more2', 'morex', 'morey', 'morez', 'musicianship', 'name',
            'name2', 'namelist', 'necromancy', 'newbie', 'ninjitsu', 'notrain', 'npcai', 'npcwander', 'offspell',
            'packitem', 'parrying', 'peacemaking', 'pileable', 'poisondamage', 'poisonstrength', 'poisoned', 'poisoning',
            'priv', 'provocation', 'race', 'rain', 'rank', 'reattackat', 'removetraps', 'restock', 'rshopitem', 'runs',
            'saycolour', 'saycolor', 'script', 'sellitem', 'shopitem', 'shopkeeper', 'shoplist', 'sk_made', 'skill', 'skillvar',
            'skin', 'skinlist', 'snooping', 'snow', 'spadelay', 'spattack', 'spawnobj', 'spawnobjlist', 'speed', 'spd', 'spiritspeak',
            'split', 'splitchance', 'str', 'strength', 'st2', 'stradd', 'stealing', 'stealth', 'swordsmanship', 'tactics', 'tailoring',
            'taming', 'tamedhunger', 'willhunger', 'tasteid', 'tinkering', 'title', 'totame', 'toprov', 'topeace',
            'tracking', 'type', 'value', 'veterinary', 'visible', 'weight', 'wipe', 'wrestling', 'itemlist', 'npclist',
            'stamina', 'staminamax', 'mana', 'manamax', 'advobj', 'dyehair', 'dyebeard', 'killhair', 'killbeard', 'killpack',
            'poly', 'addmenuitem', 'interval', 'flag', 'walkingspeed', 'runningspeed', 'fleeingspeed', 'ammo', 'ammofx',
            'weightmax', 'spellweaving', 'imbuing', 'mysticism', 'throwing'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}',
        '+', '-', '*', '/', '%',
        '!', '@', '&', '|', '^',
        '<', '>', '=',
        ',', ';', '?', ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #000066; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #006600; font-style: italic;',
            2 => 'color: #009966; font-style: italic;',
            'MULTI' => 'color: #006600; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #3366CC;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000ff;'
            ),
        'METHODS' => array(
            1 => 'color: #660066;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        0 => array(
            '<script type="text/uox3dfn">' => '</script>'
            ),
        1 => array(
            '<script language="uox3dfn">' => '</script>'
            )
        ),
    'TAB_WIDTH' => 4,
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true
        )
);

?>