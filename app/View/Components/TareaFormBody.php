<?php

namespace App\View\Components;

use App\Models\Tarea;
use Illuminate\View\Component;

class TareaFormBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     * @param \App\Models\Tarea $tarea
     * @return void
     */
    public function __construct($tarea=null)
    {
        if
        $this->tarea=$tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return <x-tarea-form-body/>Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params=[
            'tarea'=>$this->tarea,
            'urgencias'=>Tarea::urgencias,
        ];
        return view('components.tarea-form-body',$params);
    }

    https://www.youtube.com/watch?v=TJIuLWKqn5M

}
