<?php

class __Mustache_33bac952cea3b3ac3844476212f138e8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'isediting' inverted section
        $value = $context->find('isediting');
        if (empty($value)) {
            
            $buffer .= $indent . '    <span class="completionchangenotify complete-y-';
            $value = $this->resolveValue($context->find('cmid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section245e479a81cfbda81f05c9c7e74b07df($context, $indent, $value);
            $buffer .= '</span>
';
            $buffer .= $indent . '    <span class="completionchangenotify complete-n-';
            $value = $this->resolveValue($context->find('cmid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionE2abdfe567f67eaa34f0499a73b94d66($context, $indent, $value);
            $buffer .= '</span>
';
            // 'completionIsManual' section
            $value = $context->find('completionIsManual');
            $buffer .= $this->section174519e4da6369af69a00482e5f505ec($context, $indent, $value);
            // 'completionIsManual' inverted section
            $value = $context->find('completionIsManual');
            if (empty($value)) {
                
                $buffer .= $indent . '        <span class="completioncheckbox completion-auto" id="completion-check-';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '              title="';
                // 'completionstring' section
                $value = $context->find('completionstring');
                $buffer .= $this->sectionFc01b6bee0583f71c71c618ed8ec4728($context, $indent, $value);
                // 'completionstring' inverted section
                $value = $context->find('completionstring');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionDd1901b336ee1c92498472f772df24ae($context, $indent, $value);
                }
                $buffer .= '"
';
                $buffer .= $indent . '              data-ismanual="0" data-completionstate="';
                $value = $this->resolveValue($context->find('completionstate'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-toggle="tooltip">
';
                $buffer .= $indent . '            <span class="completion-icon completion_img_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' completion-icon-';
                $value = $this->resolveValue($context->find('completionicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></span>
';
                $buffer .= $indent . '        </span>
';
            }
        }
        $buffer .= $indent . '
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->sectionCc8575318d9a27a0692ab3545931ecae($context, $indent, $value);

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

    private function sectionE2abdfe567f67eaa34f0499a73b94d66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notcomplete, format_tiles';
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
                
                $buffer .= 'notcomplete, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc01b6bee0583f71c71c618ed8ec4728(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{completionstring}}';
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
                
                $value = $this->resolveValue($context->find('completionstring'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd1901b336ee1c92498472f772df24ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglecompletion, format_tiles';
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
                
                $buffer .= 'togglecompletion, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section174519e4da6369af69a00482e5f505ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <form method="post" action="{{{ config.wwwroot }}}/course/togglecompletion.php"
              class="togglecompletion" data-cmid="{{cmid}}" data-section="{{tileid}}" data-ismanual="1" data-placement="bottom">
            <div class="completioncheckbox" id="completion-check-{{cmid}}">
                <input type="hidden" name="id" value="{{cmid}}">
                <input type="hidden" name="sesskey" value="{{sesskey}}">
                <input type="hidden" name="modulename" value="{{modtitle}}">
                <input type="hidden" name="completionstate" id="completionstate_{{cmid}}" value="{{completionstateInverse}}">
                <button class="btn" title="{{#completionstring}}{{completionstring}}{{/completionstring}}{{^completionstring}}{{#str}}togglecompletion, format_tiles{{/str}}{{/completionstring}}"
                        data-toggle="tooltip">
                    <span class="completion-icon completion_img_{{cmid}} completion-icon-{{completionicon}}">
                    </span>
                </button>
                    {{! completion_img_[id] is the **class** if the img, not its id, because we have two per page, one on the main page and one in the modal }}
            </div>
        </form>
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
                
                $buffer .= $indent . '        <form method="post" action="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/togglecompletion.php"
';
                $buffer .= $indent . '              class="togglecompletion" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-ismanual="1" data-placement="bottom">
';
                $buffer .= $indent . '            <div class="completioncheckbox" id="completion-check-';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <input type="hidden" name="id" value="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <input type="hidden" name="sesskey" value="';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <input type="hidden" name="modulename" value="';
                $value = $this->resolveValue($context->find('modtitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <input type="hidden" name="completionstate" id="completionstate_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('completionstateInverse'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <button class="btn" title="';
                // 'completionstring' section
                $value = $context->find('completionstring');
                $buffer .= $this->sectionFc01b6bee0583f71c71c618ed8ec4728($context, $indent, $value);
                // 'completionstring' inverted section
                $value = $context->find('completionstring');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionDd1901b336ee1c92498472f772df24ae($context, $indent, $value);
                }
                $buffer .= '"
';
                $buffer .= $indent . '                        data-toggle="tooltip">
';
                $buffer .= $indent . '                    <span class="completion-icon completion_img_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' completion-icon-';
                $value = $this->resolveValue($context->find('completionicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc8575318d9a27a0692ab3545931ecae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="completioncheckbox" id="completion-check-{{cmid}}"
    title="{{#completionstring}}{{completionstring}}{{/completionstring}}{{^completionstring}}{{#str}}togglecompletion, format_tiles{{/str}}{{/completionstring}}" data-ismanual="0">
        <span class="completion-icon completion_img_{{cmid}} completion-icon-{{completionicon}}"></span>
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
                
                $buffer .= $indent . '    <div class="completioncheckbox" id="completion-check-';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '    title="';
                // 'completionstring' section
                $value = $context->find('completionstring');
                $buffer .= $this->sectionFc01b6bee0583f71c71c618ed8ec4728($context, $indent, $value);
                // 'completionstring' inverted section
                $value = $context->find('completionstring');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionDd1901b336ee1c92498472f772df24ae($context, $indent, $value);
                }
                $buffer .= '" data-ismanual="0">
';
                $buffer .= $indent . '        <span class="completion-icon completion_img_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' completion-icon-';
                $value = $this->resolveValue($context->find('completionicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></span>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
