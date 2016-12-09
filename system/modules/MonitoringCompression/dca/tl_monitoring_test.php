<?php

use Monitoring\MonitoringCompressor;
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2014 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2014
 * @author     Cliff Parnitzky
 * @package    MonitoringCompression
 * @license    LGPL
 */

/**
 * Add css for styling global operations button
 */
$GLOBALS['TL_CSS'][] = 'system/modules/MonitoringCompression/assets/styles.css';

/**
 * Add global operations
 */
array_insert($GLOBALS['TL_DCA']['tl_monitoring_test']['list']['global_operations'], count($GLOBALS['TL_DCA']['tl_monitoring_test']['list']['global_operations']) - 1, array
(
    'compressOne' => array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_monitoring_test']['compressOne'],
        'href'  => 'key=compressOne',
        'class' => 'header_icon tl_monitoring_test_compress'
    )
));

/**
 * Add to palette
 */
$GLOBALS['TL_DCA']['tl_monitoring_test']['palettes']['default'] .= ";{compression_legend},compression_type";

/**
 * Add fields
 */
$GLOBALS['TL_DCA']['tl_monitoring_test']['fields']['compression_type'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_monitoring_test']['compression_type'],
    'exclude'                 => true,
    'filter'                  => true,
    'sorting'                 => true,
    'inputType'               => 'select',
    'default'                 => MonitoringCompressor::COMPRESSION_NONE,
    'options'                 => array(MonitoringCompressor::COMPRESSION_NONE, MonitoringCompressor::COMPRESSION_DAY, MonitoringCompressor::COMPRESSION_MONTH, MonitoringCompressor::COMPRESSION_IMPOSSIBLE),
    'reference'               => &$GLOBALS['TL_LANG']['tl_monitoring_test']['compressionTypes'],
    'eval'                    => array('tl_class'=>'w50', 'readonly'=>true, 'helpwizard'=>true),
    'sql'                     => "varchar(16) NOT NULL default '" . MonitoringCompressor::COMPRESSION_NONE . "'"
);

?>