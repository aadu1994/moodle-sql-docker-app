<?php

class __Mustache_989f0fd7cbc83dac06e39f66e34bc1bb extends Mustache_Template
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
        // 'isComplete' section
        $value = $context->find('isComplete');
        $buffer .= $this->section8deed772291e6d1fbfd9878c09e0e621($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'isComplete' inverted section
        $value = $context->find('isComplete');
        if (empty($value)) {
            
            // 'numOutOf' section
            $value = $context->find('numOutOf');
            $buffer .= $this->section8ccb66648dc7f8733bc14587dd289268($context, $indent, $value);
        }

        return $buffer;
    }

    private function section6a234fea2465ad85cf5d3792a8e4b81a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' percent';
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
                
                $buffer .= ' percent';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section106fb8cb9111b6ab9d2d4111b16992d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overall-progress allcomplete';
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
                
                $buffer .= ' overall-progress allcomplete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a61055e8374c7626854b486d7edb30d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'allcomplete, format_tiles';
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
                
                $buffer .= 'allcomplete, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd70e2045fe7a73bdd8b25107ed04039(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'star-o, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}';
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
                
                $buffer .= 'star-o, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB70a695c5161c509bb18431940beb106(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}star-o, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}{{#str}}allcomplete, format_tiles{{/str}}';
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
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionFd70e2045fe7a73bdd8b25107ed04039($context, $indent, $value);
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD676d03a3a4f84d025cca68668db620a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}';
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
                
                $buffer .= 'check, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3a61055e8374c7626854b486d7edb30d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8deed772291e6d1fbfd9878c09e0e621(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="progress-indic{{#showAsPercent}} percent{{/showAsPercent}}{{#isOverall}} overall-progress allcomplete{{/isOverall}}"
         id="tileprogress-{{tileid}}" data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}">
        {{#isOverall}}{{#pix}}star-o, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}{{#str}}allcomplete, format_tiles{{/str}}{{/isOverall}}
        {{^isOverall}}{{#pix}}check, format_tiles, {{#str}}allcomplete, format_tiles{{/str}}{{/pix}}{{/isOverall}}
    </div>
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
                
                $buffer .= $indent . '    <div class="progress-indic';
                // 'showAsPercent' section
                $value = $context->find('showAsPercent');
                $buffer .= $this->section6a234fea2465ad85cf5d3792a8e4b81a($context, $indent, $value);
                // 'isOverall' section
                $value = $context->find('isOverall');
                $buffer .= $this->section106fb8cb9111b6ab9d2d4111b16992d9($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '         id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                // 'isOverall' section
                $value = $context->find('isOverall');
                $buffer .= $this->sectionB70a695c5161c509bb18431940beb106($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'isOverall' inverted section
                $value = $context->find('isOverall');
                if (empty($value)) {
                    
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->sectionD676d03a3a4f84d025cca68668db620a($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a09852d7798cf0dc3ab95003310ff74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overall-progress';
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
                
                $buffer .= ' overall-progress';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bfe7263e72977defccb84d41ce1ee2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'progress, format_tiles';
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
                
                $buffer .= 'progress, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section535ce38704c7b85412ecf66b3aa3a3b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'items, format_tiles';
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
                
                $buffer .= 'items, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section245e479a81cfbda81f05c9c7e74b07df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'complete, format_tiles';
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
                
                $buffer .= 'complete, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39865021e2c468430b53571d2461f1d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-toggle="tooltip" data-html="true" ';
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
                
                $buffer .= 'data-toggle="tooltip" data-html="true" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section032ecdb681681f8ee4396988f5153305(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'overallprogressshort, format_tiles';
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
                
                $buffer .= 'overallprogressshort, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a1dcb7f46b31fa70481c5e7f3e2d040(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}overallprogressshort, format_tiles{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section032ecdb681681f8ee4396988f5153305($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10470c0602d3700b02584489e0eadfa7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '15';
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
                
                $buffer .= '15';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc16d9c01ff712c0e988def444843382(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="progress-indic percent{{#isOverall}} overall-progress{{/isOverall}}" id="tileprogress-{{tileid}}"
             data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
             title="{{#str}}progress, format_tiles{{/str}}:<br>{{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}}<br>{{percent}}%<br>{{#str}}complete, format_tiles{{/str}}"
             {{#numOutOf}}data-toggle="tooltip" data-html="true" {{/numOutOf}}>
          <div class="progress-indic-label">{{#isOverall}}{{#str}}overallprogressshort, format_tiles{{/str}}{{/isOverall}}{{^isOverall}}{{#str}}progress, format_tiles{{/str}}{{/isOverall}} %</div>
                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    {{! two circles, one showing complete and one showing the user\'s progress }}
                    <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
                    <circle id="percent-circle-{{tileid}}" class="partial" transform="rotate(-90,20,20)" cx="20"
                            cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="{{percentCircumf}}"
                            stroke-dashoffset="{{percentOffset}}"></circle>
                    {{! the numeric percentage in centre of circle }}
                    <text x="{{#isSingleDigit}}15{{/isSingleDigit}}{{^isSingleDigit}}10{{/isSingleDigit}}" y="27" font-family="inherit" font-size="20" id="percent-text-{{tileid}}">
                        {{percent}}
                    </text>
                </svg>
        </div>
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
                
                $buffer .= $indent . '        <div class="progress-indic percent';
                // 'isOverall' section
                $value = $context->find('isOverall');
                $buffer .= $this->section8a09852d7798cf0dc3ab95003310ff74($context, $indent, $value);
                $buffer .= '" id="tileprogress-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '             data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '             title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                $buffer .= ':<br>';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section535ce38704c7b85412ecf66b3aa3a3b7($context, $indent, $value);
                $buffer .= '<br>';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%<br>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '             ';
                // 'numOutOf' section
                $value = $context->find('numOutOf');
                $buffer .= $this->section39865021e2c468430b53571d2461f1d4($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '          <div class="progress-indic-label">';
                // 'isOverall' section
                $value = $context->find('isOverall');
                $buffer .= $this->section0a1dcb7f46b31fa70481c5e7f3e2d040($context, $indent, $value);
                // 'isOverall' inverted section
                $value = $context->find('isOverall');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                }
                $buffer .= ' %</div>
';
                $buffer .= $indent . '                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                    <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
';
                $buffer .= $indent . '                    <circle id="percent-circle-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="partial" transform="rotate(-90,20,20)" cx="20"
';
                $buffer .= $indent . '                            cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="';
                $value = $this->resolveValue($context->find('percentCircumf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            stroke-dashoffset="';
                $value = $this->resolveValue($context->find('percentOffset'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></circle>
';
                $buffer .= $indent . '                    <text x="';
                // 'isSingleDigit' section
                $value = $context->find('isSingleDigit');
                $buffer .= $this->section10470c0602d3700b02584489e0eadfa7($context, $indent, $value);
                // 'isSingleDigit' inverted section
                $value = $context->find('isSingleDigit');
                if (empty($value)) {
                    
                    $buffer .= '10';
                }
                $buffer .= '" y="27" font-family="inherit" font-size="20" id="percent-text-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('percent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </text>
';
                $buffer .= $indent . '                </svg>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC69cde87c0a7d7de8953979fbc64fe3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}" data-toggle="tooltip" data-html="true"';
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
                
                $buffer .= 'data-numcomplete="';
                $value = $this->resolveValue($context->find('numComplete'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-numoutof="';
                $value = $this->resolveValue($context->find('numOutOf'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-toggle="tooltip" data-html="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ccb66648dc7f8733bc14587dd289268(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! if the progress is out of zero then do not show the indicator at all}}
        {{#showAsPercent}}
        <div class="progress-indic percent{{#isOverall}} overall-progress{{/isOverall}}" id="tileprogress-{{tileid}}"
             data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}"
             title="{{#str}}progress, format_tiles{{/str}}:<br>{{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}}<br>{{percent}}%<br>{{#str}}complete, format_tiles{{/str}}"
             {{#numOutOf}}data-toggle="tooltip" data-html="true" {{/numOutOf}}>
          <div class="progress-indic-label">{{#isOverall}}{{#str}}overallprogressshort, format_tiles{{/str}}{{/isOverall}}{{^isOverall}}{{#str}}progress, format_tiles{{/str}}{{/isOverall}} %</div>
                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    {{! two circles, one showing complete and one showing the user\'s progress }}
                    <circle class="whole" cx="20" cy="20" r="17" fill="none" stroke="#e6e6e6" stroke-width="5"></circle>
                    <circle id="percent-circle-{{tileid}}" class="partial" transform="rotate(-90,20,20)" cx="20"
                            cy="20" r="17" fill="none" stroke="none" stroke-width="5" stroke-dasharray="{{percentCircumf}}"
                            stroke-dashoffset="{{percentOffset}}"></circle>
                    {{! the numeric percentage in centre of circle }}
                    <text x="{{#isSingleDigit}}15{{/isSingleDigit}}{{^isSingleDigit}}10{{/isSingleDigit}}" y="27" font-family="inherit" font-size="20" id="percent-text-{{tileid}}">
                        {{percent}}
                    </text>
                </svg>
        </div>
        {{/showAsPercent}}

        {{^showAsPercent}}
            <div class="progress-indic{{#isOverall}} overall-progress{{/isOverall}}" id="tileprogress-{{tileid}}"
                 title="{{#str}}progress, format_tiles{{/str}}:<br> {{numComplete}} / {{numOutOf}} {{#str}}items, format_tiles{{/str}} ({{percent}}%) <br>{{#str}}complete, format_tiles{{/str}}"
                 {{#numOutOf}}data-numcomplete="{{numComplete}}" data-numoutof="{{numOutOf}}" data-toggle="tooltip" data-html="true"{{/numOutOf}}>
                {{#str}}progress, format_tiles{{/str}}:<br>
                <span id="num-complete-{{tileid}}">{{numComplete}} / {{numOutOf}}</span>
            </div>
        {{/showAsPercent}}
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
                
                // 'showAsPercent' section
                $value = $context->find('showAsPercent');
                $buffer .= $this->sectionEc16d9c01ff712c0e988def444843382($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'showAsPercent' inverted section
                $value = $context->find('showAsPercent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="progress-indic';
                    // 'isOverall' section
                    $value = $context->find('isOverall');
                    $buffer .= $this->section8a09852d7798cf0dc3ab95003310ff74($context, $indent, $value);
                    $buffer .= '" id="tileprogress-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                 title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                    $buffer .= ':<br> ';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ' / ';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ' ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section535ce38704c7b85412ecf66b3aa3a3b7($context, $indent, $value);
                    $buffer .= ' (';
                    $value = $this->resolveValue($context->find('percent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '%) <br>';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                 ';
                    // 'numOutOf' section
                    $value = $context->find('numOutOf');
                    $buffer .= $this->sectionC69cde87c0a7d7de8953979fbc64fe3e($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '                ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4bfe7263e72977defccb84d41ce1ee2f($context, $indent, $value);
                    $buffer .= ':<br>
';
                    $buffer .= $indent . '                <span id="num-complete-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('numComplete'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ' / ';
                    $value = $this->resolveValue($context->find('numOutOf'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '            </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
