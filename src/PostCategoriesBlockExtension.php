<?php namespace Anomaly\PostCategoriesBlockExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class PostCategoriesBlockExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PostCategoriesBlockExtension
 */
class PostCategoriesBlockExtension extends Extension
{

    /**
     * This extension provides the demo
     * block for the Blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.post_categories';

}
