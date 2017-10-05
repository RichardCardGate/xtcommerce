<?php
/**
 * Copyright (c) 2016 CardGate B.V.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @license     The MIT License (MIT) https://opensource.org/licenses/MIT
 * @author      CardGate B.V.
 * @copyright   CardGate B.V.
 * @link        https://www.cardgate.com
 */
namespace cardgate\api {

	/**
	 * Customer instance.
	 *
	 * @method Customer setEmail( string $sEmail_ )
	 * @method string getEmail()
	 * @method boolean hasEmail()
	 * @method Customer unsetEmail()
	 *
	 * @method Customer setPhone( string $sPhone_ )
	 * @method string getPhone()
	 * @method boolean hasPhone()
	 * @method Customer unsetPhone()
	 */
	final class Customer extends Entity {

		/**
		 * @ignore
		 * @internal The methods these fields expose are configured in the class phpdoc.
		 */
		static $_aFields = [
			'Email'			=> 'email',
			'Phone'			=> 'phone'
		];

		/**
		 * The bill-to address.
		 * @var Address
		 * @access private
		 */
		private $_oAddress = NULL;

		/**
		 * The ship-to address.
		 * @var Address
		 * @access private
		 */
		private $_oShippingAddress = NULL;

		/**
		 * Accessor for the bill-to address.
		 * @return Address
		 * @access public
		 * @api
		 */
		public function address() {
			if ( NULL == $this->_oAddress ) {
				$this->_oAddress = new Address();
			}
			return $this->_oAddress;
		}

		/**
		 * Accessor for the ship-to address.
		 * @return Address
		 * @access public
		 * @api
		 */
		public function shippingAddress() {
			if ( NULL == $this->_oShippingAddress ) {
				$this->_oShippingAddress = new Address();
			}
			return $this->_oShippingAddress;
		}

	}

}
