<?php

namespace App\Extensions\Startup\Controllers\Site;


use Illuminate\Http\Request;
use App\Extensions\Startup\Controllers\SiteController;


use Log;
use Validator;
use Response;

class ExampleController extends SiteController
{
    
    function __construct()
    {
        parent::__construct();
        
    }
    
    public function test(Request $request)
    {
        $this->title('演示页面');


        $this->setData('test_data','页面测试');

        return $this->display('example.test');
        
    }
    
    
    
}
