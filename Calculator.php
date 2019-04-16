<?php

/*
  PHPUnitTestProjekt [kurzen Beschreibung]
  Copyright (C) 15.04.2019 Anwender

  This program is free software; you can redistribute it and/or modify it under the terms of the
  GNU General Public License as published by the Free Software Foundation; either version 3 of the License,
  or (at your option) any later version.
  This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
  implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
  You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Description of Calculator
 * @author T.Smit
 * @version  1.879
 * @copyright (c) 2019, T.Smit
 */

class Calculator {
    
    /**
     * @assert (1, 3) == 4
     * @deprecated since version 4.7
     */
    public function add($a,$b){
        return $a+$b;
    }
    
    /**
     * @assert (1, 3) == -2
     * @version 1.3.45
     */
    public function sub($a,$b){
        return $a-$b;
    }
    
    /**
     * @assert (5, 2) == 2.5
     * @assert (3.5, 2) == 1.75
     */
    public function ratio($a,$b){
        return $a/$b;
    }
    
    /**
     * @assert (5, 2) == 10
     * @assert (3.5, 2) == 7
     * @copyright (c) 2019, John Doe
     */
    public function pow($a,$b){
        return $a*$b;
    }
    
}
