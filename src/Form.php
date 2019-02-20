<?php
/**
 * FormBuilder表单生成器
 * Author: xaboy
 * Github: https://github.com/xaboy/form-builder
 */

namespace LaravelFormBuilder;
class Form extends \FormBuilder\Form
{
    /**
     * Form constructor.
     *
     * @param string $action
     * @param array  $components
     * @param bool   $token
     */
    public function __construct($action = '', array $components = [], $token = true)
    {
        parent::__construct($action, $components);
        if ($token)
            $this->append(\FormBuilder\Form::hidden('_token', csrf_token()));

        $this->init();
    }

    protected function init()
    {
        $this->script = [
            'jq' => '<script src="' . asset('vendor/form-create/jquery.js') . '"></script>',
            'vue' => '<script src="' . asset('vendor/form-create/vue/vue.min.js') . '"></script>',
            'iview-css' => '<link href="' . asset('vendor/form-create/iview/styles/iview.css') . '" rel="stylesheet">',
            'iview' => '<script src="' . asset('vendor/form-create/iview/iview.min.js') . '"></script>',
            'form-create' => '<script src="' . asset('vendor/form-create/form-create.min.js') . '"></script>',
            'city-data' => '<script src="' . asset('vendor/form-create/province_city.js') . '"></script>',
            'city-area-data' => '<script src="' . asset('vendor/form-create/province_city_area.js') . '"></script>',
        ];
    }

    /**
     * @param string $action
     * @param array  $components
     * @param bool   $token
     * @return \FormBuilder\Form|mixed
     */
    public static function create($action, array $components = [], $token = true)
    {
        return new self($action, $components, $token);
    }
}