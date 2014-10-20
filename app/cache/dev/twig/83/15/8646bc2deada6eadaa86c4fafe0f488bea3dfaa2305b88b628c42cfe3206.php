<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_83158646bc2deada6eadaa86c4fafe0f488bea3dfaa2305b88b628c42cfe3206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
    ";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jdareclank/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function() {
        var myClank = Clank.connect(\"ws://localhost:20000\");

        myClank.on(\"socket/connect\", function(session) {
//session is an Autobahn JS WAMP session.

            console.log(\"Successfully Connected!\");
        })

        myClank.on(\"socket/disconnect\", function(error) {
//error provides us with some insight into the disconnection: error.reason and error.code

            console.log(\"Disconnected for \" + error.reason + \" with code \" + error.code);
        })
    });
</script>    
    ";
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "This for testing
";
        // line 32
        echo $this->env->getExtension('clank')->clientOutput();
        echo "     
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  82 => 31,  79 => 30,  73 => 28,  49 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,);
    }
}
