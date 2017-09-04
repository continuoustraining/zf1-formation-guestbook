<?php

/**
 * Guestbook model
 *
 * Utilizes the Data Mapper pattern to persist data. Represents a single 
 * guestbook entry.
 * 
 * @uses       Default_Model_GuestbookMapper
 * @package    QuickStart
 * @subpackage Model
 */
class Default_Model_Guestbook extends Zend_Db_Table_Row_Abstract
{
	
	public function save()
	{
		if (!$this->created) {
			$this->created = date('Y-m-d H:i:s');
		}
		return parent::save();
	}
}
