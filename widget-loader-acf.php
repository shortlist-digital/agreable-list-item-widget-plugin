<?php

$widgetplacement = self::$config['tab_placement'];

$choices = self::$config['image_choices'];
$choices['original'] = 'Original';

$widget_config = array (
  'key' => 'widget_list_item',
  'name' => 'list-item',
  'label' => 'List Item',
  'display' => 'row',
  'sub_fields' => array (
    array (
      'key' => 'list_item_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => 'widget_listitem_heading',
      'label' => 'Heading',
      'name' => 'heading',
      'type' => 'text',
    ),
    array (
      'key' => 'widget_listitem_image',
      'label' => 'Image',
      'name' => 'image',
      'type' => 'image',
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
      'library' => 'all',
    ),
    array (
      'key' => 'widget_listitem_copy',
      'label' => 'Description',
      'name' => 'copy',
      'type' => 'strict_wysiwyg',
    ),
    array (
      'key' => 'list_item_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => 'widget_listitem_crop',
      'label' => 'Select an image crop (image shape)',
      'name' => 'crop',
      'type' => 'select',
      'instructions' => 'This will force this item to have a certain crop. Don&rsquo;t forget to manually adjust the crop for each image.',
      'required' => 1,
      'choices' => $choices,
      'default_value' => 'square',
    )
  )
);

$widget_config["content-types"] = array('post');
$widget_config["content-sizes"] = array('main');
