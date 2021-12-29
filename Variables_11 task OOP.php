<?php

/* 11 užduotis

Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
Naudoti ciklų ir masyvų NEGALIMA.

min(), max() */


class Numbers {

public $first;
public $second;
public $third;
public $fourth;
public $fifth;
public $sixth;
public $max;



	public function __construct($first,$second,$third,$fourth,$fifth,$sixth) {
		$this->first = $first;
		$this->second = $second;
		$this->third = $third;
		$this->fourth= $fourth;
		$this->fifth = $fifth;
		$this->sixth = $sixth;
	}

	public function echo() {
		
		echo $this->first . '<br>' . $this->second . '<br>' . $this->third . '<br>' . $this->fourth . '<br>' . $this->fifth . '<br>' . $this->sixth . '<br>';
		
		$max = max($this->first,$this->second,$this->third,$this->fourth,$this->fifth,$this->sixth);
		echo 'Reikšmės nuo didžiausios iki mažiausio yra šios: ';
		
		// 1 skaicius		
		
		if ($this->first = $max) {
			echo $max . ', ';
			$max = max($this->second,$this->third,$this->fourth,$this->fifth,$this->sixth);
			
			if ($this->second = $max) {
			echo $max . ', ';
			$max = max($this->third,$this->fourth,$this->fifth,$this->sixth);
			
				if ($this->third = $max) {
				echo $max . ', ';
				$max = max($this->fourth,$this->fifth,$this->sixth);
				
					if ($this->fourth = $max) {
					echo $max . ', ';
					$max = max($this->fifth,$this->sixth);
					
						if ($this->fifth = $max) {
						echo $max . ', ';
						
						echo $this->sixth;
						
						}
					}
				}
			} else if ($this->third = $max) {
				echo $max . ', ';
				$max = max($this->fourth,$this->fifth,$this->sixth);
				
				
			}
		
		// 2 skaicius
		
		} else if ($this->second = $max) {
			echo $max . ', ';
			$max = max($this->first,$this->third,$this->fourth,$this->fifth,$this->sixth);
		
			if ($this->first = $max) {
			echo $max . ', ';
			$max = max($this->third,$this->fourth,$this->fifth,$this->sixth);
			
				if ($this->third = $max) {
				echo $max . ', ';
				$max = max($this->fourth,$this->fifth,$this->sixth);
				
					if ($this->fourth = $max) {
					echo $max . ', ';
					$max = max($this->fifth,$this->sixth);
					
						if ($this->fifth = $max) {
						echo $max . ', ';
						
						echo $this->sixth;
						
						}
					}
				}
			}
		
		} else if ($this->third = $max) {
			echo $max . ', ';
			$max = max($this->first,$this->second,$this->fourth,$this->fifth,$this->sixth);
			
			if ($this->first = $max) {
			echo $max . ', ';
			$max = max($this->second,$this->fourth,$this->fifth,$this->sixth);
			
				if ($this->second = $max) {
				echo $max . ', ';
				$max = max($this->fourth,$this->fifth,$this->sixth);
				
					if ($this->fourth = $max) {
					echo $max . ', ';
					$max = max($this->fifth,$this->sixth);
					
						if ($this->fifth = $max) {
						echo $max . ', ';
						
						echo $this->sixth;
						
						}
					}
				}
			}
		
		} else if ($this->fourth = $max) {
			echo $max . ', ';
			$max = max($this->first,$this->second,$this->third,$this->fifth,$this->sixth);
			
			if ($this->first = $max) {
			echo $max . ', ';
			$max = max($this->second,$this->third,$this->fifth,$this->sixth);
			
				if ($this->second = $max) {
				echo $max . ', ';
				$max = max($this->third,$this->fifth,$this->sixth);
				
					if ($this->third = $max) {
					echo $max . ', ';
					$max = max($this->fifth,$this->sixth);
					
						if ($this->fifth = $max) {
						echo $max . ', ';
						
						echo $this->sixth;
						
						}
					}
				}
			}
		
		} else if ($this->fifth = $max) {
			echo $max . ', ';
			$max = max($this->first,$this->second,$this->third,$this->fourth,$this->sixth);
			
			if ($this->first = $max) {
			echo $max . ', ';
			$max = max($this->second,$this->third,$this->fourth,$this->sixth);
			
				if ($this->second = $max) {
				echo $max . ', ';
				$max = max($this->third,$this->fifth,$this->sixth);
				
					if ($this->third = $max) {
					echo $max . ', ';
					$max = max($this->fifth,$this->sixth);
					
						if ($this->fifth = $max) {
						echo $max . ', ';
						
						echo $this->sixth;
						
						}
					}
				}
			}
		
		} else {
			echo $max . ', ';
			$max = max($this->first,$this->second,$this->third,$this->fourth,$this->fifth);
			
			if ($this->first = $max) {
			echo $max . ', ';
			$max = max($this->second,$this->third,$this->fourth,$this->fifth);
			
				if ($this->second = $max) {
				echo $max . ', ';
				$max = max($this->third,$this->fourth,$this->fifth);
				
					if ($this->third = $max) {
					echo $max . ', ';
					$max = max($this->fouth,$this->fifth);
					
						if ($this->fourth = $max) {
						echo $max . ', ';
						
						echo $this->fifth;
						
						}
					}
				}
			}
		}
	}		
}

$myNumbers = new Numbers(rand(1000,9999), rand(1000,9999), rand(1000,9999), rand(1000,9999), rand(1000,9999), rand(1000,9999));
echo $myNumbers-> echo();


?>
