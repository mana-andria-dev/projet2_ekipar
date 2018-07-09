<?php

/* AppBundle:Registration:check_email.html.twig */
class __TwigTemplate_5ff8a95e1fe13b3bce7b05ab1f76e3abdf0a680b02e40ea0d253437df8ac7d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "AppBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7dcf0a30d38b9e7d2a665313fdd2061f55bef4f8b3acb02ce53ed712b28661eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcf0a30d38b9e7d2a665313fdd2061f55bef4f8b3acb02ce53ed712b28661eb->enter($__internal_7dcf0a30d38b9e7d2a665313fdd2061f55bef4f8b3acb02ce53ed712b28661eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dcf0a30d38b9e7d2a665313fdd2061f55bef4f8b3acb02ce53ed712b28661eb->leave($__internal_7dcf0a30d38b9e7d2a665313fdd2061f55bef4f8b3acb02ce53ed712b28661eb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f81bc4cbf3e4dafd6b167bf9fe501ddff66fd4b9ca22dac92bdebd16adfe2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f81bc4cbf3e4dafd6b167bf9fe501ddff66fd4b9ca22dac92bdebd16adfe2c2->enter($__internal_9f81bc4cbf3e4dafd6b167bf9fe501ddff66fd4b9ca22dac92bdebd16adfe2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9f81bc4cbf3e4dafd6b167bf9fe501ddff66fd4b9ca22dac92bdebd16adfe2c2->leave($__internal_9f81bc4cbf3e4dafd6b167bf9fe501ddff66fd4b9ca22dac92bdebd16adfe2c2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "AppBundle:Registration:check_email.html.twig", "E:\\wamp\\www\\user\\src\\AppBundle/Resources/views/Registration/check_email.html.twig");
    }
}
