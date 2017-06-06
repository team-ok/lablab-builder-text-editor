<?php

/**
 * Field definitions for the lablab builder text editor module.
 *
 * @link       https://github.com/team-ok
 * @since      1.0.0
 * @author     Timo Klemm
 */

if( ! defined( 'ABSPATH' ) ) exit;

return array (
    array (
        'key' => 'field_584ad33a1aac9',
        'label' => __('Text Editor', 'lablab-text'),
        'name' => 'lablab-rich-text-content',
        'type' => 'wysiwyg',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
    ),
);