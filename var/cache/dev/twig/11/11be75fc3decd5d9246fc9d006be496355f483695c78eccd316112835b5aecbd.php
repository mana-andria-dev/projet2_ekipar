<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_24f5c93bd4d049ba2b1de1f023181176a93e9b066c5551ee65423e5717543ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_82403441a101de5816946307e43f562e7ff72c04128cee6c3a0012a7a9b7213d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82403441a101de5816946307e43f562e7ff72c04128cee6c3a0012a7a9b7213d->enter($__internal_82403441a101de5816946307e43f562e7ff72c04128cee6c3a0012a7a9b7213d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82403441a101de5816946307e43f562e7ff72c04128cee6c3a0012a7a9b7213d->leave($__internal_82403441a101de5816946307e43f562e7ff72c04128cee6c3a0012a7a9b7213d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f72604b78a4c9e091ee923bc384fd708af26efcb62eb7b07d36329d35992ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f72604b78a4c9e091ee923bc384fd708af26efcb62eb7b07d36329d35992ea5->enter($__internal_2f72604b78a4c9e091ee923bc384fd708af26efcb62eb7b07d36329d35992ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2f72604b78a4c9e091ee923bc384fd708af26efcb62eb7b07d36329d35992ea5->leave($__internal_2f72604b78a4c9e091ee923bc384fd708af26efcb62eb7b07d36329d35992ea5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
