<?php
namespace Asyr\Module\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'asyr_module_post';

	protected $_cacheTag = 'asyr_module_post';

	protected $_eventPrefix = 'asyr_module_post';

	protected function _construct()
	{
		$this->_init('Asyr\Module\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
