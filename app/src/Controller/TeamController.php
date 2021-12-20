<?php
namespace Basil\Controller;

use SilverStripe\CMS\Controllers\ContentController;
use Basil\Team;

class TeamController extends ContentController
{
 
    private static $allowed_actions = [
        'search'
    ];

    public function search()
    {
        $name = $this->getRequest()->getVar('name');

        $team = Team::get()->filter('Name:PartialMatch', $name)->first();
        
        return $this->renderWith(['Team', 'Page'], [
            'Name' => $name,
            'Team' => $team,
        ]);
    }
}