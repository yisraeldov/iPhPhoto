<?php 
// app/controllers/users_controller.php
class UsersController extends AppController {
    public $components = array('Openid','Auth');
    public $uses = array();

    public function login() {
        // /*
        //             TODO make the return url more generic
        //         */
        //         $returnTo = 'http://'.$_SERVER['SERVER_NAME'].'/~yisraeldov/index.php/cake/users/login';
        // 
        //         if (!empty($this->data)) {
        //             try {
        //                 $this->Openid->authenticate($this->data['OpenidUrl']['openid'], $returnTo, 'http://'.$_SERVER['SERVER_NAME']);
        //             } catch (InvalidArgumentException $e) {
        //                 $this->setMessage('Invalid OpenID');
        //             } catch (Exception $e) {
        //                 $this->setMessage($e->getMessage());
        //             }
        //         } elseif ($this->Openid->isOpenIDResponse()) {
        //             $response = $this->Openid->getResponse($returnTo);
        // 
        //             if ($response->status == Auth_OpenID_CANCEL) {
        //                 $this->setMessage('Verification cancelled');
        //             } elseif ($response->status == Auth_OpenID_FAILURE) {
        //                 $this->setMessage('OpenID verification failed: '.$response->message);
        //             } elseif ($response->status == Auth_OpenID_SUCCESS) {
        //                 echo 'successfully authenticated!';
        //                 exit;
        //             }
        //         }
    }

    private function setMessage($message) {
        $this->set('message', $message);
    }
    function logout() {        $this->redirect($this->Auth->logout());    }
}