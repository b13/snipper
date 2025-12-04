<?php

declare(strict_types=1);

namespace B13\Snipper\EventListener;

use TYPO3\CMS\Core\Attribute\AsEventListener;
use TYPO3\CMS\Frontend\Event\AfterLinkIsGeneratedEvent;

#[AsEventListener]
final class TypoLinkEventListener
{
    public function __invoke(AfterLinkIsGeneratedEvent  $event): void
    {
        $attributes = $event->getLinkResult()->getAttributes();
        if (
            isset($attributes['target'])
            && $attributes['target'] === '_blank'
        ) {
            $rel = 'noopener';
            if (isset($attributes['rel'])) {
                $rel = $attributes['rel'] . ' ' . $rel;
            }
            $linkResult = $event->getLinkResult()->withAttribute(
                'rel',
                $rel,
            );
            $event->setLinkResult($linkResult);
        }
    }
}
