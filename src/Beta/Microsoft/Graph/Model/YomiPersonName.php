<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YomiPersonName File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* YomiPersonName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YomiPersonName extends Entity
{
    /**
    * Gets the displayName
    * Composite of first and last name pronunciation guides.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Composite of first and last name pronunciation guides.
    *
    * @param string $val The value of the displayName
    *
    * @return YomiPersonName
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the first
    * Pronunciation guide for the first name of the user.
    *
    * @return string The first
    */
    public function getFirst()
    {
        if (array_key_exists("first", $this->_propDict)) {
            return $this->_propDict["first"];
        } else {
            return null;
        }
    }

    /**
    * Sets the first
    * Pronunciation guide for the first name of the user.
    *
    * @param string $val The value of the first
    *
    * @return YomiPersonName
    */
    public function setFirst($val)
    {
        $this->_propDict["first"] = $val;
        return $this;
    }
    /**
    * Gets the last
    * Pronunciation guide for the last name of the user.
    *
    * @return string The last
    */
    public function getLast()
    {
        if (array_key_exists("last", $this->_propDict)) {
            return $this->_propDict["last"];
        } else {
            return null;
        }
    }

    /**
    * Sets the last
    * Pronunciation guide for the last name of the user.
    *
    * @param string $val The value of the last
    *
    * @return YomiPersonName
    */
    public function setLast($val)
    {
        $this->_propDict["last"] = $val;
        return $this;
    }
    /**
    * Gets the maiden
    * Pronunciation guide for the maiden name of the user.
    *
    * @return string The maiden
    */
    public function getMaiden()
    {
        if (array_key_exists("maiden", $this->_propDict)) {
            return $this->_propDict["maiden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maiden
    * Pronunciation guide for the maiden name of the user.
    *
    * @param string $val The value of the maiden
    *
    * @return YomiPersonName
    */
    public function setMaiden($val)
    {
        $this->_propDict["maiden"] = $val;
        return $this;
    }
    /**
    * Gets the middle
    * Pronunciation guide for the middle name of the user.
    *
    * @return string The middle
    */
    public function getMiddle()
    {
        if (array_key_exists("middle", $this->_propDict)) {
            return $this->_propDict["middle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the middle
    * Pronunciation guide for the middle name of the user.
    *
    * @param string $val The value of the middle
    *
    * @return YomiPersonName
    */
    public function setMiddle($val)
    {
        $this->_propDict["middle"] = $val;
        return $this;
    }
}
