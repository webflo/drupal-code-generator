<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8\Plugin;

use DrupalCodeGenerator\Tests\Generator\GeneratorBaseTest;

/**
 * Test for d8:plugin:entity-reference-selection command.
 */
class EntityReferenceSelectionTest extends GeneratorBaseTest {

  protected $class = 'Drupal_8\Plugin\EntityReferenceSelection';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Example',
    'Module machine name [example]:' => 'example',
    'Entity type that can be referenced by this plugin [node]:' => 'node',
    'Plugin label [Advanced node selection]:' => 'Advanced node selection',
    'Plugin ID [example_advanced_node_selection]:' => 'example_advanced_node_selection',
    'Provide additional plugin configuration? [No]:' => 'Yes',
    'Class [ExampleNodeSelection]:' => 'ExampleNodeSelection',
  ];

  protected $fixtures = [
    'config/schema/example.schema.yml' => __DIR__ . '/_entity_reference_selection_schema.yml',
    'src/Plugin/EntityReferenceSelection/ExampleNodeSelection.php' => __DIR__ . '/_entity_reference_selection.php',
  ];

}
