<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c245b607c4ecf60ff452b70656dbc6666e6a70b5a9598eac9de2bb6463b6f46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_cce262bde354f5d91249d4b398519821b98d36754233f0901cc1fc77d0de521c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce262bde354f5d91249d4b398519821b98d36754233f0901cc1fc77d0de521c->enter($__internal_cce262bde354f5d91249d4b398519821b98d36754233f0901cc1fc77d0de521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cce262bde354f5d91249d4b398519821b98d36754233f0901cc1fc77d0de521c->leave($__internal_cce262bde354f5d91249d4b398519821b98d36754233f0901cc1fc77d0de521c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_396c0c3a9d95546ee4556cbeec7a4720f5e760e72ebb5cc1165ee769ab2d35db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396c0c3a9d95546ee4556cbeec7a4720f5e760e72ebb5cc1165ee769ab2d35db->enter($__internal_396c0c3a9d95546ee4556cbeec7a4720f5e760e72ebb5cc1165ee769ab2d35db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_396c0c3a9d95546ee4556cbeec7a4720f5e760e72ebb5cc1165ee769ab2d35db->leave($__internal_396c0c3a9d95546ee4556cbeec7a4720f5e760e72ebb5cc1165ee769ab2d35db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
