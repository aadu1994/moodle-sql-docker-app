<?php

class __Mustache_9e01c2cc57b826473c3fe555814b4804 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="navigation-arrows">
';
        // 'previous_tile_id' section
        $value = $context->find('previous_tile_id');
        $buffer .= $this->section53dba374abc2cf1595e121a46571d891($context, $indent, $value);
        // 'previous_tile_id' inverted section
        $value = $context->find('previous_tile_id');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="navigation-arrow dimmed">
';
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section8e99fc5a847d39295bebc4036014298d($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
        }
        $buffer .= $indent . '
';
        // 'next_tile_id' section
        $value = $context->find('next_tile_id');
        $buffer .= $this->section05fd8adae5687976d17f54a336a42d30($context, $indent, $value);
        // 'next_tile_id' inverted section
        $value = $context->find('next_tile_id');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="navigation-arrow dimmed">
';
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section25089960bba6aa5be7701b799c3c0ddd($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
        }
        $buffer .= $indent . '    <a class="navigation-arrow" href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= $value;
        $buffer .= '/course/view.php?id=';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionF69eb641c7c02adcc5309c11614b9350($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionDb730faeb315d2fc817de2b18f1d7d6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previoustopic, format_tiles';
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
                
                $buffer .= 'previoustopic, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e99fc5a847d39295bebc4036014298d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chevron-left, format_tiles, {{#str}}previoustopic, format_tiles{{/str}}';
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
                
                $buffer .= 'chevron-left, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDb730faeb315d2fc817de2b18f1d7d6f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53dba374abc2cf1595e121a46571d891(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a class="navigation-arrow"
           href="{{{ config.wwwroot }}}/course/view.php?id={{courseid}}&section={{previous_tile_id}}&singlesec={{previous_tile_id}}">
            {{#pix}}chevron-left, format_tiles, {{#str}}previoustopic, format_tiles{{/str}}{{/pix}}
        </a>
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
                
                $buffer .= $indent . '        <a class="navigation-arrow"
';
                $buffer .= $indent . '           href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&section=';
                $value = $this->resolveValue($context->find('previous_tile_id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&singlesec=';
                $value = $this->resolveValue($context->find('previous_tile_id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section8e99fc5a847d39295bebc4036014298d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59ec7a9348c8f9b844e4c9476c48df1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nexttopic, format_tiles';
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
                
                $buffer .= 'nexttopic, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25089960bba6aa5be7701b799c3c0ddd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chevron-right, format_tiles, {{#str}}nexttopic, format_tiles{{/str}}';
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
                
                $buffer .= 'chevron-right, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section59ec7a9348c8f9b844e4c9476c48df1e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05fd8adae5687976d17f54a336a42d30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a class="navigation-arrow"
           href="{{{ config.wwwroot }}}/course/view.php?id={{courseid}}&section={{next_tile_id}}&singlesec={{next_tile_id}}">
            {{#pix}}chevron-right, format_tiles, {{#str}}nexttopic, format_tiles{{/str}}{{/pix}}
        </a>
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
                
                $buffer .= $indent . '        <a class="navigation-arrow"
';
                $buffer .= $indent . '           href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&section=';
                $value = $this->resolveValue($context->find('next_tile_id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&singlesec=';
                $value = $this->resolveValue($context->find('next_tile_id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section25089960bba6aa5be7701b799c3c0ddd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6637e488c3ec4f1612bec4a395b57b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'home, format_tiles';
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
                
                $buffer .= 'home, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF69eb641c7c02adcc5309c11614b9350(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'home, format_tiles, {{#str}}home, format_tiles{{/str}}';
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
                
                $buffer .= 'home, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC6637e488c3ec4f1612bec4a395b57b1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
