<?php

namespace Vitoutry\LaravelFormBuilder\Events;

use Vitoutry\LaravelFormBuilder\Fields\FormField;
use Vitoutry\LaravelFormBuilder\Form;
use Vitoutry\LaravelFormBuilder\Rules;

class AfterCollectingFieldRules
{
    /**
     * The field instance.
     *
     * @var FormField
     */
    protected $field;

    /**
     * The field's rules.
     *
     * @var Rules
     */
    protected $rules;

    /**
     * Create a new after field creation instance.
     *
     * @param Form $form
     * @param FormField $field
     * @return void
     */
    public function __construct(FormField $field, Rules $rules) {
        $this->field = $field;
        $this->rules = $rules;
    }

    /**
     * Return the event's field.
     *
     * @return FormField
     */
    public function getField() {
        return $this->field;
    }

    /**
     * Return the event's field's rules.
     *
     * @return Rules
     */
    public function getRules() {
        return $this->rules;
    }
}
