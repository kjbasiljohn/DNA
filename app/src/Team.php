<?php
namespace Basil{

    use SilverStripe\ORM\DataObject;
    use Basil\Player;
    use Basil\Colour;
    use SilverStripe\Assets\Image;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Forms\OptionsetField;

class Team extends DataObject 
    {
        private static $db = [        
            'Name' => 'Varchar(255)',
            'Type' => 'Varchar(20)', // regional/national
            'Sport' => 'Varchar(20)', // rubgy/cricket
            'Mascot' => 'Varchar(255)',
            ///'Season' => 'Varchar(100)',
        ];

        private static $has_one = [
            'Logo' => Image::class,        
            'Color' => Colour::class, 
        ];    

        private static $many_many = [
            "Players" => Player::class,
        ];

        private static $table_name = 'Team';

        public function getCMSFields() 
        {
            $fields = parent::getCMSFields();
            // ...

            $fields->addFieldToTab('Root.Main', 
                OptionsetField::create('Type', 'Type', 
                    [
                        'regional' => 'regional',
                        'national' => 'national'
                    ]
                ));            
   
            $fields->addFieldToTab('Root.Main', 
                OptionsetField::create('Sport', 'Sport', 
                    [
                        'rubgy' => 'rubgy',
                        'cricket' => 'cricket'
                    ]
                ));            
   
            $fields->addFieldToTab('Root.Main', UploadField::create('Logo'));            
   
            return $fields;
       }                
    }
}