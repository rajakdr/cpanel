<?php
namespace Aurora\Modules\Cpanel;
class Module extends \Aurora\System\Module\AbstractModule
{
	protected $sService = 'Cpanel';
    public function init()
    {
    	echo "Cpanel Module";
    }
}
?>