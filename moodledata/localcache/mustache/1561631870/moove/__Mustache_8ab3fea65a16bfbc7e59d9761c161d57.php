<?php

class __Mustache_8ab3fea65a16bfbc7e59d9761c161d57 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<li class="tile';
        // 'hidden' section
        $value = $context->find('hidden');
        $buffer .= $this->section7aa9d29047685f43b691d6a07b1afcea($context, $indent, $value);
        // 'restricted' section
        $value = $context->find('restricted');
        $buffer .= $this->sectionE2bb66f5487b7617b8c51f2a5b45d501($context, $indent, $value);
        // 'isactive' section
        $value = $context->find('isactive');
        $buffer .= $this->section928b6ff338b0eb6eaf854e3f17360ba9($context, $indent, $value);
        // 'userclickable' section
        $value = $context->find('userclickable');
        $buffer .= $this->sectionCb55db809f17c40a745ac914e4c0d26a($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    id="tile-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-sectionid="';
        $value = $this->resolveValue($context->find('secid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" tabindex="2" aria-role="button"';
        // 'hastilephoto' section
        $value = $context->find('hastilephoto');
        $buffer .= $this->section23076bee0d5ba21085d8152deab9a01a($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <a';
        // 'userclickable' section
        $value = $context->find('userclickable');
        $buffer .= $this->section53a35190562f5204e7714b0a2e5bddb1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '       data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" id="sectionlink-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        // 'hastilephoto' inverted section
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="tile-content" id="tilecontent-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '            <div class="tile-top" id="tileTop-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '                <div class="tileiconcontainer" id="tileicon_';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                    ';
            // 'isediting' section
            $value = $context->find('isediting');
            $buffer .= $this->section2771f295cae59d723532e6fdc6d1c544($context, $indent, $value);
            $buffer .= '>
';
            if ($partial = $this->mustache->loadPartial('format_tiles/tileicon')) {
                $buffer .= $partial->renderInternal($context, $indent . '                    ');
            }
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="tiletopright pull-right" id="tiletopright-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" aria-hidden="true">
';
            // 'hidden' section
            $value = $context->find('hidden');
            $buffer .= $this->sectionFf23cda8d2714c169f16615d5e5d092d($context, $indent, $value);
            // 'restricted' section
            $value = $context->find('restricted');
            $buffer .= $this->section9d862c0a99ed66f4ccc96d97449f5d11($context, $indent, $value);
            // 'progress' section
            $value = $context->find('progress');
            $buffer .= $this->sectionC2ad21c668f969a9bc78e68df9db34c1($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="tile-text" id="tileText-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                ';
            // 'ismobile' inverted section
            $value = $context->find('ismobile');
            if (empty($value)) {
                
                // 'activity_summary' section
                $value = $context->find('activity_summary');
                $buffer .= $this->sectionE5d0bf73bfded0b8c365a827ba62263a($context, $indent, $value);
            }
            $buffer .= '>
';
            $buffer .= $indent . '                <span class="tile-textinner';
            $value = $this->resolveValue($context->find('titleclass'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" id="tileTextin-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '                  ';
            // 'title' section
            $value = $context->find('title');
            $buffer .= $this->section2af72651b67e0cfebab37ff84b859898($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </span>
';
            // 'availabilitymessage' section
            $value = $context->find('availabilitymessage');
            $buffer .= $this->section34b3c627994fcbef920aa5002210e6d2($context, $indent, $value);
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '
';
        // 'hastilephoto' section
        $value = $context->find('hastilephoto');
        $buffer .= $this->section5f8102b6b1a68858cea35e46d7f6651a($context, $indent, $value);
        $buffer .= $indent . '    </a>
';
        // 'usingjsnav' section
        $value = $context->find('usingjsnav');
        $buffer .= $this->section17957b7bab327aa2a9340dc71b7c8c90($context, $indent, $value);
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section7aa9d29047685f43b691d6a07b1afcea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-hidden';
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
                
                $buffer .= ' tile-hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2bb66f5487b7617b8c51f2a5b45d501(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-restricted';
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
                
                $buffer .= ' tile-restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section928b6ff338b0eb6eaf854e3f17360ba9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' current';
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
                
                $buffer .= ' current';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb55db809f17c40a745ac914e4c0d26a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile-clickable';
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
                
                $buffer .= ' tile-clickable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23076bee0d5ba21085d8152deab9a01a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{phototileinlinestyle}}}';
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
                
                $value = $this->resolveValue($context->find('phototileinlinestyle'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53a35190562f5204e7714b0a2e5bddb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&section={{tileid}}"';
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
                
                $buffer .= ' href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&section=';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa52e14d9db90ec37b236f39dc78c82e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'picknewicon, format_tiles';
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
                
                $buffer .= 'picknewicon, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF32f5bbcf6805d6f2767abe2a98bfa4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'picknewiconphoto, format_tiles';
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
                
                $buffer .= 'picknewiconphoto, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section366205ecbdff702f963ebbfc675cc9be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}picknewiconphoto, format_tiles{{/str}}';
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
                $buffer .= $this->sectionF32f5bbcf6805d6f2767abe2a98bfa4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2771f295cae59d723532e6fdc6d1c544(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-toggle="tooltip" data-placement="left"
                     data-original-title="{{^allowphototiles}}{{#str}}picknewicon, format_tiles{{/str}}{{/allowphototiles}}{{#allowphototiles}}{{#str}}picknewiconphoto, format_tiles{{/str}}{{/allowphototiles}}"
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
                
                $buffer .= 'data-toggle="tooltip" data-placement="left"
';
                $buffer .= $indent . '                     data-original-title="';
                // 'allowphototiles' inverted section
                $value = $context->find('allowphototiles');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa52e14d9db90ec37b236f39dc78c82e($context, $indent, $value);
                }
                // 'allowphototiles' section
                $value = $context->find('allowphototiles');
                $buffer .= $this->section366205ecbdff702f963ebbfc675cc9be($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD44735bb46c7c26ca90a9ba3bacaa65e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden, format_tiles';
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
                
                $buffer .= 'hidden, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9b2a6d9f947663ad2852194c9d9704b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'eye-slash, format_tiles, {{#str}}hidden, format_tiles{{/str}}';
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
                
                $buffer .= 'eye-slash, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD44735bb46c7c26ca90a9ba3bacaa65e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf23cda8d2714c169f16615d5e5d092d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#pix}}eye-slash, format_tiles, {{#str}}hidden, format_tiles{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '                        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionC9b2a6d9f947663ad2852194c9d9704b($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA660a93413b0d2d8a474fd11d6a19275(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'restricted';
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
                
                $buffer .= 'restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0530b72d4485ad5ac5e1bad519ab725(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lock, format_tiles, {{#str}}restricted{{/str}}';
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
                
                $buffer .= 'lock, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA660a93413b0d2d8a474fd11d6a19275($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d862c0a99ed66f4ccc96d97449f5d11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#pix}}lock, format_tiles, {{#str}}restricted{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '                        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionD0530b72d4485ad5ac5e1bad519ab725($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2ad21c668f969a9bc78e68df9db34c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> format_tiles/progress}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/progress')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5d0bf73bfded0b8c365a827ba62263a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-toggle="tooltip" data-html="true" data-original-title="{{activity_summary}}"';
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
                
                $buffer .= 'data-toggle="tooltip" data-html="true" data-original-title="';
                $value = $this->resolveValue($context->find('activity_summary'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2af72651b67e0cfebab37ff84b859898(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3>{{{title}}}</h3>';
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
                
                $buffer .= '<h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34b3c627994fcbef920aa5002210e6d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>format_tiles/availability_info}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE801f9ab0cae8dff89fc23a745c48b18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>format_tiles/availability_info}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1183ac3c99cf87a17b2cd7313d25d9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{activity_summary}}"{{^ismobile}} data-toggle="tooltip" data-html="true"{{/ismobile}}';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('activity_summary'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                // 'ismobile' inverted section
                $value = $context->find('ismobile');
                if (empty($value)) {
                    
                    $buffer .= ' data-toggle="tooltip" data-html="true"';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f8102b6b1a68858cea35e46d7f6651a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#availabilitymessage}}
                {{>format_tiles/availability_info}}
            {{/availabilitymessage}}
            <div class="" id="tileText-{{tileid}}"
                 {{#activity_summary}}title="{{activity_summary}}"{{^ismobile}} data-toggle="tooltip" data-html="true"{{/ismobile}}{{/activity_summary}}>
            <span class="photo-tile-text{{titleclass}}" id="tileTextin-{{tileid}}">
                {{#title}}<h3>{{{title}}}</h3>{{/title}}
            </span>
                <div class="tile-text" {{#activity_summary}}title="{{activity_summary}}"{{^ismobile}} data-toggle="tooltip" data-html="true"{{/ismobile}}{{/activity_summary}}>
<!--                    This ensures that the bottom section of the tile shows the activity summary on hover, too-->
                </div>
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
                
                // 'availabilitymessage' section
                $value = $context->find('availabilitymessage');
                $buffer .= $this->sectionE801f9ab0cae8dff89fc23a745c48b18($context, $indent, $value);
                $buffer .= $indent . '            <div class="" id="tileText-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                 ';
                // 'activity_summary' section
                $value = $context->find('activity_summary');
                $buffer .= $this->sectionF1183ac3c99cf87a17b2cd7313d25d9f($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            <span class="photo-tile-text';
                $value = $this->resolveValue($context->find('titleclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" id="tileTextin-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->section2af72651b67e0cfebab37ff84b859898($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '                <div class="tile-text" ';
                // 'activity_summary' section
                $value = $context->find('activity_summary');
                $buffer .= $this->sectionF1183ac3c99cf87a17b2cd7313d25d9f($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '<!--                    This ensures that the bottom section of the tile shows the activity summary on hover, too-->
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17957b7bab327aa2a9340dc71b7c8c90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! This is added as empty for now - JS will populate and de-populate as necessary and add image to it using template.}}
        <span class="tile-loading-icon" id="loading-icon-{{tileid}}" style="display: none;"></span>
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
                
                $buffer .= $indent . '        <span class="tile-loading-icon" id="loading-icon-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" style="display: none;"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
