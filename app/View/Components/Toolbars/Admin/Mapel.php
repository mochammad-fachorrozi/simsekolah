<?php

namespace App\View\Components\Toolbars\Admin;

use App\Models\Departemen;
use Illuminate\View\Component;

class Mapel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $departemen = Departemen::orderBy('nama')
                ->get();

        return view('components.toolbars.admin.mapel', [
            'departemen' => $departemen
        ]);
    }
}
