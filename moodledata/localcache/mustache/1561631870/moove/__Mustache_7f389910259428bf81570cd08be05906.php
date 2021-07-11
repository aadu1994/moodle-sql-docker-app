<?php

class __Mustache_7f389910259428bf81570cd08be05906 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<article
';
        $buffer .= $indent . '    id="p';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    class="forum-post-container mb-2"
';
        $buffer .= $indent . '    data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-region="post"
';
        $buffer .= $indent . '    data-target="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-target"
';
        $buffer .= $indent . '    tabindex="0"
';
        $buffer .= $indent . '    aria-labelledby="post-header-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    aria-describedby="post-content-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <!-- The firstpost and starter classes below aren\'t used for anything other than to identify the first post in behat -->
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="d-flex border p-2 mb-2 forumpost focus-target ';
        // 'unread' section
        $value = $context->find('unread');
        $buffer .= $this->section3ed6c5fc72aa7724e442457028079947($context, $indent, $value);
        $buffer .= ' ';
        // 'firstpost' section
        $value = $context->find('firstpost');
        $buffer .= $this->section21f91dd58d78aa33caec1006870d7c95($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        aria-label=\'';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2d7e7bb37b1c76e06dcc1842169465b6($context, $indent, $value);
        $buffer .= '\'
';
        $buffer .= $indent . '        data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-content="forum-post"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        ';
        // 'isfirstunread' section
        $value = $context->find('isfirstunread');
        $buffer .= $this->section8385bd492ccda898f38e149a71c97f98($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="d-flex flex-column w-100"  data-region-content="forum-post-core">
';
        $buffer .= $indent . '            <header  class="mb-2 header row d-flex">
';
        // 'isdeleted' inverted section
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            // 'author' section
            $value = $context->find('author');
            $buffer .= $this->sectionBe64768f0107d299837f0d40f2148bae($context, $indent, $value);
        }
        $buffer .= $indent . '                <div class="d-flex flex-column">
';
        // 'parentauthorname' section
        $value = $context->find('parentauthorname');
        $buffer .= $this->section51540e8b9c4cbf19759c5b16fc544ea7($context, $indent, $value);
        $buffer .= $indent . '                    <h3 class="h6 font-weight-bold mb-0" data-region-content="forum-post-core-subject">';
        $blockFunction = $context->findInBlock('subject');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('subject'), $context);
            $buffer .= $value;
        }
        $buffer .= '</h3>
';
        // 'isdeleted' inverted section
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $buffer .= $indent . '                        <address tabindex="-1">
';
            $buffer .= $indent . '                            ';
            // 'html.authorsubheading' section
            $value = $context->findDot('html.authorsubheading');
            $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
            $buffer .= '
';
            // 'html.authorsubheading' inverted section
            $value = $context->findDot('html.authorsubheading');
            if (empty($value)) {
                
                $buffer .= $indent . '                                <time>
';
                $buffer .= $indent . '                                    ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->sectionA250390b54f037d9cfd646f27f499bd4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </time>
';
            }
            $buffer .= $indent . '                        </address>
