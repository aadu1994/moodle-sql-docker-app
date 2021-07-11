<?php

class __Mustache_83faa818687202f994a3b14128887c50 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<span>
';
        $buffer .= $indent . '    ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section69f41f8aab2411ec51e7784892a4af59($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</span>';

        return $buffer;
    }

    private function sectionB1757c41fc32cd38d3028f6093a280de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loading';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loading';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69f41f8aab2411ec51e7784892a4af59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loading, format_tiles, {{#str}}loading{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loading, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB1757c41fc32cd38d3028f6093a280de($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
