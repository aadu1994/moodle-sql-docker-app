<?php

class __Mustache_e7dba7bec34d6b5646fb91b69fe9168c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="discussion-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-content="forum-discussion">
';
        // 'html' section
        $value = $context->find('html');
        $buffer .= $this->sectionDce71c275561b9b72f9fba361e402217($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->sectionA4f0f3fb39c10e0717577cfc5fdddbe8($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('html.posts'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'html.neighbourlinks' section
        $value = $context->findDot('html.neighbourlinks');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section0f5387b9049be6ac6b906c8cf15d60b3($context, $indent, $value);

        return $buffer;
    }

    private function section29cf713cc55fb31d24a382fdf5a933ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-2';
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
                
                $buffer .= 'ml-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDce71c275561b9b72f9fba361e402217(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="d-flex flex-wrap flex-row-reverse m-b-1 text-right" data-container="discussion-tools">

        <div class="pl-1">
            <div class="discussion-settings-menu">
                {{> mod_forum/forum_action_menu}}
            </div>
        </div>
        <div class="pl-1">{{{subscribe}}}</div>
    </div>
    {{{neighbourlinks}}}

    <div class="d-flex flex-wrap mb-1">
        <div>{{{exportdiscussion}}}</div>
        <div class="{{#exportdiscussion}}ml-2{{/exportdiscussion}}">{{{modeselectorform}}}</div>
        <div class="ml-2">{{{movediscussion}}}</div>
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
                
                $buffer .= $indent . '    <div class="d-flex flex-wrap flex-row-reverse m-b-1 text-right" data-container="discussion-tools">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="pl-1">
';
                $buffer .= $indent . '            <div class="discussion-settings-menu">
';
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="pl-1">';
                $value = $this->resolveValue($context->find('subscribe'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('neighbourlinks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="d-flex flex-wrap mb-1">
';
                $buffer .= $indent . '        <div>';
                $value = $this->resolveValue($context->find('exportdiscussion'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="';
                // 'exportdiscussion' section
                $value = $context->find('exportdiscussion');
                $buffer .= $this->section29cf713cc55fb31d24a382fdf5a933ab($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('modeselectorform'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="ml-2">';
                $value = $this->resolveValue($context->find('movediscussion'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4f0f3fb39c10e0717577cfc5fdddbe8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification}}
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
                
                if ($partial = $this->mustache->loadPartial('core/notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $indent . $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f5387b9049be6ac6b906c8cf15d60b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'mod_forum/discussion\', \'mod_forum/posts_list\', \'mod_forum/lock_toggle\', \'mod_forum/favourite_toggle\', \'mod_forum/pin_toggle\'],
    function($, Discussion, PostsList, LockToggle, FavouriteToggle, Pin) {
        var root = $("[data-content=\'forum-discussion\']");
        Discussion.init(root);
        PostsList.init(root);
        root = $(\'[data-container="discussion-tools"]\');
        LockToggle.init(root);
        FavouriteToggle.init(root);
        Pin.init(root);
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'mod_forum/discussion\', \'mod_forum/posts_list\', \'mod_forum/lock_toggle\', \'mod_forum/favourite_toggle\', \'mod_forum/pin_toggle\'],
';
                $buffer .= $indent . '    function($, Discussion, PostsList, LockToggle, FavouriteToggle, Pin) {
';
                $buffer .= $indent . '        var root = $("[data-content=\'forum-discussion\']");
';
                $buffer .= $indent . '        Discussion.init(root);
';
                $buffer .= $indent . '        PostsList.init(root);
';
                $buffer .= $indent . '        root = $(\'[data-container="discussion-tools"]\');
';
                $buffer .= $indent . '        LockToggle.init(root);
';
                $buffer .= $indent . '        FavouriteToggle.init(root);
';
                $buffer .= $indent . '        Pin.init(root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
