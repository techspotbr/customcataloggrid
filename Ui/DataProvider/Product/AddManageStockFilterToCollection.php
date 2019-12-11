<?php

namespace Techspot\CustomCatalogGrid\Ui\DataProvider\Product; 

use Magento\Ui\DataProvider\AddFilterToCollectionInterface;

class AddManageStockFilterToCollection implements AddFilterToCollectionInterface 
{ 
    public function addFilter(
        \Magento\Framework\Data\Collection $collection, 
        $field, 
        $condition = null
    ) 
    { 
        $dbExpr = new \Zend_Db_Expr('(SELECT COUNT(*) FROM catalog_product_entity_media_gallery_value as at_media WHERE at_media.entity_id = e.entity_id)');
        if(isset($condition['gteq'])){
            $collection->getSelect()
                ->group('e.entity_id')
                ->having( $dbExpr .' >= ?', $condition['gteq']);
        }

        if(isset($condition['lteq'])){
            $collection->getSelect()
                ->group('e.entity_id')
                ->having( $dbExpr .' <= ?', $condition['lteq']);
        }
    } 
}