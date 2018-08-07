<?php
/**
 * FormBuilder表单生成器
 * Author: xaboy
 * Github: https://github.com/xaboy/form-builder
 */

namespace LaravelFormBuilder;


class Json extends \FormBuilder\Json
{
    /**
     * @param $code
     * @param string $msg
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected static function result($code, $msg = 'ok', $data = [])
    {
        return response()->json(compact('code', 'msg', 'data'));
    }
}