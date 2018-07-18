<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_79eebf99c27a9a45b75983826d1adc1a100063b1a100b7b6443214f4bf1a952d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f033c0f8c38cb489fa16a6f2b161133b35a08582cf0c319b7b7d693e723afd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f033c0f8c38cb489fa16a6f2b161133b35a08582cf0c319b7b7d693e723afd9c->enter($__internal_f033c0f8c38cb489fa16a6f2b161133b35a08582cf0c319b7b7d693e723afd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f033c0f8c38cb489fa16a6f2b161133b35a08582cf0c319b7b7d693e723afd9c->leave($__internal_f033c0f8c38cb489fa16a6f2b161133b35a08582cf0c319b7b7d693e723afd9c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4aa7117c8a1f582858719180fcfbfec85f63e96ea27cf7c6e6b7af87b5d3b4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa7117c8a1f582858719180fcfbfec85f63e96ea27cf7c6e6b7af87b5d3b4ff->enter($__internal_4aa7117c8a1f582858719180fcfbfec85f63e96ea27cf7c6e6b7af87b5d3b4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_4aa7117c8a1f582858719180fcfbfec85f63e96ea27cf7c6e6b7af87b5d3b4ff->leave($__internal_4aa7117c8a1f582858719180fcfbfec85f63e96ea27cf7c6e6b7af87b5d3b4ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
