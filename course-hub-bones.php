<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class CourseHubBones extends Theme
{
  public function onThemeInitialized() {
    // Check for External_Links plugin status
    if ($this->grav['config']->get('plugins.external_links.built_in_css')) {
      echo '<div class="callout warning" style="margin-bottom: 0;">Please set the Use Built-in CSS option for the External Links plugin to No (i.e. False) before using this theme.</div>';
      return;
    }
    // Check for Bootstrapper plugin status
    if ($this->grav['config']->get('plugins.bootstrapper.enabled')) {
      echo '<div class="callout warning" style="margin-bottom: 0;">Please disable the Bootstrapper plugin before using this theme.</div>';
    }
  }
}
?>
