<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c13179449d30ccbeb79efafa1872cc8cd6d6772195ff9d5a7b5c84cafa82ce5b extends Twig_Template
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
        $__internal_101674b13050ea95b8f2dd097c7363858772d25e42c9baf7285a30936c970bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101674b13050ea95b8f2dd097c7363858772d25e42c9baf7285a30936c970bfe->enter($__internal_101674b13050ea95b8f2dd097c7363858772d25e42c9baf7285a30936c970bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101674b13050ea95b8f2dd097c7363858772d25e42c9baf7285a30936c970bfe->leave($__internal_101674b13050ea95b8f2dd097c7363858772d25e42c9baf7285a30936c970bfe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13ec3e2923a28f146611d96ddf42ba354d174f450b06f51ca1ee1ccb8c19587a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ec3e2923a28f146611d96ddf42ba354d174f450b06f51ca1ee1ccb8c19587a->enter($__internal_13ec3e2923a28f146611d96ddf42ba354d174f450b06f51ca1ee1ccb8c19587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13ec3e2923a28f146611d96ddf42ba354d174f450b06f51ca1ee1ccb8c19587a->leave($__internal_13ec3e2923a28f146611d96ddf42ba354d174f450b06f51ca1ee1ccb8c19587a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d65e4f692b5b882ba690adec9f6afce423524ca773d48993c0eed35814f4170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d65e4f692b5b882ba690adec9f6afce423524ca773d48993c0eed35814f4170->enter($__internal_4d65e4f692b5b882ba690adec9f6afce423524ca773d48993c0eed35814f4170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d65e4f692b5b882ba690adec9f6afce423524ca773d48993c0eed35814f4170->leave($__internal_4d65e4f692b5b882ba690adec9f6afce423524ca773d48993c0eed35814f4170_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f84d6f71c3b08b7fc32d998511297cb6587ee0936416c0cc70cd1705b580352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f84d6f71c3b08b7fc32d998511297cb6587ee0936416c0cc70cd1705b580352->enter($__internal_4f84d6f71c3b08b7fc32d998511297cb6587ee0936416c0cc70cd1705b580352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f84d6f71c3b08b7fc32d998511297cb6587ee0936416c0cc70cd1705b580352->leave($__internal_4f84d6f71c3b08b7fc32d998511297cb6587ee0936416c0cc70cd1705b580352_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
