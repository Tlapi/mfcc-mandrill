<?php
/**
 * Copyright (c) 2011-2013 Jan Tlapak <jan@mfcc.cz>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category  MfccMandrill
 * @package   Mfcc
 * @author    Jan Tlapak <jan@mfcc.cz>
 * @copyright 2011-2013 Jan Tlapak
 * @license   http://www.opesource.org/licenses/mit-license.php MIT-License
 *
 * Documentation: vendor/mandrill/mandrill/docs/index.html
 */
namespace MfccMandrill\Service;

use Mandrill;

/**
 * Zendesk Service
 */
class MandrillService {

	/**
     * Api key for Mandrill
     *
     * @var string $mandrillApiKey
     */
	protected $mandrillApiKey;

	/**
     * Mandrill library class
     * @see https://bitbucket.org/mailchimp/mandrill-api-php
     *
     * @var string $mandrill
     */
	protected $mandrill;


	// Mandrill Setters

	/**
	 * Set mandrill Api Key
	 * @param string $mandrillApiKey
	 * @return MandrillService
	 */
	public function setMandrillApiKey($mandrillApiKey)
	{
		$this->mandrillApiKey = $mandrillApiKey;

		$this->mandrill = new Mandrill($mandrillApiKey);

		// TODO add this as option ?
		curl_setopt($this->mandrill->ch, CURLOPT_SSL_VERIFYPEER, false);

		return $this;
	}

	/**
	 * Call mandrill method
	 * @param string $url
	 * @param struct $params
	 */
	public function call($url, $params) {
		return $this->mandrill->call($url, $params);
	}

}