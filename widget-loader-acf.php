<?php

$key = 'widget_list_item';

$widgetplacement = self::$config['tab_placement'];

$choices = self::$config['image_choices'];
$choices['original'] = 'No crop';

$widget_config = array (
  'key' => $key,
  'name' => 'list-item',
  'label' => 'List Item',
  'display' => 'row',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => 'widget_listitem_heading', // needs a migration for consistentcy
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
	  'key' => 'widget_listitem_crop',
	  'label' => 'Select an image crop (image shape)',
	  'name' => 'crop',
	  'type' => 'select',
	  'instructions' => 'This will force this item to have a certain crop. Don&rsquo;t forget to manually adjust the crop for each image.',
	  'required' => 1,
	  'choices' => $choices,
	  'default_value' => 'square',
	),
    array (
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    )
  )
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main');
