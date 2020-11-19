<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            $validate = $this->validate($rules);
            if ($validate) {
                return view('auth/index');
            } else {
                return redirect()->back()->withInput()->with('validation', $this->validator);
            }
        }
        return view('auth/login');
    }
    public function index()
    {
        return view('auth/index');
    }
    public function about()
    {
        return view('auth/about');
    }
    public function admin()
    {
        return view('auth/admin');
    }
    public function register()
    {
        if ($this->request->getMethod() == 'post') {

            $rules = [
                'first_name' => [
                    'label' => 'First Name',
                    'rules' => 'required'
                ],
                'last_name' => [
                    'label' => 'Last Name',
                    'rules' => 'required'
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email'
                ],
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required'
                ],
                'password' => [
                    'label' => 'Password Min 6 Length',
                    'rules' => 'required|min_length[6]'
                ],
                'cpassword' => [
                    'label' => 'Password Confirmation',
                    'rules' => 'required|matches[password]'
                ],
            ];

            $validate = $this->validate($rules);
            if ($validate) {
                return view('auth/index');
            } else {
                return redirect('auth/register')->back()->withInput()->with('validation', $this->validator);
            }
        }

        return view('auth/register');
    }

    //--------------------------------------------------------------------

}
