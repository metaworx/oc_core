<?php

/**
 * ownCloud
 *
 * @copyright (C) 2015 ownCloud, Inc.
 *
 * @author Bjoern Schiessle <schiessle@owncloud.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace OC\Encryption;

class Manager implements \OCP\Encryption\IManager {

	/**
	 * Check if encryption is available (at least one encryption module needs to be enabled)
	 *
	 * @return bool true if enabled, false if not
	 */
	public function isEnabled() {
		return true;
	}

	/**
	 * Registers an encryption module
	 *
	 * @param \OCP\IEncryptionModule $module
	 * @return void
	 */
	public function registerEncryptionModule(\OCP\IEncryptionModule $module) {
		null;
	}

	/**
	 * Unregisters an encryption module
	 *
	 * @param \OCP\IEncryptionModule $module
	 * @return void
	 */
	public function unregisterEncryptionModule(\OCP\IEncryptionModule $module) {
		null;
	}

	/**
	 * get a list of all encryption modules
	 *
	 * @return array
	 */
	function getEncryptionModules() {
		return array();
	}

	/**
	 * get a specific encryption module
	 *
	 * @param string $module unique key of encryption module, if no module is defined we take the default module
	 * @return \OCP\Encryption\IEncryptionModule
	 */
	function getEncryptionModule($module = null) {
		// thow exception if "$module" doesn't exists
		return $module;
	}

}