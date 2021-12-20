<?php

namespace Basil{

    use SilverStripe\ORM\DataObject;

    class Colour extends DataObject 
    {
        private static $db = [
            'Name' => 'Varchar(255)',
        ];

        private static $table_name = 'Colour';

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();   
            
   
            return $fields;
        }                
        
    }
}