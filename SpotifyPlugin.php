<?php
namespace Craft;

/**
 * @link      https://github.com/brianespinosa/craft-spotify
 * @copyright Copyright (c) 2016, Brian Espinosa
 * @license   https://github.com/brianespinosa/craft-spotify/blob/release/master/LICENSE.md
 */



class SpotifyPlugin extends BasePlugin
{
  /**
   * Get OAuth Providers
   */
  public function getOAuthProviders()
  {
    require_once(CRAFT_PLUGINS_PATH.'spotify/providers/Spotify.php');

    return [
      'Dukt\OAuth\Providers\Spotify'
    ];
  }

  /**
   * Get Name
   */
  public function getName()
  {
    return Craft::t('Spotify');
  }

  /**
   * Plugins description.
   *
   * @return mixed
   */
  public function getDescription()
  {
    return Craft::t('Spotify provider for OAuth');
  }

  /**
   * Get Version
   */
  public function getVersion()
  {
    return '1.0.0';
  }

  /**
   * Get Developer
   */
  public function getDeveloper()
  {
    return 'Brian Espinosa';
  }

  /**
   * Get Developer URL
   */
  public function getDeveloperUrl()
  {
    return 'https://github.com/brianespinosa/craft-spotify';
  }

  /**
   * Returns required plugins
   *
   * @return array Required plugins
   */
  public function getRequiredPlugins()
  {
    return array(
      array(
        'name' => "OAuth",
        'handle' => 'oauth',
        'url' => 'https://dukt.net/craft/oauth',
        'version' => '2.0.0'
      )
    );
  }
}
