<?php 
namespace Techspot\CustomCatalogGrid\Ui\DataProvider\Product;

use \Magento\Ui\DataProvider\AddFieldToCollectionInterface;

class AddManageStockFieldToCollection implements AddFieldToCollectionInterface
{
    public function addField(
        \Magento\Framework\Data\Collection $collection, 
        $field, 
        $alias = null)
    {
        $collection->getSelect()->columns(new \Zend_Db_Expr('(SELECT COUNT(*) FROM catalog_product_entity_media_gallery_value as at_media WHERE at_media.entity_id = e.entity_id) as qty_photos'));
    }
}