<?php

/*
 * OpencastMarkupPlugin - A Stud.IP Plugin which adds a markup to embed an opencast player
 * Copyright (c) 2012  André Klaßen
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details
 */
 
class OpencastMarkupPlugin extends StudipPlugin implements SystemPlugin
{

    function __construct()
    {
        parent::__construct();

        StudipFormat::addStudipMarkup('opencast', '\[opencast\]', '\[\/opencast\]', 'OpencastMarkupPlugin::markupOpencast');
    }

    static function markupOpencast  ($markup, $matches, $contents)
    {
        return sprintf('<iframe src="http://video2.virtuos.uni-osnabrueck.de:8080/engage/ui/embed.html?id=%s" style="border:0px #FFFFFF none;" name="Opencast Matterhorn - Media Player" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" width="540" height="404"></iframe><br>', $contents);
    }
}
