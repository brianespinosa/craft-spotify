<?php
/**
 * @link      https://github.com/brianespinosa/craft-spotify
 * @copyright Copyright (c) 2016, Spotify
 * @license   https://github.com/brianespinosa/craft-spotify/blob/release/master/LICENSE.md
 */

namespace Dukt\OAuth\Providers;

use Craft\UrlHelper;

class Spotify extends BaseProvider
{
  // Public Methods
  // =========================================================================

  /**
   * Get Name
   *
   * @return string
   */
  public function getName()
  {
    return 'Spotify';
  }

  /**
   * Get Icon URL
   *
   * @return string
   */
  public function getIconUrl()
  {
    return UrlHelper::getResourceUrl('spotify/icon.svg');
  }

  /**
   * Get OAuth Version
   *
   * @return int
   */
  public function getOauthVersion()
  {
    return 2;
  }

  /**
   * Get API Manager URL
   *
   * @return string
   */
  public function getManagerUrl()
  {
    return 'https://developer.spotify.com/my-applications/';
  }

  /**
   * Get Scope Docs URL
   *
   * @return string
   */
  public function getScopeDocsUrl()
  {
    return 'https://developer.spotify.com/web-api/using-scopes/';
  }

  /**
   * Create Spotify Provider
   *
   * @return Spotify
   */
  public function createProvider()
  {
    $config = [
      'clientId' => $this->providerInfos->clientId,
      'clientSecret' => $this->providerInfos->clientSecret,
      'redirectUri' => $this->getRedirectUri(),
    ];

    return new \Audeio\Spotify\Oauth2\Client\Provider\Spotify($config);
  }
}
