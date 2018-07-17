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
        $__internal_a98252f5a0d435022d820a6e2eb224ebdc38a4f0ec4bef5eb7914be25d7fa6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98252f5a0d435022d820a6e2eb224ebdc38a4f0ec4bef5eb7914be25d7fa6b4->enter($__internal_a98252f5a0d435022d820a6e2eb224ebdc38a4f0ec4bef5eb7914be25d7fa6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a98252f5a0d435022d820a6e2eb224ebdc38a4f0ec4bef5eb7914be25d7fa6b4->leave($__internal_a98252f5a0d435022d820a6e2eb224ebdc38a4f0ec4bef5eb7914be25d7fa6b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81e144dcc934b200eb3df20083a428d00605d57cafd08c536b08986109b93d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e144dcc934b200eb3df20083a428d00605d57cafd08c536b08986109b93d22->enter($__internal_81e144dcc934b200eb3df20083a428d00605d57cafd08c536b08986109b93d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_81e144dcc934b200eb3df20083a428d00605d57cafd08c536b08986109b93d22->leave($__internal_81e144dcc934b200eb3df20083a428d00605d57cafd08c536b08986109b93d22_prof);

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
