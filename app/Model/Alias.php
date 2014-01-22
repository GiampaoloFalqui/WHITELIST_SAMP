<?php
/**
 * Alias model.
 *
 * WHITELIST_SAMP: Global Blacklist Platform (https://github.com/GiampaoloFalqui/WHITELIST_SAMP)
 * 
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          https://github.com/GiampaoloFalqui/WHITELIST_SAMP WHITELIST_SAMP
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Alias model.
 *
 *
 */
class Alias extends Model {
  
  /**
   * An Alias belongs to an User.
   */
  public $belongsTo = 'User';
  
  /**
   * An Alias has many addresses, if necessary.
   */
  public $hasMany = 'Address';
}