<?php

/* @App/Registration/check_email.html.twig */
class __TwigTemplate_b7efef43ec4537cdfe499056a6a4b56248e07fe29e841ed04e2b59e45c897a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@App/Registration/check_email.html.twig", 1);
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
        $__internal_ce6dd79223cc7e936068eeb01fdf7d58daf5d78e7c415475f062bbe45ae27463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6dd79223cc7e936068eeb01fdf7d58daf5d78e7c415475f062bbe45ae27463->enter($__internal_ce6dd79223cc7e936068eeb01fdf7d58daf5d78e7c415475f062bbe45ae27463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6dd79223cc7e936068eeb01fdf7d58daf5d78e7c415475f062bbe45ae27463->leave($__internal_ce6dd79223cc7e936068eeb01fdf7d58daf5d78e7c415475f062bbe45ae27463_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb8d3d49f1e4ea385dba4a3550644827431918cffd28637d5f7633f822968617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8d3d49f1e4ea385dba4a3550644827431918cffd28637d5f7633f822968617->enter($__internal_fb8d3d49f1e4ea385dba4a3550644827431918cffd28637d5f7633f822968617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fb8d3d49f1e4ea385dba4a3550644827431918cffd28637d5f7633f822968617->leave($__internal_fb8d3d49f1e4ea385dba4a3550644827431918cffd28637d5f7633f822968617_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/check_email.html.twig";
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
", "@App/Registration/check_email.html.twig", "E:\\wamp\\www\\user\\src\\AppBundle\\Resources\\Views\\Registration\\check_email.html.twig");
    }
}
