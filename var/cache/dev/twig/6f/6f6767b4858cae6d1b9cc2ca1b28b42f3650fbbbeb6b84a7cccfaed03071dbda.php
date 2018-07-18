<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_083f4ddde4405a4ac5a09bd3bbf6b1370a77443dbef847dd46a502d9ecf0fb46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ed7c5c2f360330603e514183a720eac58118b09809b1868b67d2fb6b6d40fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed7c5c2f360330603e514183a720eac58118b09809b1868b67d2fb6b6d40fc6->enter($__internal_7ed7c5c2f360330603e514183a720eac58118b09809b1868b67d2fb6b6d40fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7ed7c5c2f360330603e514183a720eac58118b09809b1868b67d2fb6b6d40fc6->leave($__internal_7ed7c5c2f360330603e514183a720eac58118b09809b1868b67d2fb6b6d40fc6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a83bed6a2245588f4e6c1f30d7814489a4e45aa07da2d8e497220b7fc9e2d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a83bed6a2245588f4e6c1f30d7814489a4e45aa07da2d8e497220b7fc9e2d2b->enter($__internal_1a83bed6a2245588f4e6c1f30d7814489a4e45aa07da2d8e497220b7fc9e2d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1a83bed6a2245588f4e6c1f30d7814489a4e45aa07da2d8e497220b7fc9e2d2b->leave($__internal_1a83bed6a2245588f4e6c1f30d7814489a4e45aa07da2d8e497220b7fc9e2d2b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
