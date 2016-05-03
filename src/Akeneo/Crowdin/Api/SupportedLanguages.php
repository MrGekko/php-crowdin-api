<?php

namespace Akeneo\Crowdin\Api;

/**
 * Get supported languages list
 *
 * @author Nicolas Dupont <nicolas@akeneo.com>
 * @see http://crowdin.net/page/api/supported-languages
 */
class SupportedLanguages extends AbstractApi
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $http     = $this->client->getHttpClient();
        $response = $http->get('supported-languages');

        return $response->getBody();
    }
}