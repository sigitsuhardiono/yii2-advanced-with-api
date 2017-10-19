<?php
namespace api\controllers;

use api\base\ApiController;

/**
 * Site controller
 */
class SiteController extends ApiController
{
    public function actionIndex()
    {
        return [
            'message' => 'API is running.'
        ];
    }
}
