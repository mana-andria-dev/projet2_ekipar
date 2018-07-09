<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4e759e2958eab19192c3819698b41418b06bef9fca99754ddb9acf59c767294c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_23a15dd31ec9c3b63eebbffb97b67ec2ae3ee9bbc3a880ab8aaaf580b5788e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a15dd31ec9c3b63eebbffb97b67ec2ae3ee9bbc3a880ab8aaaf580b5788e45->enter($__internal_23a15dd31ec9c3b63eebbffb97b67ec2ae3ee9bbc3a880ab8aaaf580b5788e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a15dd31ec9c3b63eebbffb97b67ec2ae3ee9bbc3a880ab8aaaf580b5788e45->leave($__internal_23a15dd31ec9c3b63eebbffb97b67ec2ae3ee9bbc3a880ab8aaaf580b5788e45_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87153fb30791f21e78dafb1585926b26faba3d028a881713bbcd262c9e263778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87153fb30791f21e78dafb1585926b26faba3d028a881713bbcd262c9e263778->enter($__internal_87153fb30791f21e78dafb1585926b26faba3d028a881713bbcd262c9e263778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_87153fb30791f21e78dafb1585926b26faba3d028a881713bbcd262c9e263778->leave($__internal_87153fb30791f21e78dafb1585926b26faba3d028a881713bbcd262c9e263778_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
