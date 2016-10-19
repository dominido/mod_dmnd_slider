<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

$db	= JFactory::getDBO();

$db->setQuery("select *, (select alias from #__dmnd_city where id = id_city) as city_alias, (select title from #__dmnd_city where id = id_city) as city from #__dmnd_hotel where spo = 1 order by rand()");
$slides = $db->loadObjectList();

require JModuleHelper::getLayoutPath('mod_dmnd_slider', $params->get('layout', 'default'));

?>