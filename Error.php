<?php

namespace Tvswe\Error;

trait Error
{
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
     * Adds an error by an exception
     * @param \Exception
     */
    protected function addErrorByException(\Exception $e)
    {
        $this->addError($e->getMessage(), $e->getCode());
    }

    /**
     * Adds errors
     * @param string[] $errors
     */
    protected function addErrors(array $errors)
    {
        foreach($errors as $key => $error) {
            $this->addError($error, $key);
        }
    }
    
    /**
     * Returns if there are errors or not
     * @return boolean
     */
    protected function hasErrors()
    {
        return (bool) $this->errors;
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
