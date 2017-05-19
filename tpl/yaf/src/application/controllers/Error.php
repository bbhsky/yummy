<?php
/**
 * @name ErrorController
 * @desc 错误控制器, 在发生未捕获的异常时刻被调用
 * @see http://www.php.net/manual/en/yaf-dispatcher.catchexception.php
 */
class ErrorController extends Yaf_Controller_Abstract {
    public function errorAction($exception) {
        $this->getView()->assign("exception", $exception);
        $this->getView()->assign("file", $exception->getFile());
        $this->getView()->assign("line", $exception->getLine());
        $this->getView()->assign("code", $exception->getCode());
        $this->getView()->assign("message", $exception->getMessage());
    }
}
