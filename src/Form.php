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
     * @param string $action
     * @param array $components
     */
    public function __construct($action = '', array $components = [])
    {
        parent::__construct($action, $components);
        $this->append(\FormBuilder\Form::hidden('_token',csrf_token()));
    }
}