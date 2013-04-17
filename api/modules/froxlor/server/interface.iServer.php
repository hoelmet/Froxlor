<?php

/**
 * Froxlor API Server-Module interface
 *
 * PHP version 5
 *
 * This file is part of the Froxlor project.
 * Copyright (c) 2010- the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @category   Modules
 * @package    API
 * @since      0.99.0
 */

/**
 * Interface iServer
 *
 * @copyright  (c) the authors
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @category   Modules
 * @package    API
 * @since      0.99.0
 */
interface iServer {

	/**
	 * returns a server by given id
	 *
	 * @param int $id id of the server
	 *
	 * @throws ServerException
	 * @return array
	 */
	public static function statusServer();

	/**
	 * returns all servers, optionally only servers
	 * owned by given $owner
	 *
	 * @param int $owner optional id of the owner-user
	 *
	 * @throws ServerException if given owner does not exist
	 * @return array
	*/
	public static function listServer();

}