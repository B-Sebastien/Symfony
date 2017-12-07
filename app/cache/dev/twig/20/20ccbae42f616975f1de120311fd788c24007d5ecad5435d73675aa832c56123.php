<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14680fe8259f8505667272c6fe8f4bc750f834c744aaa5bae87dad1b2ab0de01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e6c57b724e2887f9ed6cd87ec478421d3c5318f41a69827bdf92b3266a3e3be = $this->env->getExtension("native_profiler");
        $__internal_2e6c57b724e2887f9ed6cd87ec478421d3c5318f41a69827bdf92b3266a3e3be->enter($__internal_2e6c57b724e2887f9ed6cd87ec478421d3c5318f41a69827bdf92b3266a3e3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e6c57b724e2887f9ed6cd87ec478421d3c5318f41a69827bdf92b3266a3e3be->leave($__internal_2e6c57b724e2887f9ed6cd87ec478421d3c5318f41a69827bdf92b3266a3e3be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b34e3dc1f3f5fc6bd8cf26847f70cd60c530ebe34cbc2d89dd5397be6ac3e158 = $this->env->getExtension("native_profiler");
        $__internal_b34e3dc1f3f5fc6bd8cf26847f70cd60c530ebe34cbc2d89dd5397be6ac3e158->enter($__internal_b34e3dc1f3f5fc6bd8cf26847f70cd60c530ebe34cbc2d89dd5397be6ac3e158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b34e3dc1f3f5fc6bd8cf26847f70cd60c530ebe34cbc2d89dd5397be6ac3e158->leave($__internal_b34e3dc1f3f5fc6bd8cf26847f70cd60c530ebe34cbc2d89dd5397be6ac3e158_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4847c56ee67ce0c9446a7c07580f2fd47755fe8e680eda20701f0e4f130a90d8 = $this->env->getExtension("native_profiler");
        $__internal_4847c56ee67ce0c9446a7c07580f2fd47755fe8e680eda20701f0e4f130a90d8->enter($__internal_4847c56ee67ce0c9446a7c07580f2fd47755fe8e680eda20701f0e4f130a90d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4847c56ee67ce0c9446a7c07580f2fd47755fe8e680eda20701f0e4f130a90d8->leave($__internal_4847c56ee67ce0c9446a7c07580f2fd47755fe8e680eda20701f0e4f130a90d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e2ac3360421055f520193d4b3c760ce483b0e3df2b65e0e7b92f576b9078cc9 = $this->env->getExtension("native_profiler");
        $__internal_4e2ac3360421055f520193d4b3c760ce483b0e3df2b65e0e7b92f576b9078cc9->enter($__internal_4e2ac3360421055f520193d4b3c760ce483b0e3df2b65e0e7b92f576b9078cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e2ac3360421055f520193d4b3c760ce483b0e3df2b65e0e7b92f576b9078cc9->leave($__internal_4e2ac3360421055f520193d4b3c760ce483b0e3df2b65e0e7b92f576b9078cc9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
