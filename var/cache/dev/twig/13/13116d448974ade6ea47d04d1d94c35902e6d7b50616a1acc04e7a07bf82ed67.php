<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b57731c87e09c002dc189401c3d44ece2e7ca37122209e9ba118476edb6302dd extends Twig_Template
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
        $__internal_0ad42f1e98bf16f879c9c60b633891f59815efe9ad13f50f29f4b9a049b0ba71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad42f1e98bf16f879c9c60b633891f59815efe9ad13f50f29f4b9a049b0ba71->enter($__internal_0ad42f1e98bf16f879c9c60b633891f59815efe9ad13f50f29f4b9a049b0ba71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0ad42f1e98bf16f879c9c60b633891f59815efe9ad13f50f29f4b9a049b0ba71->leave($__internal_0ad42f1e98bf16f879c9c60b633891f59815efe9ad13f50f29f4b9a049b0ba71_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_edd6ec389fed6159d138738b0b25b65511ebda7559c88286d6081ee3cd732cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd6ec389fed6159d138738b0b25b65511ebda7559c88286d6081ee3cd732cf6->enter($__internal_edd6ec389fed6159d138738b0b25b65511ebda7559c88286d6081ee3cd732cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_edd6ec389fed6159d138738b0b25b65511ebda7559c88286d6081ee3cd732cf6->leave($__internal_edd6ec389fed6159d138738b0b25b65511ebda7559c88286d6081ee3cd732cf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
