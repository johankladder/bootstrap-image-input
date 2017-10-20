<?php
/**
 * Created by PhpStorm.
 * User: johankladder
 * Date: 20-10-17
 * Time: 12:41
 */

namespace JohanKladder\BootstrapImageInput;

class BootstrapImageInput
{

    static $OBLIGATED_OPTIONS = [
        'data',
        'image-key',
        'label',
        'delete-label'
    ];

    private $options;


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

    public function render()
    {
        return view('bootstrap-image-input::image-input', [
            'options' => $this->options
        ]);
    }

}