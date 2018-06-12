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

use Flextype\Component\{Event\Event, Registry\Registry};

// Event: onCurrentPageBeforeDisplayed
Event::addListener('onCurrentPageBeforeDisplayed', function () {
    $page = Content::getCurrentPage();

    if (isset($page['theme'])) {
        Registry::set('site.theme', $page['theme']);
    }
});
