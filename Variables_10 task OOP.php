<?php

/* 10 užduotis

Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. 
Skaičių pridėkite prie jau sugeneruoto laiko. 
Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.  */

class Watch {

public $hours;
public $minutes;
public $seconds;
public $additional;
public $newtime;

	public function __construct($hours,$minutes,$seconds,$additional) {
		$this->hours = $hours;
		$this->minutes = $minutes;
		$this->seconds = $seconds;
		$this->additional= $additional;
	}

	public function echo() {

		if ($this->hours < 10) {

			if ($this->minutes < 10) {

				if ($this->seconds < 10) {

					echo '<span style="border:1px solid black; padding:2px;">Old time is 0' . $this->hours . ' : 0' . $this->minutes . ' : 0' . $this->seconds . '</span><br><br>';
				
				} else {

					echo '<span style="border:1px solid black; padding:2px;">Old time is 0' . $this->hours . ' : 0' . $this->minutes . ' : ' . $this->seconds . '</span><br><br>';
				
				}

			} else {

				if ($this->seconds < 10) {

					echo '<span style="border:1px solid black; padding:2px;">Old time is 0' . $this->hours . ' : ' . $this->minutes . ' : 0' . $this->seconds . '</span><br><br>';
					
				} else {

					echo '<span style="border:1px solid black; padding:2px;">Old time is 0' . $this->hours . ' : ' . $this->minutes . ' : ' . $this->seconds . '</span><br><br>';
					
				}
			}

			
		} else {

			if ($this->minutes < 10) {

				if ($this->seconds < 10) {

					echo '<span style="border:1px solid black; padding:2px;">Old time is ' . $this->hours . ' : 0' . $this->minutes . ' : 0' . $this->seconds . '</span><br><br>';
				
				} else {

					echo '<span style="border:1px solid black; padding:2px;">Old time is ' . $this->hours . ' : 0' . $this->minutes . ' : ' . $this->seconds . '</span><br><br>';
				
				}

			} else {

				if ($this->seconds < 10) {

					echo '<span style="border:1px solid black; padding:2px;">Old time is ' . $this->hours . ' : ' . $this->minutes . ' : 0' . $this->seconds . '</span><br><br>';
				
				} else {

					echo '<span style="border:1px solid black; padding:2px;">Old time is ' . $this->hours . ' : ' . $this->minutes . ' : ' . $this->seconds . '</span><br><br>';
				
				}
			}

		}

		echo 'Time difference is ' . $this->additional . ' seconds<br><br>';
		
		$newtime = ($this->hours * 3600) + ($this->minutes * 60) + ($this->seconds) + $this->additional;

		
		if ($newtime%3600 < 2160) {
			
			if (($newtime - ($this->hours*3600)) % 60 < 36) {
			
				$this->hours = round($newtime/3600,0);
				
					if ($this->hours > 24) {
						
						$this->hours = $this->hours - 24;
						
					} else {
						
						$this->hours = $this->hours;
						
					}
		
				$this->minutes = round(($newtime-($this->hours*3600))/60,0);
				
					if ($this->minutes > 60) {
						
						$this->minutes = $this->minutes - 60;
						$this->hours = $this->hours + 1;
						
						
					} else {
						
						$this->minutes = $this->minutes; 
						
					}
		
				$this->seconds = $newtime - ($this->hours*3600) - ($this->minutes*60);
				
					if ($this->seconds > 60) {
						
						$this->seconds = $this->seconds - 60;
						$this->minutes = $this->minutes + 1;
						
						
					} else {
						
						$this->seconds = $this->seconds; 
						
					}
			
			} else {
				
				$this->hours = round($newtime/3600,0);
				
					if ($this->hours > 24) {
						
						$this->hours = $this->hours - 24;
						
					} else {
						
						$this->hours = $this->hours;
						
					}
		
				$this->minutes = round(($newtime-($this->hours*3600))/60,0)-1;
				
					if ($this->minutes > 60) {
						
						$this->minutes = $this->minutes - 60;
						$this->hours = $this->hours + 1;
						
						
					} else {
						
						$this->minutes = $this->minutes; 
						
					}
		
				$this->seconds = $newtime - ($this->hours*3600) - ($this->minutes*60);
				
					if ($this->seconds > 60) {
						
						$this->seconds = $this->seconds - 60;
						$this->minutes = $this->minutes + 1;
						
						
					} else {
						
						$this->seconds = $this->seconds; 
						
					}
				
			}	
			
		} else {
		
			if (($newtime - ($this->hours*3600)) % 60 < 36) {
			
				$this->hours = round($newtime/3600,0)-1;
				
					if ($this->hours > 24) {
						
						$this->hours = $this->hours - 24;
						
					} else {
						
						$this->hours = $this->hours;
						
					}
		
				$this->minutes = round(($newtime-($this->hours*3600))/60,0);
				
					if ($this->minutes > 60) {
						
						$this->minutes = $this->minutes - 60;
						$this->hours = $this->hours + 1;
						
						
					} else {
						
						$this->minutes = $this->minutes; 
						
					}
		
				$this->seconds = $newtime - ($this->hours*3600) - ($this->minutes*60);
				
					if ($this->seconds > 60) {
						
						$this->seconds = $this->seconds - 60;
						$this->minutes = $this->minutes + 1;
						
						
					} else {
						
						$this->seconds = $this->seconds; 
						
					}
			
			} else {
				
				$this->hours = round($newtime/3600,0)-1;
				
					if ($this->hours > 24) {
						
						$this->hours = $this->hours - 24;
						
					} else {
						
						$this->hours = $this->hours;
						
					}
		
				$this->minutes = round(($newtime-($this->hours*3600))/60,0)-1;
				
					if ($this->minutes > 60) {
						
						$this->minutes = $this->minutes - 60;
						$this->hours = $this->hours + 1;
						
						
					} else {
						
						$this->minutes = $this->minutes; 
						
					}
		
				$this->seconds = $newtime - ($this->hours*3600) - ($this->minutes*60);
				
					if ($this->seconds > 60) {
						
						$this->seconds = $this->seconds - 60;
						$this->minutes = $this->minutes + 1;
						
						
					} else {
						
						$this->seconds = $this->seconds; 
						
					}
				
			}
		
		}

		
		if ($this->hours < 10) {

			if ($this->minutes < 10) {

				if ($this->seconds < 10) {

					echo '<span style="border:1px solid black; padding:2px;">New time is 0' . $this->hours . ' : 0' . $this->minutes . ' : 0' . $this->seconds . '</span><br><br>';
				
				} else {

					echo '<span style="border:1px solid black; padding:2px;">New time is 0' . $this->hours . ' : 0' . $this->minutes . ' : ' . $this->seconds . '</span><br><br>';
				
				}

			} else {

				if ($this->seconds < 10) {

					echo '<span style="border:1px solid black; padding:2px;">New time is 0' . $this->hours . ' : ' . $this->minutes . ' : 0' . $this->seconds . '</span><br><br>';
					
				} else {

					echo '<span style="border:1px solid black; padding:2px;">New time is 0' . $this->hours . ' : ' . $this->minutes . ' : ' . $this->seconds . '</span><br><br>';
					
				}
			}
			
		} else {

			if ($this->minutes < 10) {

				if ($this->seconds < 10) {

					echo '<span style="border:1px solid black; padding:2px;">New time is ' . $this->hours . ' : 0' . $this->minutes . ' : 0' . $this->seconds . '</span><br><br>';
				
				} else {

					echo '<span style="border:1px solid black; padding:2px;">New time is ' . $this->hours . ' : 0' . $this->minutes . ' : ' . $this->seconds . '</span><br><br>';
				
				}

			} else {

				if ($this->seconds < 10) {

					echo '<span style="border:1px solid black; padding:2px;">New time is ' . $this->hours . ' : ' . $this->minutes . ' : 0' . $this->seconds . '</span><br><br>';
				
				} else {

					echo '<span style="border:1px solid black; padding:2px;">New time is ' . $this->hours . ' : ' . $this->minutes . ' : ' . $this->seconds . '</span><br><br>';
				
				}
			}

		}
		
	}
}

$myWatch = new Watch(rand(1,23), rand(0,59), rand (0,59), rand(0,300));
echo $myWatch-> echo();


?>
