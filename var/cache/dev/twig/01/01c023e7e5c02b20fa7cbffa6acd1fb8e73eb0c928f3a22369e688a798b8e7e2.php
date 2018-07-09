<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_2ce921f105c1f11a5b675d2684a11ef93dc9b80a4100ea6b95bf3cd067d3b4ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_0be26361b5e76c099658ab578dfe4a370d2f704443f2147fa73f20898b50c499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be26361b5e76c099658ab578dfe4a370d2f704443f2147fa73f20898b50c499->enter($__internal_0be26361b5e76c099658ab578dfe4a370d2f704443f2147fa73f20898b50c499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be26361b5e76c099658ab578dfe4a370d2f704443f2147fa73f20898b50c499->leave($__internal_0be26361b5e76c099658ab578dfe4a370d2f704443f2147fa73f20898b50c499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_498d7b99d2d576718cde5a34f38e8551aa9f2b31bf28d6cbb8f85da6da7260b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498d7b99d2d576718cde5a34f38e8551aa9f2b31bf28d6cbb8f85da6da7260b3->enter($__internal_498d7b99d2d576718cde5a34f38e8551aa9f2b31bf28d6cbb8f85da6da7260b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_498d7b99d2d576718cde5a34f38e8551aa9f2b31bf28d6cbb8f85da6da7260b3->leave($__internal_498d7b99d2d576718cde5a34f38e8551aa9f2b31bf28d6cbb8f85da6da7260b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
