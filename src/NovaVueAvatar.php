<?php

namespace Marispro\NovaVueAvatar;

use Laravel\Nova\Element;
use Laravel\Nova\Fields\Field;

class NovaVueAvatar extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-vue-avatar';

    /**
     * NovaVueAvatar constructor.
     *
     * @param $name
     * @param null $attribute
     * @param callable|null $resolveCallback
     */
    public function __construct($attribute = 'name', $name = 'Avatar', callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->exceptOnForms();

        return $this->withMeta([
            'rounded' => true,
            'image' => '',
            'size' => 40
        ]);
    }

    /**
     * Specify that the avatar should be rounded
     *
     * @param  bool $value
     * @return Element
     */
    public function rounded($value = true): Element
    {
        return $this->withMeta([
            'rounded' => $value
        ]);
    }

    /**
     * Specify the avatar size
     *
     * @param  int $value
     * @return Element
     */
    public function size($value = true): Element
    {
        return $this->withMeta([
            'size' => $value
        ]);
    }
    
    /**
     * Specify the avatar image
     *
     * @param  string $value
     * @return Element
     */
    public function image($value = ''): Element
    {
        return $this->withMeta([
            'value' => '',
            'image' => $value
        ]);
    }

    /**
     * Resolve the given attribute from the given resource.
     *
     * @param mixed $resource
     * @param string $attribute
     * @return mixed
     */
    protected function resolveAttribute($resource, $attribute)
    {
        if (method_exists($resource, 'getTranslations')) {
            return $resource->getTranslations($attribute);
        }
        return data_get($resource, $attribute);
    }
}
