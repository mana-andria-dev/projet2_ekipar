<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4053d340a14d08f5a29796ece3944696bd59b162dd0d41caa2cbd827fc145d47 extends Twig_Template
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
        $__internal_a8472cf87d64b6e77879c7dc5f3dc6991672cb47566a1614efafd0b73c849131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8472cf87d64b6e77879c7dc5f3dc6991672cb47566a1614efafd0b73c849131->enter($__internal_a8472cf87d64b6e77879c7dc5f3dc6991672cb47566a1614efafd0b73c849131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8472cf87d64b6e77879c7dc5f3dc6991672cb47566a1614efafd0b73c849131->leave($__internal_a8472cf87d64b6e77879c7dc5f3dc6991672cb47566a1614efafd0b73c849131_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a9c9a5e929e4f3e5c82d7a1e81d2cfea5e90e4b47b2db1ceca1a696f9567b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9c9a5e929e4f3e5c82d7a1e81d2cfea5e90e4b47b2db1ceca1a696f9567b60->enter($__internal_1a9c9a5e929e4f3e5c82d7a1e81d2cfea5e90e4b47b2db1ceca1a696f9567b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1a9c9a5e929e4f3e5c82d7a1e81d2cfea5e90e4b47b2db1ceca1a696f9567b60->leave($__internal_1a9c9a5e929e4f3e5c82d7a1e81d2cfea5e90e4b47b2db1ceca1a696f9567b60_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
