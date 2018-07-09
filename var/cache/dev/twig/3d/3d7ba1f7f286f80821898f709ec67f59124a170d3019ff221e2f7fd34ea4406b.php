<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_eb21733e7bcd695142dcea87f69d418709290e961d5f951d309b8af932964574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4fbb6494f1a2ed285360342a86efdad158ee94b2e5b3d76340f13824b91bc6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbb6494f1a2ed285360342a86efdad158ee94b2e5b3d76340f13824b91bc6a9->enter($__internal_4fbb6494f1a2ed285360342a86efdad158ee94b2e5b3d76340f13824b91bc6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fbb6494f1a2ed285360342a86efdad158ee94b2e5b3d76340f13824b91bc6a9->leave($__internal_4fbb6494f1a2ed285360342a86efdad158ee94b2e5b3d76340f13824b91bc6a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53b0f7385300e2c68a8537a34a0a5d1519343a844febecbb4f842f19fe137f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b0f7385300e2c68a8537a34a0a5d1519343a844febecbb4f842f19fe137f80->enter($__internal_53b0f7385300e2c68a8537a34a0a5d1519343a844febecbb4f842f19fe137f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_53b0f7385300e2c68a8537a34a0a5d1519343a844febecbb4f842f19fe137f80->leave($__internal_53b0f7385300e2c68a8537a34a0a5d1519343a844febecbb4f842f19fe137f80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
