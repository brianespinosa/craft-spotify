<?php
namespace Craft;

/**
 * @link      https://github.com/brianespinosa/craft-spotify
 * @copyright Copyright (c) 2016, Brian Espinosa
 * @license   https://github.com/brianespinosa/craft-spotify
 */



class SpotifyPlugin extends BasePlugin
{
    /**
     * Get OAuth Providers
     */
    public function getOAuthProviders()
    {
        require_once(CRAFT_PLUGINS_PATH.'spotify/providers/oauth/Spotify.php');

        return [
            'Dukt\OAuth\Providers\Spotify'
        ];
    }

    /**
     * Get Name
     */
    function getName()
    {
        return Craft::t('Spotify');
    }

    /**
     * Get Version
     */
    function getVersion()
    {
        return '1.0.0';
    }

    /**
     * Get Developer
     */
    function getDeveloper()
    {
        return 'Brian Espinosa';
    }

    /**
     * Get Developer URL
     */
    function getDeveloperUrl()
    {
        return 'https://bje.co/';
    }
}
