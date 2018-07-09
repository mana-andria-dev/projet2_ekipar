<?php

/* AppBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0b6b5e49d3a280ea07c8f32ffb99e14c67d7cc1b9a742771dd2c75eb6ad0d650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "AppBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5e5109649063982e22bd6e6a14f464fb76593bca908f8865f4a07f24607fcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e5109649063982e22bd6e6a14f464fb76593bca908f8865f4a07f24607fcf3->enter($__internal_b5e5109649063982e22bd6e6a14f464fb76593bca908f8865f4a07f24607fcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5e5109649063982e22bd6e6a14f464fb76593bca908f8865f4a07f24607fcf3->leave($__internal_b5e5109649063982e22bd6e6a14f464fb76593bca908f8865f4a07f24607fcf3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ec2a07195e1d14440b0a4c9f6ef305b07a7f4730afc145b5e5221d28b8b9c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec2a07195e1d14440b0a4c9f6ef305b07a7f4730afc145b5e5221d28b8b9c74->enter($__internal_8ec2a07195e1d14440b0a4c9f6ef305b07a7f4730afc145b5e5221d28b8b9c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_8ec2a07195e1d14440b0a4c9f6ef305b07a7f4730afc145b5e5221d28b8b9c74->leave($__internal_8ec2a07195e1d14440b0a4c9f6ef305b07a7f4730afc145b5e5221d28b8b9c74_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "AppBundle:Registration:confirmed.html.twig", "E:\\wamp\\www\\user\\src\\AppBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
