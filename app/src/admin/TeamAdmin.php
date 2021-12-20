<?php
namespace Basil\Model;

use SilverStripe\Admin\ModelAdmin;
use Basil\Player;
use Basil\Team;
use Basil\Colour;

class TeamAdmin extends ModelAdmin 
{

    private static $managed_models = [
        Team::class,
        Player::class,
        Colour::class,
    ];

    private static $url_segment = 'team';

    private static $menu_title = 'Teams';
}