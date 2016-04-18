<?php namespace Sukohi\Warp;

class Warp {

    private $_prefix = 'WARP_URLs';

    public function set($key = '', $current_url = '') {

        if(empty($key)) {

			$key = \Request::route()->getName();

        }

        if(empty($current_url)) {

            $current_url = \Request::fullUrl();

        }

        $session_key = $this->session_key($key);
        \Session::put($session_key, $current_url);

    }

    public function get($key, $alternative_url, $forget_flag = true) {

        $session_key = $this->session_key($key);
        
        if(\Session::has($session_key)) {

            $url = \Session::get($session_key);

            if($forget_flag) {

                \Session::forget($session_key);

            }

        } else {

            $url = $alternative_url;

        }

        return $url;

    }

	public function route($route, $forget_flag = true) {

		return $this->get($route, route($route), $forget_flag);

	}

    private function session_key($key) {

        return $this->_prefix .'.'. $key;

    }

}