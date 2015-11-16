<?php

/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
class content_controller extends b2c_frontpage {

    function __construct($app) {
        parent::__construct($app);
        $this->_response->set_header('Cache-Control', 'no-store');
        $this->verify_member();
    }

}
