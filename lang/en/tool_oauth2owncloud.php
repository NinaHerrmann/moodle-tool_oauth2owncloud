<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * tool_oauth2owncloud.php for oauth2owncloud admin tool. Contains all defined language strings.
 *
 * @package    tool_oauth2owncloud
 * @copyright  2017 Westfälische Wilhelms-Universität Münster (WWU Münster)
 * @author     Projektseminar Uni Münster
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// General.
$string['pluginname'] = 'ownCloud authentication';
$string['owncloud:view'] = 'View a ownCloud folder';
$string['missing_settings_admin'] = 'Please check the required client settings. Some might be missing.';
$string['missing_settings_user'] = 'Some required ownCloud client settings are missing. Please contact your site administrator.';
$string['socketclosed'] = 'WebDAV socket could not be opened.';

// Settings.
$string['clientid'] = 'Client ID';
$string['secret'] = 'Secret';
$string['server'] = 'ownCloud Server';
$string['path'] = 'ownCloud Path';
$string['protocol'] = 'Protocol';
$string['port'] = 'Port';
$string['oauthlegend'] = 'OAuth 2.0:';
$string['oauthinfo'] = 'Settings for the OAuth 2.0 client.';
$string['webdavlegend'] = 'WebDAV:';
$string['webdavinfo'] = 'Settings for the WebDAV client.';
$string['oauth2app'] = 'In order to be able to use this plugin\'s features, you need to have the {$a} installed and enabled.';
$string['help_oauth_param'] = 'In the OAuth2 App of your ownCloud instance you can find the {$a}.';
$string['help_server'] = 'The server address is the part of your ownCloud URL after www. until .de/.com etc.';
$string['help_path'] = 'This is the webdav path of your ownCloud instance. Quiet likely it is remote.php/webdav but due to specific URLs it can have other prefixes.';
$string['help_port'] = 'The Port is dependent on the protocol and individual settings of the ownCloud server. It is set to the standard of the protocol if you leave it empty.';
$string['help_protocol'] = 'We only support http and https. You can find the protocol in the URL of your ownCloud instance.';

// Exceptions.
$string['authentication'] = ' An authentication error occurred: {$a}';
$string['config'] = ' An error concerning the client configuration occurred: {$a}';
$string['response'] = ' An error concerning a WebDAV response occurred: {$a}';
$string['socket'] = ' A WebDAV socket exception occurred: {$a}';
