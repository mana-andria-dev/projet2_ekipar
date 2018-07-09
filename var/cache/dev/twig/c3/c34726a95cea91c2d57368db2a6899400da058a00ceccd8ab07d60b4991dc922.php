<?php

/* @App/Registration/confirmed.html.twig */
class __TwigTemplate_8577606f0d0d2c67fb9d80e53c9078632be5be13464aad0c80536518f6e56219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@App/Registration/confirmed.html.twig", 1);
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
        $__internal_67954322ff10852dd8a42d0f9de6bc29281b2cd365eca8ecdc620507394b8f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67954322ff10852dd8a42d0f9de6bc29281b2cd365eca8ecdc620507394b8f71->enter($__internal_67954322ff10852dd8a42d0f9de6bc29281b2cd365eca8ecdc620507394b8f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67954322ff10852dd8a42d0f9de6bc29281b2cd365eca8ecdc620507394b8f71->leave($__internal_67954322ff10852dd8a42d0f9de6bc29281b2cd365eca8ecdc620507394b8f71_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_739cc873dbea5abf8b04e62d4f12fe7e18c6beed75176bac0609475f304ffce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739cc873dbea5abf8b04e62d4f12fe7e18c6beed75176bac0609475f304ffce6->enter($__internal_739cc873dbea5abf8b04e62d4f12fe7e18c6beed75176bac0609475f304ffce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_739cc873dbea5abf8b04e62d4f12fe7e18c6beed75176bac0609475f304ffce6->leave($__internal_739cc873dbea5abf8b04e62d4f12fe7e18c6beed75176bac0609475f304ffce6_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/confirmed.html.twig";
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
", "@App/Registration/confirmed.html.twig", "E:\\wamp\\www\\user\\src\\AppBundle\\Resources\\Views\\Registration\\confirmed.html.twig");
    }
}
