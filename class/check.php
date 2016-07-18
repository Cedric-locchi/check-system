<?php

namespace check;

/**
 * Class check
 * @package check
 */
class check
{
    private static $errors = [];
    private static $success = [];

    /**
     * summary : check if $key is empty
     *
     * @param $key
     * @param null $error
     * @param null $success
     */
    public static function checkIsEmpty($key, $error = null, $success = null)
    {
        if ($key == '' || $key == null) {
            self::setError($error);
        } else {
            self::setSuccess($success);
        }
    }

    /**
     * summary : check if $key is number
     *
     * @param $key
     * @param null $error
     * @param null $success
     */
    public static function checkIsNumber($key, $error = null, $success = null)
    {
        if (!is_numeric($key)) {
            self::setError($error);
        } else {
            self::setSuccess($success);
        }
    }

    /**
     * summary : check if $mail is email
     *
     * @param $mail
     * @param null $error
     * @param null $success
     */
    public static function checkIsEmail($mail, $error = null, $success = null)
    {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL) || empty($data)) {
            self::setError($error);
        } else {
            self::setSuccess($success);
        }
    }

    /**
     * summary : check if $array has a $key inside
     *
     * @param $key
     * @param $array
     * @param null $error
     * @param null $success
     */
    public static function checkIsInArray($key, $array, $error = null, $success = null)
    {
        if (!array_key_exists($key, $array) && is_array($array)) {
            check::setError($error);
        } else {
            check::setSuccess($success);
        }
    }

    /**
     * summary : compare two data with their value
     *
     * @param $sup
     * @param $at
     * @param null $error
     * @param null $success
     */
    public static function checkIfSupAt($sup, $at, $error = null, $success = null)
    {
        if ($at > $sup) {
            self::setError($error);
        } else {
            self::setSuccess($success);
        }
    }

    /**
     * summary : get array with all check errors
     *
     * @return array
     */
    public static function getError()
    {
        return self::$errors;
    }

    /**
     * summary : set array with all errors message
     *
     * @param $error
     */
    public static function setError($error)
    {
        array_push(self::$errors, $error);
    }

    /**
     * summary : set error session array's with error array
     */
    public static function setErrorInSession()
    {
        $_SESSION['errors'] = self::getError();
    }
    /**
     * summary : get array with all check success message's
     *
     * @return array
     */
    public static function getSuccess()
    {
        return self::$success;
    }

    /**
     * summary : set array with all success message
     *
     * @param $success
     */
    public static function setSuccess($success)
    {
        array_push(self::$success, $success);
    }

    /**
     * summary : set success session's array with success array
     */
    public static function setSuccessInSession()
    {
        $_SESSION['success'] = self::getSuccess();
    }
}