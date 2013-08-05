<?php

/**
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 3 of the License, or (at
 *   your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful, but
 *   WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 *   General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program; if not, see <http://www.gnu.org/licenses/>.
 *
 *   @author          Black Cat Development
 *   @copyright       2013, Black Cat Development
 *   @link            http://blackcat-cms.org
 *   @license         http://www.gnu.org/licenses/gpl.html
 *   @category        CAT_Modules
 *   @package         helloworld
 *
 */

if (defined('CAT_PATH')) {
    if (defined('CAT_VERSION')) include(CAT_PATH.'/framework/class.secure.php');
} elseif (file_exists($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php')) {
    include($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php');
} else {
    $subs = explode('/', dirname($_SERVER['SCRIPT_NAME']));    $dir = $_SERVER['DOCUMENT_ROOT'];
    $inc = false;
    foreach ($subs as $sub) {
        if (empty($sub)) continue; $dir .= '/'.$sub;
        if (file_exists($dir.'/framework/class.secure.php')) {
            include($dir.'/framework/class.secure.php'); $inc = true;    break;
        }
    }
    if (!$inc) trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
}

$module_directory   = 'helloworld';
$module_name        = 'Hello World Module';
$module_function    = 'page';
$module_version     = '1.0';
$module_platform    = '1.x';
$module_author      =  'Black Cat Development';
$module_license     = 'GNU General Public License';
$module_description = 'This module can be used as a template for creating own modules. All files are commented to help developers to get started. For more in-depth information, please visit our homepage (http://blackcat-cms.org) and/or our GitHub Wiki (https://github.com/webbird/LEPTON_2_BlackCat/wiki).';
$module_guid        = 'A554BF26-229C-48F6-B8D3-E5DDACFFFAC1';

################################################################################
#
# Every module and template installation file (*.zip) must ship a file info.php,
# which contains important information about the module name and version, the
# module author, license terms, etc.
#
# This file is used upon module installation / upgrade, and in the Backend to
# show module details.
#
# ----------[              LIST OF MANDATORY VARIABLES               ]----------
#
# If any of these variables is missing, you will not be able to install the
# module!
#
#   $module_author
#     The name(s) of the module author(s).
#
#   $module_directory
#     Unique installation directory. Will be created on installation.
#
#   $module_function
#     The type of the module. Valid types are: 'page', 'tool', 'snippet',
#     'library', 'wysiwyg' and 'widget'.
#
#   $module_name
#     Unique name of the module. This is used to list the module, for example 
#     when adding a new page ($module_function = 'page').
#
#   $module_version
#     The module version.
#
#
# ----------[               LIST OF OPTIONAL VARIABLES               ]----------
#
#   $module_description
#     A short description of the module.
#
#   $module_guid
#     A unique ID. Use http://createguid.com/ for example to create one.
#
#   $module_home
#     Link to the author's / module's home, support forum, or similar.
#
#   $module_license
#     The module's license. If no license is given, 'GNU GPLv3' is assumed.
#
#
# ----------[               MODULE SPECIFIC VARIABLES                ]----------
#
# You may define any number of module specific variables, as long as the var
# names do not clash with the ones listed above. Please note that these other
# variables are simply ignored by the CMS core.
#
################################################################################