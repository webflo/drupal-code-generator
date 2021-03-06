<?php

namespace Drupal\Tests\foo\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test description.
 *
 * @group foo
 */
class ExampleTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['node'];

  /**
   * Test callback.
   */
  public function testContentPage() {
    $admin_user = $this->drupalCreateUser(['access content overview']);
    $this->drupalLogin($admin_user);
    $this->drupalGet('admin/content');
    $this->assertSession()->elementExists('xpath', '//h1[text() = "Content"]');
  }

}
