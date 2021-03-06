<?php

namespace Drupal\capitalcamp_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides Intro Block.
 *
 * @Block(
 *   id = "dgc_intro",
 *   admin_label = @Translation("DGC Intro")
 * )
 */
class DgcIntro extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];

    $build['content'] = '';

    $build['dek'] = "<h2>July 31 - August 2</h2><h3>National Institutes of Health Campus<br/>Natcher Conference Center • Bethesda, MD</h3><p>Mark your calendars for the leading Drupal-oriented event of the greater Washington, DC area. Featuring prominent figures from around the world, Drupal GovCon is sure to keep you on the cutting edge of the current state of Drupal, and how to leverage your skills to better serve your community.</p>";

    $build['info'] = "<h3>Stay in the Loop</h3><p>Interested in being kept informed on GovCon? Sign up for <a href='mailto:drupal4gov@gmail.com?subject=Contact from Website' title='Contact us'>e-mail</a> updates, and follow us on <a href='https://twitter.com/drupalgovcon'>Twitter</a>. Registration and speaker submissions to be coming soon.</p>";

    return $build;
  }

}
