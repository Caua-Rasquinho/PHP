<?php 

class Calc{
    private $a;
    private $b;
    private $c;


    public function __construct(float $a, float $b){
        $this -> a = $a;
        $this -> b = $b;
    }

    public function somar(float $a, float $b){
        $this->setC($this->getA()+$this->getB());
		print("<div class = 'result'> O valor da soma de {$this->getA()} + {$this->getB()} é =  <b>{$this->getC()}</b><br></div>");
		return $this;
    }

	public function subtrair(float $a, float $b){
        $this->setC($this->getA()-$this->getB());
		print("<div class = 'result'> O valor da subtração de {$this->getA()} - {$this->getB()} é =  <b>{$this->getC()}</b><br></div>");
		return $this;
    }

	public function multiplicar(float $a, float $b){
        $this->setC($this->getA()*$this->getB());
		print("<div class = 'result'> O valor da multiplicação de {$this->getA()} x {$this->getB()} é =  <b>{$this->getC()}</b><br></div>");
		return $this;
    }

	public function dividir(float $a, float $b){
		if($this->getB()==0){
			print("<div class = 'erro'> Erro! Divisão por 0!</div>");
		} else{
        $this->setC($this->getA()/$this->getB());
		print("<div class = 'result'> O valor da divisão de {$this->getA()} / {$this->getB()} é =  <b>{$this->getC()}</b><br></div>");
		return $this;
		}
		
    }

	public function exponenciar(float $a, float $b){
        $this->setC(pow($this->getA(),$this->getB()));
		print("<div class = 'result'> O valor da exponenciação de {$this->getA()} elevado a <b>{$this->getB()} é =  {$this->getC()}</b><br></div>");
		return $this;
    }

	public function acharRaiz(float $a, float $b){
		if($this->getB()<=0 || $this->getA()<=0){
			print("<div class = 'erro'> Erro! Raiz negativa!</div>");
		} else{
		if($this->getA()!=0){
			$this->setC(sqrt($this->getA()));
			print("<div class = 'result'> O valor da raiz de {$this->getA()} é =  <b>{$this->getC()}</b><br></div>");
		}
		if($this->getB()!=0){
			$this->setC(sqrt($this->getB()));
			print("<div class = 'result'> O valor da raiz de {$this->getB()} é =  <b>{$this->getC()}</b><br></div>");
		}
		}
		return $this;
    }


    /**
	 * @return mixed
	 */
	public function getA() {
		return $this->a;
	}
	
	/**
	 * @param mixed $a 
	 * @return self
	 */
	public function setA($a): self {
		$this->a = $a;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getB() {
		return $this->b;
	}
	
	/**
	 * @param mixed $b 
	 * @return self
	 */
	public function setB($b): self {
		$this->b = $b;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getC() {
		return $this->c;
	}
	
	/**
	 * @param mixed $c 
	 * @return self
	 */
	public function setC($c): self {
		$this->c = $c;
		return $this;
	}
}
?>