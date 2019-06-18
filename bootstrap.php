<?php

/**
 *
 * Flextype Page Theme Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

$flextype->emitter->addListener('onSiteEntryAfterInitialized', function() use ($flextype) {

    $entry = $flextype->SiteController->entry;

    if (isset($entry['theme'])) {
        $flextype->registry->set('settings.theme', $entry['theme']);
    }
});
