<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20ab53fd590c63c152a057b50391bba3c140fa8643b4c281212f53dc70999c3b extends Twig_Template
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
        $__internal_a941e53624894fa3e08ad61e4cc9328c2567f30cdcb02436950b67b3897308b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a941e53624894fa3e08ad61e4cc9328c2567f30cdcb02436950b67b3897308b9->enter($__internal_a941e53624894fa3e08ad61e4cc9328c2567f30cdcb02436950b67b3897308b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a941e53624894fa3e08ad61e4cc9328c2567f30cdcb02436950b67b3897308b9->leave($__internal_a941e53624894fa3e08ad61e4cc9328c2567f30cdcb02436950b67b3897308b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34042026c0c4014218861d6543bb380c69a87fdfca7926f2828e3d3703ef73ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34042026c0c4014218861d6543bb380c69a87fdfca7926f2828e3d3703ef73ab->enter($__internal_34042026c0c4014218861d6543bb380c69a87fdfca7926f2828e3d3703ef73ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34042026c0c4014218861d6543bb380c69a87fdfca7926f2828e3d3703ef73ab->leave($__internal_34042026c0c4014218861d6543bb380c69a87fdfca7926f2828e3d3703ef73ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b273d8a1a1308780ad2cfc2c9224bb087bc7d0a29382354abfb9b021e9f9592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b273d8a1a1308780ad2cfc2c9224bb087bc7d0a29382354abfb9b021e9f9592->enter($__internal_2b273d8a1a1308780ad2cfc2c9224bb087bc7d0a29382354abfb9b021e9f9592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b273d8a1a1308780ad2cfc2c9224bb087bc7d0a29382354abfb9b021e9f9592->leave($__internal_2b273d8a1a1308780ad2cfc2c9224bb087bc7d0a29382354abfb9b021e9f9592_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a43e88366bc27315b0b358c6c28ad3a79d9e506593151aef0864694154bb00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a43e88366bc27315b0b358c6c28ad3a79d9e506593151aef0864694154bb00b->enter($__internal_4a43e88366bc27315b0b358c6c28ad3a79d9e506593151aef0864694154bb00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a43e88366bc27315b0b358c6c28ad3a79d9e506593151aef0864694154bb00b->leave($__internal_4a43e88366bc27315b0b358c6c28ad3a79d9e506593151aef0864694154bb00b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
