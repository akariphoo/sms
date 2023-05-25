<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $label;
    public $id;
    public $class;
    public $name;
    public $placeholder;
    public $value;
    public $required;
    public $readOnly;
    public $disabled;
    public $rows;
  
    public function __construct($attrs = array())
    {
        $this->label = $attrs['label']?? '';
        $this->id = $attrs['id']?? '';
        $this->class = $attrs['class']?? '';
        $this->name = $attrs['name']?? '';
        $this->value = $attrs['value']?? '';
        $this->placeholder = !empty($attrs['placeholder'])?$attrs['placeholder'] : '';
        $this->required = !empty($attrs['required'])?$attrs['required'] : '';
        $this->readOnly = isset($attrs['readOnly']);
        $this->disabled = isset($attrs['disabled']);
        $this->rows = $attrs['rows']?? '';
    }

    public function render()
    {
        return view('components.forms.textarea');
    }
}