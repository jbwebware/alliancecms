<?php
namespace VenueManager;

use Acms\Core\Components\AbstractModule;
use Acms\Core\Templates\Template;
use Acms\Core\Data\Db;
use Acms\Core\Data\Validate;
use Acms\Core\Data\Filter;

class Venues extends AbstractModule
{
    public function venueCreateStart()
    {
        //*
        echo '<br />I am here: ' . __FILE__ . ': ' . __LINE__ . '<br />';
        //exit;
        //*/

        $content = new Template(dirname(__FILE__) . DS . 'views/venue_create_start.tpl.php');
        
        $validate = new Validate();
        $filter = new Filter();

        $filteredVenueName = ucwords($this->axisRoute->values['venue_name']);
        $filteredVenueName = $filter->filterVenueName($filteredVenueName);
        
        if ($validate->isValidVenueName($filteredVenueName)) {
        	echo "It's a valid venue name";
        	$content->set('requestedVenueName', $filteredVenueName);
        } else {
        	echo "It's not a valid venue name";
        	$content->set('requestedVenueName', '');
        }
        
        $content->set('venueLabel', $this->getVenueLabel());
        $content->set('formHelper', $this->formHelper);

        return $content;
    }

    public function venueCreateSelectType()
    {
        //*
        echo '<br />I am here: ' . __FILE__ . ': ' . __LINE__ . '<br />';
        //exit;
        //*/

        //*
        echo '<br /><pre>$this->axisRoute: ';
        echo print_r($this->axisRoute);
        echo '</pre><br />';
        //exit;
        //*/

        $content = new Template(dirname(__FILE__) . DS . 'views/venue_create_select_type.tpl.php');

        /*
        $content->set('zoneAllModules', $zoneAllModules);
        $content->set('zoneSpecificModules', $zoneSpecificModules);
        $content->set('axisModules', $axisModules);
        $content->set('formHelper', $this->formHelper);
        //*/

        return $content;

    }

    public function venueCreate()
    {

        //*
        echo '<br />I am here: ' . __FILE__ . ': ' . __LINE__ . '<br />';
        //exit;
        //*/

        //*
        echo '<br /><pre>$this->axisRoute: ';
        echo print_r($this->axisRoute);
        echo '</pre><br />';
        //exit;
        //*/

        $content = new Template(dirname(__FILE__) . DS . 'views/venue_create.tpl.php');

        /*
        $content->set('zoneAllModules', $zoneAllModules);
        $content->set('zoneSpecificModules', $zoneSpecificModules);
        $content->set('axisModules', $axisModules);
        $content->set('formHelper', $this->formHelper);
        //*/

        return $content;
    }

    public function getVenueTypes()
    {

        // Get Venue Types

        $sql->dbSelect('venue_types',
            'name, label, description',
            'active = :active',
            ['active' => intval(2)]);

        $fields = $sql->dbFetch();

        return $fields;
    }

    public function getVenueLabel()
    {

        // Get Venue Types

        $sql = new Db();

        $sql->dbSelect('labels',
            'name, label',
            'name = :name AND active = :active',
            [
                'name' => 'Venue',
                'active' => intval(2)
            ]
        );

        $fields = $sql->dbFetch('one');

        return $fields['label'];
    }
}