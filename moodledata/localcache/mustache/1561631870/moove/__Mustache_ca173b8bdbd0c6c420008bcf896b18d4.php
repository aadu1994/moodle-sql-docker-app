<?php

class __Mustache_ca173b8bdbd0c6c420008bcf896b18d4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
            $context->pushBlockContext(array(
                'replies' => array($this, 'block08d1f710ddaeb191ae472a1e7d022125'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionE4927e8d0f7ef567164212b78e25648c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/forum_discussion_nested_post }}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_nested_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block08d1f710ddaeb191ae472a1e7d022125($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="indent">
';
        // 'replies' section
        $value = $context->find('replies');
        $buffer .= $this->sectionE4927e8d0f7ef567164212b78e25648c($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
