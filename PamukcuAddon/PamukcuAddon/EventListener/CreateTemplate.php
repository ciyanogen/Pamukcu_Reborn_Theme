<?php

namespace PamukcuAddon\EventListener;

class CreateTemplate
{
    public static function preRender(\XF\Template\Templater $templater, &$type, &$template, &$name, array &$arguments, array &$globalVars)
    {
        if ($arguments['group']->group_id == 'Pamukcu_Addon')
        {
            $template = 'Pamukcu_Addon_option_menu';
        }
    }
}