<?php

/* base.html.twig */
class __TwigTemplate_f2153e451d5a8a9b8bedfbe529371fb81f07a4e71475a8dcd858640b4ec173fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d62ebf539edabf95930d96bc0d1bc5afa7fd6fa4946c01195361560e7fb675c = $this->env->getExtension("native_profiler");
        $__internal_2d62ebf539edabf95930d96bc0d1bc5afa7fd6fa4946c01195361560e7fb675c->enter($__internal_2d62ebf539edabf95930d96bc0d1bc5afa7fd6fa4946c01195361560e7fb675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2d62ebf539edabf95930d96bc0d1bc5afa7fd6fa4946c01195361560e7fb675c->leave($__internal_2d62ebf539edabf95930d96bc0d1bc5afa7fd6fa4946c01195361560e7fb675c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_565893598f53c2503c6384c269093c12844e68339117d5abd40cfd6ac75d672d = $this->env->getExtension("native_profiler");
        $__internal_565893598f53c2503c6384c269093c12844e68339117d5abd40cfd6ac75d672d->enter($__internal_565893598f53c2503c6384c269093c12844e68339117d5abd40cfd6ac75d672d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_565893598f53c2503c6384c269093c12844e68339117d5abd40cfd6ac75d672d->leave($__internal_565893598f53c2503c6384c269093c12844e68339117d5abd40cfd6ac75d672d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18fa2db4dacbeea902a20ba7b1c887d09db755ad0d91bbd4e59327fb7d687a3c = $this->env->getExtension("native_profiler");
        $__internal_18fa2db4dacbeea902a20ba7b1c887d09db755ad0d91bbd4e59327fb7d687a3c->enter($__internal_18fa2db4dacbeea902a20ba7b1c887d09db755ad0d91bbd4e59327fb7d687a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18fa2db4dacbeea902a20ba7b1c887d09db755ad0d91bbd4e59327fb7d687a3c->leave($__internal_18fa2db4dacbeea902a20ba7b1c887d09db755ad0d91bbd4e59327fb7d687a3c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9c53f75f2e4c418f6625a125b383278fa728dc53f1bbe22fda2beb9d833cd93 = $this->env->getExtension("native_profiler");
        $__internal_d9c53f75f2e4c418f6625a125b383278fa728dc53f1bbe22fda2beb9d833cd93->enter($__internal_d9c53f75f2e4c418f6625a125b383278fa728dc53f1bbe22fda2beb9d833cd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d9c53f75f2e4c418f6625a125b383278fa728dc53f1bbe22fda2beb9d833cd93->leave($__internal_d9c53f75f2e4c418f6625a125b383278fa728dc53f1bbe22fda2beb9d833cd93_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7936d9f5c6899e54c750c4e2be076ad7fddb6f3652f3f88b929364ef96803b0d = $this->env->getExtension("native_profiler");
        $__internal_7936d9f5c6899e54c750c4e2be076ad7fddb6f3652f3f88b929364ef96803b0d->enter($__internal_7936d9f5c6899e54c750c4e2be076ad7fddb6f3652f3f88b929364ef96803b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7936d9f5c6899e54c750c4e2be076ad7fddb6f3652f3f88b929364ef96803b0d->leave($__internal_7936d9f5c6899e54c750c4e2be076ad7fddb6f3652f3f88b929364ef96803b0d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
