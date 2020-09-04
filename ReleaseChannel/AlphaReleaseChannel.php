<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\MatomoCustomRelease\ReleaseChannel;

use Piwik\Plugins\CoreUpdater\ReleaseChannel;

class AlphaReleaseChannel extends ReleaseChannel
{
    public function getId()
    {
        return 'latest_alpha';
    }

    public function getName()
    {
        return 'Matomo Latest Major Alpha';
    }

    public function getUrlToCheckForLatestAvailableVersion()
    {
        return 'https://builds.matomo.org/latest_matomo_alpha';
    }

    public function getDownloadUrlWithoutScheme($version)
    {
        return '://builds.matomo.org/4.0.0-alpha.zip';
    }

    public function getOrder()
    {
        return 10;
    }
}