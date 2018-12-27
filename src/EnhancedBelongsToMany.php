<?php

namespace Adigitalco\EnhancedBelongsToMany;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class EnhancedBelongsToMany extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'enhanced-belongs-to-many';
}
