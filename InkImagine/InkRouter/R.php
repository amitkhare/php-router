<?php
namespace InkImagine\InkRouter;
class R{private $r=[],$i=[],$V=[],$h=[],$v,$T=array('{w}'=>'(\w+)','{d}'=>'(\d+)');function __construct($v=[]){$this->v=(object)$v;$this->i=$_SERVER['REQUEST_URI'];}function a($h,$p,$c,$V=[]){if(substr($p,-1)!="/"){$p.="/";}$p="#^".$p."?$#";$p=str_replace(array_keys($this->T),$this->T,$p);if(!empty($V)){$this->V=$V;}$this->r[$p]=$c;$this->h[$p]=strtoupper($h);}function d(){foreach($this->r as $p=>$c){if(preg_match($p,$this->i,$a)===1){if(strpos($this->h[$p],$_SERVER['REQUEST_METHOD'])===false){return call_user_func(function(){echo"Invalid Method";});}array_shift($a);if(is_string($c)){if(count($cb=explode("#",$c))>1){$c=$cb[0];$z=explode("|",$cb[1]);}else{$z=[];}if(count($z)!=count($a)){die('missing param '.$p);}foreach($a as $y=>$v){$this->V[$z[$y]]=$v;}return $this->M($c,$this->V);}else{return call_user_func_array($c,array_values($a));}}}return call_user_func(function(){echo "Not found";});}private function M($c,$V=[]){$c=explode(":",$c);$x=$c[0];$m=$c[1];$c=new $x($this->v);return $c->$m((object)$V);}}
