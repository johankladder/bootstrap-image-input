<?php

namespace JohanKladder\BootstrapImageInput;

class BootstrapImageInput
{

    /**
     * The obligated options for this entity.
     *
     * @var array
     */
    static $OBLIGATED_OPTIONS = [
        'data',
        'image-key',
        'label',
        'delete-label',
        'delete-url',
        'delete-params'
    ];

    /**
     * Storage for the options.
     *
     * @var array
     */
    private $options;


    /**
     * Creates an Entity instance and render it's view.
     *
     * @param array $options
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function create(array $options = [])
    {
        $input = new BootstrapImageInput($options);
        return $input->render();
    }

    public function __construct(array $options)
    {
        $this->checkOptions($options);
        $this->options = $options;
    }

    private function checkOptions(array $options)
    {
        foreach (self::$OBLIGATED_OPTIONS as $obligatedOption) {
            if (!array_has($options, $obligatedOption)) {
                throw new \Exception(
                    'The option: [' . $obligatedOption . '] is obligated!'
                );
            }
        }
    }

    private function render()
    {
        return view('bootstrap-image-input::image-input', [
            'options' => $this->options
        ]);
    }

}