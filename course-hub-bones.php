<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class CourseHubBones extends Theme
{
  public function onThemeInitialized() {
    // Check for Bootstrapper plugin status
    if ($this->grav['config']->get('plugins.bootstrapper.enabled')) {
      echo '<script language="javascript">';
      echo 'alert("Please disable the Bootstrapper plugin before using this theme.")';
      echo '</script>';
    }
  }
}
?>
