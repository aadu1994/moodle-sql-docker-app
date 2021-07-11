<?php

class __Mustache_7a469f5ba1f8df7eb2ee6735af32656d extends Mustache_Template
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
        $buffer .= $indent . '<span class="tile-icon';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section4fde1966070028aa38167f1bcbedcc80($context, $indent, $value);
        $buffer .= '"
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->sectionA931f41a92cb7d4c9f4f89eaf848cae8($context, $indent, $value);
        $buffer .= '>
';
        // 'tileicon' section
        $value = $context->find('tileicon');
        $buffer .= $this->section8a076bebe20d4bd8f9cc11653ae6c46d($context, $indent, $value);
        // 'tileicon' inverted section
        $value = $context->find('tileicon');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section128e2d9368523a5b7335c853e622efd0($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '</span>';

        return $buffer;
    }

    private function section4fde1966070028aa38167f1bcbedcc80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' launchiconpicker';
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
                
                $buffer .= ' launchiconpicker';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA931f41a92cb7d4c9f4f89eaf848cae8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      data-section="{{tileid}}" data-sectionid="{{secid}}" data-sectionid="3" data-section="2"
    ';
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
                
                $buffer .= $indent . '      data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-sectionid="';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-sectionid="3" data-section="2"
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e3d5ad1ee2c4a80765ea1ed3d47e595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tileicon/{{{tileicon}}}, format_tiles';
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
                
                $buffer .= 'tileicon/';
                $value = $this->resolveValue($context->find('tileicon'), $context);
                $buffer .= $value;
                $buffer .= ', format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a076bebe20d4bd8f9cc11653ae6c46d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#pix}}tileicon/{{{tileicon}}}, format_tiles{{/pix}}
    ';
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
                
                $buffer .= $indent . '        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section2e3d5ad1ee2c4a80765ea1ed3d47e595($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section128e2d9368523a5b7335c853e622efd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tileicon/{{{defaulttileicon}}}, format_tiles';
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
                
                $buffer .= 'tileicon/';
                $value = $this->resolveValue($context->find('defaulttileicon'), $context);
                $buffer .= $value;
                $buffer .= ', format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
