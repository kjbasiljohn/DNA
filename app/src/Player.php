<?php
namespace Basil{

    use SilverStripe\ORM\DataObject;
    use Basil\Team;

    class Player extends DataObject 
    {
        private static $db = [
            'Name' => 'Varchar(255)',
        ];

        private static $belongs_many_many = [
            "Teams" => Team::class,
        ];

        private static $table_name = 'Player';

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();   
            
   
            return $fields;
        }                

    }
}