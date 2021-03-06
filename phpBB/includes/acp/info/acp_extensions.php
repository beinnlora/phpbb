<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

class acp_extensions_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_extensions',
			'title'		=> 'ACP_EXTENSION_MANAGEMENT',
			'modes'		=> array(
				'main'		=> array('title' => 'ACP_EXTENSIONS', 'auth' => 'acl_a_extensions', 'cat' => array('ACP_EXTENSION_MANAGEMENT')),
				'catalog'	=> array('title' => 'ACP_EXTENSIONS_CATALOG', 'auth' => 'acl_a_extensions', 'cat' => array('ACP_EXTENSION_MANAGEMENT')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
