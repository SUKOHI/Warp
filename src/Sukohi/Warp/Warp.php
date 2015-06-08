<?php namespace Sukohi\Warp;

class Warp {

    private $_prefix = 'WARP_URLs';

    public function set($key, $current_url) {

        if(empty($current_url)) {

            $current_url = \Request::url();

        }

        $session_key = $this->session_key($key);
        \Session::put($session_key, $current_url);

    }

    public function get($key, $alternative_url) {

        $session_key = $this->session_key($key);
        
        if(\Session::has($session_key)) {

            $url = \Session::get($session_key);
            \Session::forget($session_key);

        } else {

            $url = $alternative_url;

        }

        return $url;

    }

    private function session_key($key) {

        return $this->_prefix .'.'. $key;

    }

}