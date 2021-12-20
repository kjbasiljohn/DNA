<?php
namespace Basil\Controller;

use Basil\Player;
use SilverStripe\CMS\Controllers\ContentController;
//use SilverStripe\Control\Controller;

class PlayerController extends ContentController
{

    private static $allowed_actions = [
        'search'
    ];


    public function search()
    {
     
        $name = $this->getRequest()->getVar('name');

        $player = Player::get()->filter('Name:PartialMatch', $name)->first();
        
        return $this->renderWith(['Player', 'Page'], [
            'Name' => $name,
            'Player' => $player,
        ]);
        
    }

    
}