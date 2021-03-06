<?php

namespace Dynamic\FlexSlider\Test;

use Dynamic\FlexSlider\ORM\FlexSlider;
use SilverStripe\Dev\TestOnly;

/**
 * Class TestPage
 * @package Dynamic\FlexSlider\Tests
 */
class TestPage extends \Page implements TestOnly
{
    private static $slide_tab_title = '';

    private static $extensions = array(
        FlexSlider::class,
    );

    private static $table_name = 'FlexsliderTestPage';
}
