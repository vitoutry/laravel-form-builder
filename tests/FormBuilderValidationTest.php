<?php

namespace {

    use Vitoutry\LaravelFormBuilder\Events\AfterFieldCreation;
    use Vitoutry\LaravelFormBuilder\Events\AfterFormCreation;
    use Vitoutry\LaravelFormBuilder\Form;
    use Vitoutry\LaravelFormBuilder\FormBuilder;
    use Vitoutry\LaravelFormBuilder\FormHelper;

    class FormBuilderValidationTest extends FormBuilderTestCase
    {
        public function setUp(): void
        {
            parent::setUp();
            $this->app
                ->make('Illuminate\Contracts\Http\Kernel')
                ->pushMiddleware('Illuminate\Session\Middleware\StartSession');
        }

        public function testItValidatesWhenResolved()
        {
            Route::post('/test', TestController::class.'@validate');

            $this->post('/test', ['email' => 'foo@bar.com'])
                ->assertRedirect('/')
                ->assertSessionHasErrors(['name']);
        }

        public function testItDoesNotValidateGetRequests()
        {
            Route::get('/test', TestController::class.'@validate');

            $this->get('/test', ['email' => 'foo@bar.com'])
                ->assertStatus(200);
        }
    }
}
