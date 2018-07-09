<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_55edca75b6e4a7fc49618380b2346a0ad8ace054a6460397667d5c2770debc68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_d6ccb15db0f85862a4a9eb4c1adcffcb6481592f1f5567e6912046094218f0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ccb15db0f85862a4a9eb4c1adcffcb6481592f1f5567e6912046094218f0b7->enter($__internal_d6ccb15db0f85862a4a9eb4c1adcffcb6481592f1f5567e6912046094218f0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ccb15db0f85862a4a9eb4c1adcffcb6481592f1f5567e6912046094218f0b7->leave($__internal_d6ccb15db0f85862a4a9eb4c1adcffcb6481592f1f5567e6912046094218f0b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22a23a4224095ae5187826cac882a950cb951858766f037ebeeebdda2f68d827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a23a4224095ae5187826cac882a950cb951858766f037ebeeebdda2f68d827->enter($__internal_22a23a4224095ae5187826cac882a950cb951858766f037ebeeebdda2f68d827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_22a23a4224095ae5187826cac882a950cb951858766f037ebeeebdda2f68d827->leave($__internal_22a23a4224095ae5187826cac882a950cb951858766f037ebeeebdda2f68d827_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
