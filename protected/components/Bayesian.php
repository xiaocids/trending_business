<?php

/**
 * @author XiaoCid
 * @copyright 2013
 */

class Bayesian {
        private $index = array();
        private $classes;
        private $classTokCounts;
        private $tokCount;
        private $classDocCounts;
        private $docCount;
        private $prior;
        private $config;

       
        public function __construct($config = array()){
            $this->config = array_merge(
                array(
                    'classes' =>  array('pos', 'neg'),
                    'classTokCounts' => array('pos' => 0, 'neg' => 0),
                    'tokCount'=>0,
                    'classDocCounts' => array('pos' => 0, 'neg' => 0),
                    'docCount'=>0,
                    'prior' => array('pos' => 0.5, 'neg' => 0.5),
                ),
                $config
            );
            
            $this->classes = $this->config['classes'];
            $this->classTokCounts = $this->config['classTokCounts'];
            $this->tokCount = $this->config['tokCount'];
            $this->classDocCounts = $this->config['classDocCounts'];
            $this->docCount = $this->config['docCount'];
            $this->prior = $this->config['prior'];
        }
        
        public function addToIndex($file, $class, $limit = 0) {
                $fh = fopen($file, 'r');
                $i = 0;
                if(!in_array($class, $this->classes)) {
                        echo "Invalid class specified\n";
                        return;
                }
                while($line = fgets($fh)) {
                        if($limit > 0 && $i > $limit) {
                                break;
                        }
                        $i++;
                        
                        $this->docCount++;
                        $this->classDocCounts[$class]++;
                        $tokens = $this->tokenise($line);
                        foreach($tokens as $token) {
                                if(!isset($this->index[$token][$class])) {
                                        $this->index[$token][$class] = 0;
                                }
                                $this->index[$token][$class]++;
                                $this->classTokCounts[$class]++;
                                $this->tokCount++;
                        }
                }
                fclose($fh);
        }
        
        public function classify($document) {
                $this->prior['pos'] = $this->classDocCounts['pos'] / $this->docCount;
                $this->prior['neg'] = $this->classDocCounts['neg'] / $this->docCount; 
                $tokens = $this->tokenise($document);
                $classScores = array();

                foreach($this->classes as $class) {
                        $classScores[$class] = 1;
                        foreach($tokens as $token) {
                                $count = isset($this->index[$token][$class]) ? 
                                        $this->index[$token][$class] : 0;

                                $classScores[$class] *= ($count + 1) / 
                                        ($this->classTokCounts[$class] + $this->tokCount);
                        }
                        $classScores[$class] = $this->prior[$class] * $classScores[$class];
                }
                
                arsort($classScores);
                return key($classScores);
        }

        private function tokenise($document) {
                $document = strtolower($document);
                preg_match_all('/\w+/', $document, $matches);
                return $matches[0];
        }
}

?>