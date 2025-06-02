<?php

namespace Lycoreco\Includes\Model;

class ValidationError extends \Exception
{
    public $errors;

    public function __construct($errors)
    {
        $this->errors = $errors;
        $this->message = 'One or more fields did not pass the validation check: ' . join(" | ", $errors);
    }
    public function display_error()
    {
?>
        <div class="form-error">
            <p>The fields have incorrect values:</p>
            <ul>
                <?php foreach ($this->errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
<?php
    }
}
