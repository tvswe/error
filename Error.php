<?php

namespace Tvswe\Error;

trait Error {
    /**
     * Errors
     * @var string[]
     */
    private $errors = [];
    
    /**
     * Adds an error
     * @param string $error
     * @param integer|string $key
     */
    protected function addError($error, $key = null)
    {
        if($key) {
            $this->errors[$key] = $error;
        } else {
            $this->errors[] = $error;
        }
    }

    /**
     * Adds errors
     * @param string[] $errors
     */
    protected function addErrors(array $errors)
    {
        $this->errors += $errors;
    }
    
    /**
     * Returns if there are errors or not
     * @return boolean
     */
    protected function hasErrors()
    {
        return (bool) count($this->errors);
    }
    
    /**
     * Returns the errors
     * @return string[]
     */
    protected function getErrors()
    {
        return $this->errors;
    }
}
