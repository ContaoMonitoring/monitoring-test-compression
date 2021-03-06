<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2016 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2016
 * @author     Cliff Parnitzky
 * @package    MonitoringCompression
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['response_time_combination'] = array('Antwortzeit Zusammenfassung', 'Der Wert der Antwortzeiten, welcher in das komprimierte Testergebnis übernommen wurde.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['response_times']            = array('Antwortzeiten', 'Alle Antwortzeiten diese komprimierten Testergebnisses.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['response_times_date']       = array('Datum / Uhrzeit', 'Zeitstempel des Tests.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['response_times_time']       = array('Antwortzeit', 'Die Antwortzeit zu diesem Zeitpunkt.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['compression_type']          = array('Komprimierungsart', 'Die Art der Komprimierung dieses Testergebnisses.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['compression_legend'] = 'Komprimierung';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['compressionTypes'][MonitoringCompressor::COMPRESSION_NONE]       = array('Keine', 'Das Testergebnis ist nicht komprimiert, es gilt nur für den Testzeitpunkt.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['compressionTypes'][MonitoringCompressor::COMPRESSION_DAY]        = array('Tag', 'Das Testergebnis fasst alle Tests eines Tages zusammen.');
$GLOBALS['TL_LANG']['tl_monitoring_test']['compressionTypes'][MonitoringCompressor::COMPRESSION_IMPOSSIBLE] = array('Unmöglich', 'Das Testergebnis kann nicht zusammengefasst werden, weil nicht alle Testergebnisse des selben Tages den gleichen Status haben.');

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_monitoring_test']['compressOne'] = array('Tests komprimieren', 'Komprimiert die Testergebnisse dieses Monitoring Eintrags.');

?>