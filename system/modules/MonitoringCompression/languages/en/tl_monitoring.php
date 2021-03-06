<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2019 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2016-2019
 * @author     Cliff Parnitzky
 * @package    MonitoringCompression
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_monitoring']['disable_auto_compression']  = array('Disable automatic compression', 'Select whether the automatic compression for this monitoring entry should be disabled.');
$GLOBALS['TL_LANG']['tl_monitoring']['response_time_combination'] = array('Combination of response times', 'Select which value of the response times, deviating from the system setting, should be taken over into the compressed test result.');

/**
 * Legends
*/
$GLOBALS['TL_LANG']['tl_monitoring']['compression_legend'] = 'Compression';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_monitoring']['compressAll'] = array('Compress all tests', 'Compresses the test results of all monitoring entries.');
$GLOBALS['TL_LANG']['tl_monitoring']['compressOne'] = array('Compress tests', 'Compresses the test results of monitoring entry with ID %s.');

?>