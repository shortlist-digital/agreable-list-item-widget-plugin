<?php
namespace Agreable\Widgets\ListItem\Generators\AppleNews;

use \Timber;

class Generator {
  public function get(array $widget) {
    $heading = strip_tags($widget['heading']);
    $heading = html_entity_decode($heading);

    $image = $widget['image']['url'];

    $copy = strip_tags($widget['copy']);
    $copy = html_entity_decode($copy);

    $json_as_string = Timber::compile(
      './template.json.twig',
      array(
        'heading' => $heading,
        'image' => $image,
        'caption' => $heading,
        'copy' => $copy
      )
    );

    $json_as_object = json_decode($json_as_string);

    return $json_as_object;
  }
}

