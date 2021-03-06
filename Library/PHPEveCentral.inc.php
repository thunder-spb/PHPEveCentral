<?php



/**
 *
 * Copyright (c) 2012 Marc André "Manhim" Audet <root@manhim.net>. All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 *   1. Redistributions of source code must retain the above copyright notice, this list of
 *       conditions and the following disclaimer.
 *
 *   2. Redistributions in binary form must reproduce the above copyright notice, this list
 *       of conditions and the following disclaimer in the documentation and/or other materials
 *       provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL MARC ANDRÉ "MANHIM" AUDET BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 */
 
 
 
namespace PHPEveCentral;



define(__NAMESPACE__ . '\VERSION', '12.09');
define(__NAMESPACE__ . '\LIBPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define(__NAMESPACE__ . '\BASEURL', 'http://api.eve-central.com/api/');



function Autoload($CName)
{
	if ($CName === 'PHPEveCentral')
	{
		require_once LIBPATH . 'PHPEveCentral.php';
	}
	else if (strpos($CName, '\\'))
	{
		$ex = explode('\\', $CName);
		$filepath = LIBPATH . implode(DIRECTORY_SEPARATOR, array_slice($ex, 1)) . '.php';
		
		if ($ex[0] === 'PHPEveCentral' && file_exists($filepath))
		{
			require_once $filepath;
		}
	}
}



spl_autoload_register('\PHPEveCentral\Autoload');
