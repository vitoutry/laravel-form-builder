<?php

use Vitoutry\LaravelFormBuilder\Fields\StaticType;
use Vitoutry\LaravelFormBuilder\Form;

class StaticTypeTest extends FormBuilderTestCase
{

    /** @test */
    public function it_creates_static_field()
    {
        $options = [
            'attr' => ['class' => 'static-class', 'id' => 'some_static']
        ];

        $this->plainForm->setModel(['some_static' => 'static text']);

        $static = new StaticType('some_static', 'static', $this->plainForm, $options);

        $static->render();

        $this->assertEquals('static text', $static->getOption('value'));
    }
}
