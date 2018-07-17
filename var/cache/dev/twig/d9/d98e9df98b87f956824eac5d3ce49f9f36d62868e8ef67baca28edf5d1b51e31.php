<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a4883a42def8a7d4056c94048c90a96639ea973e48b33e5a4d84fbda87dad048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70f3ca35e6d4114915f86d956bca769b1e76d763d699d0a545123a401557846b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f3ca35e6d4114915f86d956bca769b1e76d763d699d0a545123a401557846b->enter($__internal_70f3ca35e6d4114915f86d956bca769b1e76d763d699d0a545123a401557846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70f3ca35e6d4114915f86d956bca769b1e76d763d699d0a545123a401557846b->leave($__internal_70f3ca35e6d4114915f86d956bca769b1e76d763d699d0a545123a401557846b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f8ec8deac8e27647120edb0bd141af51272dbecb0c207cfdd9af27e6303a820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8ec8deac8e27647120edb0bd141af51272dbecb0c207cfdd9af27e6303a820->enter($__internal_8f8ec8deac8e27647120edb0bd141af51272dbecb0c207cfdd9af27e6303a820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f8ec8deac8e27647120edb0bd141af51272dbecb0c207cfdd9af27e6303a820->leave($__internal_8f8ec8deac8e27647120edb0bd141af51272dbecb0c207cfdd9af27e6303a820_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d02fdb42b4ade04a2e1212937283b45e656464b8bc75cb7ba5ee42840b3d782b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02fdb42b4ade04a2e1212937283b45e656464b8bc75cb7ba5ee42840b3d782b->enter($__internal_d02fdb42b4ade04a2e1212937283b45e656464b8bc75cb7ba5ee42840b3d782b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d02fdb42b4ade04a2e1212937283b45e656464b8bc75cb7ba5ee42840b3d782b->leave($__internal_d02fdb42b4ade04a2e1212937283b45e656464b8bc75cb7ba5ee42840b3d782b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a3346ce02c59b9066ac0fb610b77ff9c06d5307d0d1cdd337091da4b6016ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3346ce02c59b9066ac0fb610b77ff9c06d5307d0d1cdd337091da4b6016ab4->enter($__internal_0a3346ce02c59b9066ac0fb610b77ff9c06d5307d0d1cdd337091da4b6016ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0a3346ce02c59b9066ac0fb610b77ff9c06d5307d0d1cdd337091da4b6016ab4->leave($__internal_0a3346ce02c59b9066ac0fb610b77ff9c06d5307d0d1cdd337091da4b6016ab4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
