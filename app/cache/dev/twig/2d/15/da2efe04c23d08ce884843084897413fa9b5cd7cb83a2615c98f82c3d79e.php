<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_2d15da2efe04c23d08ce884843084897413fa9b5cd7cb83a2615c98f82c3d79e extends Twig_Template
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

            //the callback function in \"subscribe\" is called everytime an event is published in that channel.
            session.subscribe(\"acme/channel\", function(uri, payload) {
                console.log(\"Received message\", payload.msg);
            });

            session.publish(\"acme/channel\", {msg: \"This is a message!\"});

            session.unsubscribe(\"acme/channel\");

            session.publish(\"acme/channel\", {msg: \"I won't see this\"});
        })

        myClank.on(\"socket/disconnect\", function(error) {
//error provides us with some insight into the disconnection: error.reason and error.code

            console.log(\"Disconnected for \" + error.reason + \" with code \" + error.code);
        })
    });
    </script>    
    ";
    }

    // line 37
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "    This for testing
";
        // line 41
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
        return array (  94 => 41,  91 => 40,  88 => 39,  82 => 37,  49 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,);
    }
}
