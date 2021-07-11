<?php

class __Mustache_9edf3b1622c74dac97f9b288637eba48 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= $value;
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= $value;
        $buffer .= '" />
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    <meta charset="utf-8">
';
        $buffer .= $indent . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <style>
';
        $buffer .= $indent . '        #frontpage-available-course-list{
';
        $buffer .= $indent . '            padding-top : 2%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #frontpage-available-course-list h2{
';
        $buffer .= $indent . '                text-align: center;
';
        $buffer .= $indent . '                margin-bottom: 2%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        @media (min-width: 240px) and (max-width: 767px) {
';
        $buffer .= $indent . '            #intro h1 {
';
        $buffer .= $indent . '                margin-top: 1%; 
';
        $buffer .= $indent . '                margin-bottom: 1%; 
';
        $buffer .= $indent . '                font-size: 180%;
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            #intro h2{
';
        $buffer .= $indent . '                 font-size: 150%;
';
        $buffer .= $indent . '            }   
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    </style>
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;

        return $buffer;
    }
}
