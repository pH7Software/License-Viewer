<?php
/**
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2013, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License <http://www.gnu.org/licenses/>
 */
 
$sLang = (!empty($_GET['l']) ? strip_tags($_GET['l']) : '');
$sLicDir = __DIR__ . '/data/'; 
$sLangFile = $sLang . '.txt'; 
$sLicPath = (is_file($sLicDir . $sLangFile)) ? $sLicDir . $sLangFile : $sLicDir . 'en.txt';

header('Content-Type: text/html; charset=utf-8');
echo nl2br(file_get_contents($sLicPath));
