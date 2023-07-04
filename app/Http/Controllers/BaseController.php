<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(ArticleService $service){
        $this->service = $service;
    }
}