';
        }
        // 'isprivatereply' section
        $value = $context->find('isprivatereply');
        $buffer .= $this->section00a922ca5a40c4cbd79e18e319080e6b($context, $indent, $value);
        // 'hasreplycount' section
        $value = $context->find('hasreplycount');
        $buffer .= $this->sectionFcc066a9bc7cebded25a4bc3d67960ff($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </header>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="d-flex body-content-container">
';
        // 'isdeleted' inverted section
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            // 'author' section
            $value = $context->find('author');
            $buffer .= $this->sectionD7e4220f11fce172797eae0079748393($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="no-overflow w-100 content-alignment-container">
';
        $buffer .= $indent . '                    <div id="post-content-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="post-content-container">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        // 'isdeleted' inverted section
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            // 'haswordcount' section
            $value = $context->find('haswordcount');
            $buffer .= $this->section4b0dc6fa2f25525790d63b5194239374($context, $indent, $value);
            $buffer .= $indent . '
';
            // 'attachments' section
            $value = $context->find('attachments');
            $buffer .= $this->sectionB306e4067909c929106dbff70f7ebee5($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->findDot('html.taglist'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '
';
            // 'attachments' section
            $value = $context->find('attachments');
            $buffer .= $this->section3bd5bb626da0b6e76d640a6f7ce450c2($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        <div class="d-flex flex-wrap">
';
            // 'html.rating' section
            $value = $context->findDot('html.rating');
            $buffer .= $this->section7da21a5cd2fb0b5be6a23840d5d24e61($context, $indent, $value);
            $blockFunction = $context->findInBlock('actions');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                // 'readonly' inverted section
                $value = $context->find('readonly');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <div
';
                    $buffer .= $indent . '                                        class="post-actions d-flex align-self-end justify-content-end flex-wrap ml-auto"
';
                    $buffer .= $indent . '                                        data-region="post-actions-container"
';
                    $buffer .= $indent . '                                        role="menubar"
';
                    $buffer .= $indent . '                                        aria-label=\'';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section2d7e7bb37b1c76e06dcc1842169465b6($context, $indent, $value);
                    $buffer .= '\'
';
                    $buffer .= $indent . '                                        aria-controls="p';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                    >
';
                    // 'capabilities' section
                    $value = $context->find('capabilities');
                    $buffer .= $this->sectionAe8a3f352e5228bd2cbf4573d4985ecc($context, $indent, $value);
                    $buffer .= $indent . '                                    </div>
';
                }
            }
            $buffer .= $indent . '                        </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        ';
            $blockFunction = $context->findInBlock('footer');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            }
            $buffer .= '
';
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-region="replies-container">
';
        $blockFunction = $context->findInBlock('replies');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '        <div>
';
            // 'hasreplies' section
            $value = $context->find('hasreplies');
            $buffer .= $this->section90b957f0abea5701c8dc53008dab052d($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</article>
';

        return $buffer;
    }

    private function section3ed6c5fc72aa7724e442457028079947(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unread';
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
                
                $buffer .= 'unread';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21f91dd58d78aa33caec1006870d7c95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firstpost starter';
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
                
                $buffer .= 'firstpost starter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d7e7bb37b1c76e06dcc1842169465b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postbyuser, mod_forum, {"post": "{{subject}}", "user": "{{author.fullname}}"} ';
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
                
                $buffer .= ' postbyuser, mod_forum, {"post": "';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "user": "';
                $value = $this->resolveValue($context->findDot('author.fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"} ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8385bd492ccda898f38e149a71c97f98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a id="unread" aria-hidden="true"></a>';
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
                
                $buffer .= '<a id="unread" aria-hidden="true"></a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3a99ebfecb94beea6e88f9141126424(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{author.fullname}} ';
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
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->findDot('author.fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23e2899f29edea3743845fad23e3f387(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <img
                                    class="rounded-circle w-100"
                                    src="{{{.}}}"
                                    alt="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                    aria-hidden="true"
                                >
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
                
                $buffer .= $indent . '                                <img
';
                $buffer .= $indent . '                                    class="rounded-circle w-100"
';
                $buffer .= $indent . '                                    src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                    alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD3a99ebfecb94beea6e88f9141126424($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    aria-hidden="true"
';
                $buffer .= $indent . '                                >
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe64768f0107d299837f0d40f2148bae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="mr-2" style="width: 45px;">
                            {{#urls.profileimage}}
                                <img
                                    class="rounded-circle w-100"
                                    src="{{{.}}}"
                                    alt="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                    aria-hidden="true"
                                >
                            {{/urls.profileimage}}
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
                
                $buffer .= $indent . '                        <div class="mr-2" style="width: 45px;">
';
                // 'urls.profileimage' section
                $value = $context->findDot('urls.profileimage');
                $buffer .= $this->section23e2899f29edea3743845fad23e3f387($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbc21c36d03664580b5227e5ce50ba02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' inreplyto, mod_forum, {{.}} ';
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
                
                $buffer .= ' inreplyto, mod_forum, ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51540e8b9c4cbf19759c5b16fc544ea7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="sr-only">{{#str}} inreplyto, mod_forum, {{.}} {{/str}}</span>
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
                
                $buffer .= $indent . '                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBbc21c36d03664580b5227e5ce50ba02($context, $indent, $value);
                $buffer .= '</span>
';
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
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe063bea9e3828a4ceaa260d495c44b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedaydatetime, core_langconfig ';
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
                
                $buffer .= ' strftimedaydatetime, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA250390b54f037d9cfd646f27f499bd4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{timecreated}}, {{#str}} strftimedaydatetime, core_langconfig {{/str}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timecreated'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBe063bea9e3828a4ceaa260d495c44b9($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA308eba18ba8e2ab8f95747bd19a5e97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'postisprivatereply, forum';
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
                
                $buffer .= 'postisprivatereply, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00a922ca5a40c4cbd79e18e319080e6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="privatereplyinfo">
                        {{#str}}postisprivatereply, forum{{/str}}
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
                
                $buffer .= $indent . '                        <div class="privatereplyinfo">
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA308eba18ba8e2ab8f95747bd19a5e97($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97736c50c16d72b49b1eb58fe3695bea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numberofreplies, mod_forum, {{replycount}} ';
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
                
                $buffer .= ' numberofreplies, mod_forum, ';
                $value = $this->resolveValue($context->find('replycount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcc066a9bc7cebded25a4bc3d67960ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="sr-only">{{#str}} numberofreplies, mod_forum, {{replycount}} {{/str}}</span>
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
                
                $buffer .= $indent . '                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section97736c50c16d72b49b1eb58fe3695bea($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE103d4001a9c5c8aed5c9292425b5842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{name}} ';
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
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD79f1e4d3d24dbd231c85de4f34b0fe3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <img
                                        class="rounded-circle w-100"
                                        src="{{{.}}}"
                                        alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                        aria-hidden="true"
                                    >
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
                
                $buffer .= $indent . '                                    <img
';
                $buffer .= $indent . '                                        class="rounded-circle w-100"
';
                $buffer .= $indent . '                                        src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                        alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        aria-hidden="true"
';
                $buffer .= $indent . '                                    >
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b9f77eea80cb9783af470bb4481c311(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#urls.image}}
                                    <img
                                        class="rounded-circle w-100"
                                        src="{{{.}}}"
                                        alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                        aria-hidden="true"
                                    >
                                {{/urls.image}}
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
                
                // 'urls.image' section
                $value = $context->findDot('urls.image');
                $buffer .= $this->sectionD79f1e4d3d24dbd231c85de4f34b0fe3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7e4220f11fce172797eae0079748393(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="mr-2 author-groups-container" style="width: 45px; flex-shrink: 0">
                            {{#groups}}
                                {{#urls.image}}
                                    <img
                                        class="rounded-circle w-100"
                                        src="{{{.}}}"
                                        alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                        aria-hidden="true"
                                    >
                                {{/urls.image}}
                            {{/groups}}
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
                
                $buffer .= $indent . '                        <div class="mr-2 author-groups-container" style="width: 45px; flex-shrink: 0">
';
                // 'groups' section
                $value = $context->find('groups');
                $buffer .= $this->section1b9f77eea80cb9783af470bb4481c311($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5bb1649427fd639aeb93fcd9f945e21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numwords, core, {{wordcount}} ';
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
                
                $buffer .= ' numwords, core, ';
                $value = $this->resolveValue($context->find('wordcount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b0dc6fa2f25525790d63b5194239374(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p class="font-italic mb-0"><small>{{#str}} numwords, core, {{wordcount}} {{/str}}</small></p>
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
                
                $buffer .= $indent . '                            <p class="font-italic mb-0"><small>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC5bb1649427fd639aeb93fcd9f945e21($context, $indent, $value);
                $buffer .= '</small></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section276cb37c59a636c58d4c95f526f34076(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attachmentname, mod_forum, {{filename}} ';
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
                
                $buffer .= ' attachmentname, mod_forum, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63f7f582e0283c9cd8898a1aa8039d60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' addtoportfolio, core_portfolio ';
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
                
                $buffer .= ' addtoportfolio, core_portfolio ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC95b897453b8a2454a363ea092e35f3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/portfolioadd, core ';
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
                
                $buffer .= ' t/portfolioadd, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2b54d92018ac7ab55a683cf86e8349e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
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
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionC95b897453b8a2454a363ea092e35f3e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0da9044249cd16a1e32bca9034750cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div>{{{.}}}</div>
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
                
                $buffer .= $indent . '                                        <div>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76800365720c72010a8bcb0cfb85ca0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="attachedimages">
                                    <img
                                        src="{{{url}}}"
                                        alt="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                        style="max-width: 100%"
                                    >
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
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
                
                $buffer .= $indent . '                                <div class="attachedimages">
';
                $buffer .= $indent . '                                    <img
';
                $buffer .= $indent . '                                        src="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                        alt="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section276cb37c59a636c58d4c95f526f34076($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        style="max-width: 100%"
';
                $buffer .= $indent . '                                    >
';
                // 'urls.export' section
                $value = $context->findDot('urls.export');
                $buffer .= $this->sectionB2b54d92018ac7ab55a683cf86e8349e($context, $indent, $value);
                // 'html.plagiarism' section
                $value = $context->findDot('html.plagiarism');
                $buffer .= $this->sectionA0da9044249cd16a1e32bca9034750cc($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB306e4067909c929106dbff70f7ebee5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#isimage}}
                                <div class="attachedimages">
                                    <img
                                        src="{{{url}}}"
                                        alt="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                        style="max-width: 100%"
                                    >
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
                                </div>
                            {{/isimage}}
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
                
                // 'isimage' section
                $value = $context->find('isimage');
                $buffer .= $this->section76800365720c72010a8bcb0cfb85ca0b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96fdf38a3da828f079856309b8856872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{icon}}, core ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4582362bca17629710ca07a1cd978e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' exportattachmentname, mod_forum, {{filename}} ';
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
                
                $buffer .= ' exportattachmentname, mod_forum, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6b635ad82ef0b91da378a60e35749bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{{.}}}" title="{{#str}} exportattachmentname, mod_forum, {{filename}} {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
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
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE4582362bca17629710ca07a1cd978e3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionC95b897453b8a2454a363ea092e35f3e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bd5bb626da0b6e76d640a6f7ce450c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^isimage}}
                                <div>
                                    <a
                                        href="{{{url}}}"
                                        aria-label="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                    >
                                        {{#pix}} {{icon}}, core {{/pix}} {{filename}}
                                    </a>
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} exportattachmentname, mod_forum, {{filename}} {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
                                </div>
                            {{/isimage}}
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
                
                // 'isimage' inverted section
                $value = $context->find('isimage');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <div>
';
                    $buffer .= $indent . '                                    <a
';
                    $buffer .= $indent . '                                        href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= $value;
                    $buffer .= '"
';
                    $buffer .= $indent . '                                        aria-label="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section276cb37c59a636c58d4c95f526f34076($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                    >
';
                    $buffer .= $indent . '                                        ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->section96fdf38a3da828f079856309b8856872($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('filename'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                    </a>
';
                    // 'urls.export' section
                    $value = $context->findDot('urls.export');
                    $buffer .= $this->sectionB6b635ad82ef0b91da378a60e35749bf($context, $indent, $value);
                    // 'html.plagiarism' section
                    $value = $context->findDot('html.plagiarism');
                    $buffer .= $this->sectionA0da9044249cd16a1e32bca9034750cc($context, $indent, $value);
                    $buffer .= $indent . '                                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7da21a5cd2fb0b5be6a23840d5d24e61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="mt-2">{{{.}}}</div>
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
                
                $buffer .= $indent . '                                <div class="mt-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c38fbb8f8f3e49e4120d021d07feb2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permanentlinktopost, mod_forum ';
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
                
                $buffer .= ' permanentlinktopost, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section763a3604c774c34d64897ef31abbb560(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permalink, mod_forum ';
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
                
                $buffer .= ' permalink, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08a9c6737b76b7c33bfa0025d5e4f96e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.view}}}"
                                                    class="btn btn-link"
                                                    title="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                >
                                                    {{#str}} permalink, mod_forum {{/str}}
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
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.view'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                    title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7c38fbb8f8f3e49e4120d021d07feb2f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7c38fbb8f8f3e49e4120d021d07feb2f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section763a3604c774c34d64897ef31abbb560($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb5abb8e3c94408fa1d289b5ef3f447(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markread, mod_forum ';
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
                
                $buffer .= ' markread, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdfcfa8fdfadfceb65bbc2c0473d012f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-link"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
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
                
                $buffer .= $indent . '                                                    <a
';
                $buffer .= $indent . '                                                        data-region="post-action"
';
                $buffer .= $indent . '                                                        href="';
                $value = $this->resolveValue($context->findDot('urls.markasread'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                        class="btn btn-link"
';
                $buffer .= $indent . '                                                    >
';
                $buffer .= $indent . '                                                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFcb5abb8e3c94408fa1d289b5ef3f447($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31d13d35264fbc819e59cd4918196342(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markunread, mod_forum ';
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
                
                $buffer .= ' markunread, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section120f8f66d8a0ccc692c69bf9612c5305(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{#unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-link"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{^unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasunread}}}"
                                                        class="btn btn-link"
                                                    >
                                                        {{#str}} markunread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
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
                
                // 'unread' section
                $value = $context->find('unread');
                $buffer .= $this->sectionBdfcfa8fdfadfceb65bbc2c0473d012f($context, $indent, $value);
                // 'unread' inverted section
                $value = $context->find('unread');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                    <a
';
                    $buffer .= $indent . '                                                        data-region="post-action"
';
                    $buffer .= $indent . '                                                        href="';
                    $value = $this->resolveValue($context->findDot('urls.markasunread'), $context);
                    $buffer .= $value;
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        class="btn btn-link"
';
                    $buffer .= $indent . '                                                    >
';
                    $buffer .= $indent . '                                                        ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section31d13d35264fbc819e59cd4918196342($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                                    </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fb7958d41ca7a880e19a003139c431d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permanentlinktoparentpost, mod_forum ';
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
                
                $buffer .= ' permanentlinktoparentpost, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf5fdc3805ec5d1701e4bc484d707b5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parent, mod_forum ';
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
                
                $buffer .= ' parent, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD09acb4a00b81c2ea69b6a154aebb73c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{.}}}"
                                                    class="btn btn-link"
                                                    title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                >
                                                    {{#str}} parent, mod_forum {{/str}}
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
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                    title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0fb7958d41ca7a880e19a003139c431d($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0fb7958d41ca7a880e19a003139c431d($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCf5fdc3805ec5d1701e4bc484d707b5c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD08a060cc097f193c29c5510c81c4ca5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit, mod_forum ';
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
                
                $buffer .= ' edit, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ae09188872cbab9ff25928193dcad82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.edit}}}"
                                                    class="btn btn-link"
                                                >
                                                    {{#str}} edit, mod_forum {{/str}}
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
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.edit'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD08a060cc097f193c29c5510c81c4ca5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0066cb1b087bd9f8c261a80ff7434d10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' prune, mod_forum ';
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
                
                $buffer .= ' prune, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8822cb09db8cf3003c8b86043323bb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.split}}}"
                                                    class="btn btn-link"
                                                >
                                                    {{#str}} prune, mod_forum {{/str}}
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
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.split'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0066cb1b087bd9f8c261a80ff7434d10($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC033b8edefb34009ad7ec794e2a13909(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' delete, mod_forum ';
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
                
                $buffer .= ' delete, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74457abcd4d7399bfe84aa8b1eef447e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.delete}}}"
                                                    class="btn btn-link"
                                                >
                                                    {{#str}} delete, mod_forum {{/str}}
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
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.delete'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionC033b8edefb34009ad7ec794e2a13909($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe37fdeec206de815fa124c8b1578fdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reply, mod_forum ';
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
                
                $buffer .= ' reply, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEcba98d94a8023498d868a101896425d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{$replyoutput}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.reply}}}"
                                                        class="btn btn-link"
                                                        data-post-id="{{id}}"
                                                        data-action="collapsible-link"
                                                        data-can-reply-privately="{{canreplyprivately}}"
                                                        title="{{#str}} reply, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} reply, mod_forum {{/str}}
                                                    </a>
                                                {{/replyoutput}}
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
                
                $blockFunction = $context->findInBlock('replyoutput');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                                                    <a
';
                    $buffer .= $indent . '                                                        data-region="post-action"
';
                    $buffer .= $indent . '                                                        href="';
                    $value = $this->resolveValue($context->findDot('urls.reply'), $context);
                    $buffer .= $value;
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        class="btn btn-link"
';
                    $buffer .= $indent . '                                                        data-post-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        data-action="collapsible-link"
';
                    $buffer .= $indent . '                                                        data-can-reply-privately="';
                    $value = $this->resolveValue($context->find('canreplyprivately'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                    >
';
                    $buffer .= $indent . '                                                        ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                                    </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section395c1ba5a893a8776ffbf3ad0c818800(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.export}}}"
                                                    class="btn btn-link"
                                                >
                                                    {{#str}} addtoportfolio, core_portfolio {{/str}}
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
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.export'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe8a3f352e5228bd2cbf4573d4985ecc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#view}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.view}}}"
                                                    class="btn btn-link"
                                                    title="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                >
                                                    {{#str}} permalink, mod_forum {{/str}}
                                                </a>
                                            {{/view}}
                                            {{#controlreadstatus}}
                                                {{#unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-link"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{^unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasunread}}}"
                                                        class="btn btn-link"
                                                    >
                                                        {{#str}} markunread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                            {{/controlreadstatus}}
                                            {{#urls.viewparent}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{.}}}"
                                                    class="btn btn-link"
                                                    title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                >
                                                    {{#str}} parent, mod_forum {{/str}}
                                                </a>
                                            {{/urls.viewparent}}
                                            {{#edit}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.edit}}}"
                                                    class="btn btn-link"
                                                >
                                                    {{#str}} edit, mod_forum {{/str}}
                                                </a>
                                            {{/edit}}
                                            {{#split}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.split}}}"
                                                    class="btn btn-link"
                                                >
                                                    {{#str}} prune, mod_forum {{/str}}
                                                </a>
                                            {{/split}}
                                            {{#delete}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.delete}}}"
                                                    class="btn btn-link"
                                                >
                                                    {{#str}} delete, mod_forum {{/str}}
                                                </a>
                                            {{/delete}}
                                            {{#reply}}
                                                {{$replyoutput}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.reply}}}"
                                                        class="btn btn-link"
                                                        data-post-id="{{id}}"
                                                        data-action="collapsible-link"
                                                        data-can-reply-privately="{{canreplyprivately}}"
                                                        title="{{#str}} reply, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} reply, mod_forum {{/str}}
                                                    </a>
                                                {{/replyoutput}}
                                            {{/reply}}
                                            {{#export}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.export}}}"
                                                    class="btn btn-link"
                                                >
                                                    {{#str}} addtoportfolio, core_portfolio {{/str}}
                                                </a>
                                            {{/export}}
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
                
                // 'view' section
                $value = $context->find('view');
                $buffer .= $this->section08a9c6737b76b7c33bfa0025d5e4f96e($context, $indent, $value);
                // 'controlreadstatus' section
                $value = $context->find('controlreadstatus');
                $buffer .= $this->section120f8f66d8a0ccc692c69bf9612c5305($context, $indent, $value);
                // 'urls.viewparent' section
                $value = $context->findDot('urls.viewparent');
                $buffer .= $this->sectionD09acb4a00b81c2ea69b6a154aebb73c($context, $indent, $value);
                // 'edit' section
                $value = $context->find('edit');
                $buffer .= $this->section2ae09188872cbab9ff25928193dcad82($context, $indent, $value);
                // 'split' section
                $value = $context->find('split');
                $buffer .= $this->sectionE8822cb09db8cf3003c8b86043323bb5($context, $indent, $value);
                // 'delete' section
                $value = $context->find('delete');
                $buffer .= $this->section74457abcd4d7399bfe84aa8b1eef447e($context, $indent, $value);
                // 'reply' section
                $value = $context->find('reply');
                $buffer .= $this->sectionEcba98d94a8023498d868a101896425d($context, $indent, $value);
                // 'export' section
                $value = $context->find('export');
                $buffer .= $this->section395c1ba5a893a8776ffbf3ad0c818800($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f51d1dee6c9cb1b1e0eaa3ffceff9b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/forum_discussion_post }}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90b957f0abea5701c8dc53008dab052d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#replies}}
                {{> mod_forum/forum_discussion_post }}
            {{/replies}}
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
                
                // 'replies' section
                $value = $context->find('replies');
                $buffer .= $this->section6f51d1dee6c9cb1b1e0eaa3ffceff9b0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
